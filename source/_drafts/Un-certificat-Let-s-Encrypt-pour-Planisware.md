title: Un certificat Let's Encrypt pour Planisware
id: 836
comment: false
categories:
  - Non classé
tags:
---

Let's Encrypt, c'est la nouvelle autorité de certification qui vous permet de générer un certificat SSL gratuitement. De quoi mettre au rebut les certificats auto-signés et ne plus rencontrer le message "this connection is untrusted".

En béta publique depuis début décembre, l'équipe Tyneo vous propose en avant première la procédure pour générer vos propres certificats Let's Encrypt pour Planisware.

Pour rappel, vous pouvez utiliser notre[ script d'installation automatique de Planisware](http://www.tyneo-consulting.fr/blog/2015/10/21/installer-planisware-en-une-seule-commande/) pour procéder à l'installation des services Planisware avec l'ensemble des dépendances sur une distribution Ubuntu Server.

sudo apt-get install git ca-certificates

sudo git clone https://github.com/letsencrypt/letsencrypt /root/letsencrypt

sudo service apache2

    /root/letsencrypt/letsencrypt-auto certonly \
       --standalone --agree-tos \
       --email myaddress@tyneo.net -d myplan.tyneo.net \
       --standalone-supported-challenges tls-sni-01`</pre>

    ### Mettre en place le renouvellement automatique du certificat

    Les certificats Let’s Encrypt ne sont valide que 90 jours. Il faut donc les renouveler régulièrement. Nous allons automatiser ce renouvellement en créant une tâche périodique qui générera de nouveaux certificats le 1er de chaque mois.

    Créez un fichier `/root/renew_cert.sh` contenant le script suivant :
    <pre>`#!/bin/sh
    /etc/init.d/nginx stop
    /root/letsencrypt/letsencrypt-auto certonly --standalone -d mycozy.domain.com --standalone-supported-challenges tls-sni-01 --renew-by-default
    /etc/init.d/nginx start
    `</pre>
    (en replaçant `mycozy.domain.com` par l’adresse de votre Cozy)

    Rendez ce script executable
    <pre>`chmod u+x /root/renew_cert.sh
    `</pre>
    Vous pouvez testez ce script en l’exécutant manuellement (attention, des [quotas sont en place](https://community.letsencrypt.org/t/rate-limits-for-lets-encrypt/6769) : vous ne pouvez générer que 5 certificats par semaine pour un même domaine).

    Il nous reste à lancer le script automatiquement tous les mois.

    Ouvrez votre crontab :
    <pre>`crontab -e
    `</pre>
    Ajoutez la ligne suivante à la fin du fichier, puis enregistrez-le
    <pre>`0 3 1 * * /root/renew_cert.sh

Voilà, votre certificat sera désormais automatiquement renouvelé le 1er de chaque mois à 3h du matin. Profitez du bonheur de ne plus ajouter ces exceptions.