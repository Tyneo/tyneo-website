title: Installer Planisware en une seule commande
description: Script d’installation automatique de Planisware
keywords: planisware, devops, script, automatique
og_type: article
main_tag: Planisware tutorial
tags:
  - Astuce
  - lab'tech
  - Processus
  - script
  - tyneo
  - Planisware tutorial
id: 767
comment: false
categories:
  - Astuce
  - Planisware
date: 2015-10-21 12:49:20
---

Si comme nous, vous intervenez dans le paramétrage et le développement [Planisware](http://www.planisware.com) de plusieurs clients et que vous devez gérer vos propres environnements de développement Planisware, cet article va vous intéresser...

Chez Tyneo, nous avons pris l'habitude de créer une machine virtuelle ([Virtualbox](https://www.virtualbox.org/)) pour chaque projet. Ceci nous permet d'installer plusieurs configurations et de l'adapter à nos clients sans qu'il y ait d’interférences entre les différents projets. Toutefois, cette tâche d'administration peut paraître un peu lourde à entreprendre. C'est ainsi que nous avons développé un script permettant d'installer sur une VM Linux Ubuntu Planisware avec l'ensemble des pré-requis nécessaires.

Comme nous le faisons régulièrement depuis la création de Tyneo en 2012, nous souhaitions partager avec vous ce script d'installation automatique.

Mais avant tout, il peut être intéressant de détailler comment installer Planisware sur Linux ?
<!-- more -->
## Installer Planisware sur Linux

Cette procédure se base sur une distribution [Linux Ubuntu Server 14.04 LTS (trusty)](http://www.ubuntu.com/download/server) fraîchement installée.

Pour commencer, il est toujours recommandé de mettre à votre la liste de paquets disponibles via la commande "apt-get update"

    <span id="LC27" class="line">sudo apt-get update</span>`</pre>

    ### Installer les pré-requis Planisware

    <pre class="code highlight">`<span class="line">sudo apt-get install -y default-jre
    sudo apt-get install -y apache2
    sudo apt-get install -y postgresql</span>`</pre>
    Comme vous l'aurez remarqué, nous avons fait le choix d'utiliser la base de données relationnelles [PostgreSQL](http://www.postgresql.org/). Comme cette base de données est désormais supportée par Planisware et qu'elle est performante et surtout open-source, PostgreSQL sera un bon compagnon pour nos projets Planisware.

    ### Configurer la base de données PostgreSQL

    ![Logo PosgreSQL](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2015/10/postgresql-logo.png "Logo PosgreSQL")

    Maintenant que nous avons installé l'ensemble des pré-requis nécessaires au bon fonctionnement de Planisware, nous allons initier notre base de données.
    <pre class="code highlight">`<span class="line">sudo -u postgres psql -c "CREATE USER [PLW_DB_USER]"
    sudo -u postgres psql -c "ALTER USER [PLW_DB_USER] WITH PASSWORD '[PLW_DB_USER_PWD]'"
    sudo -u postgres psql -c "ALTER ROLE [PLW_DB_USER] WITH CREATEDB"
    sudo -u postgres psql -c "CREATE DATABASE \"[PLW_DB_NAME]\" OWNER [PLW_DB_USER]"
    sudo -u postgres psql -c "GRANT ALL PRIVILEGES ON DATABASE \"[PLW_DB_NAME]\" to [PLW_DB_USER]"</span>`</pre>
    Ces quelques commandes vont :
    - créer un utilisateur Planisware disposant des droits nécessaires à la création d'une base de données,
    - puis, créer la base de donnée en déclarant l'utilisateur précédemment créé comme propriétaire,
    - et enfin attribuer l'ensemble des droits nécessaires au propriétaire sur la nouvelle base de donnée.

    Pour pouvoir exécuter la commande, remplacez les paramètres suivants :
    - [PLW_DB_USER]: Nom de l'utilisateur postgresql. Exemple: planisware
    - [PLW_DB_USER_PWD]: Mot de passe de l'utilisateur. Exemple: planisware
    - [PLW_DB_NAME]: Nom de la base de donnée. Exemple: plan

    Notre base de donnée est maintenant prête à être initialisée par l'installeur Planisware et à être utilisée.

    ### Création de l'utilisateur Planisware

    Il est préférable de créer un utilisateur applicatif qui sera en charge d'executer les processus de l'application Planisware par la suite. Nous allons avec ces quelques lignes, tout d'abord créer un groupe utilisateurs nommé "planisware" puis créer l'utilisateur "planisware".
    <pre class="code highlight">`<span class="line">sudo addgroup planisware
    sudo useradd planisware -g planisware --shell /bin/bash -M -d /usr/local/planisware -c "Planisware user"</span>`</pre>
    Dans cette configuration, l'utilisateur "planisware" n'a pas pour vocation d'être utilisé directement. Dans un environnement Linux, il est préférable d'utiliser à compte nominatif et d'exécuter des commandes pour le compte de l'utilisateur via la commande "sudo -u planisware [CMD]".

    ### Téléchargement de l'installeur Planisware

    <pre class="code highlight">`<span class="line">mkdir ~/plw_install
    cd ~/plw_install
    wget ftp://[PLW_USER_FTP]:[PLW_PWD_FTP]@ftp.planisware.com/Processes/PlaniswareV6/6.1.1.1/Install/plw_install_linux_6.1.0.a.tar.gz
    tar -xzf plw_install_linux_6.1.0.a.tar.gz</span>`</pre>
    Ici nous téléchargeons directement depuis le FTP de Planisware la dernière version Planisware 6.1.1.1\. Il est nécessaire pour cela de disposer des identifiants permettant d'accéder au FTP Planisware et de remplacer les paramètres [PLW_USER_FTP] et [PLW_PWD_FTP] dans les lignes ci-dessus.

    ### Création des répertoires d'installation Planisware

    <pre class="code highlight">`<span class="line">sudo mkdir -p /opt/planisware
    sudo mkdir -p /usr/local/planisware
    sudo chown -R planisware:planisware /opt/planisware
    sudo chown -R planisware:planisware /usr/local/planisware</span>`</pre>

    Planisware sera installé dans le répertoire "/opt/planisware". Quant au répertoire "/usr/local/planisware", il sera utilisé pour accueillir l'installation du ou des environnements.

    ### Lancement de l'installation

    Pour installer Planisware, vous devez exécuter le script d'installation via la commande ci-dessous et répondre aux quelques questions posés par l'installeur.
    <pre class="code highlight">`<span class="line">cd ~/plw_install
    sudo -u planisware ./install.sh</span>`</pre>

    ### Configurer Apache

    ![Logo Apache](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2015/10/apache-logo.png "Logo Apache")La dernière étape de l'installation de Planisware nécessite de configurer [Apache](https://httpd.apache.org/). En effet, depuis quelques versions, Planisware ne livre plus d'installation pré-packagée avec le serveur HTTP. Cette tâche nous reviens :
    <pre class="code highlight">`<span class="line">sudo ln -s /usr/local/planisware/plan/httpserver/conf/mod_opx2.load /etc/apache2/mods-available/000mod_opx2.load
    sudo ln -s /usr/local/planisware/plan/httpserver/conf/plw.conf /etc/apache2/sites-available/plan.conf
    sudo a2enmod 000mod_opx2
    sudo a2ensite plan.conf
    sudo service apache2 reload</span>`</pre>
    A ce stade, vous disposez d'un environnement Planisware prêt à être utilisé. Pour démarrer les processus Planisware, exécutez la commande suivante :
    <pre class="code highlight">`<span class="line">sudo /usr/local/planisware/plan/bin/start_plw</span>`</pre>

    ## Auto installation de Planisware

    En préambule de cet article, je vous présentais un script d'installation automatisé permettant de s'épargner l'ensemble de ces commandes.
    Téléchargez le script : [http://jirachi.tyneo.net/open-source/planisware-utils/raw/master/install/auto-install.sh](http://jirachi.tyneo.net/open-source/planisware-utils/raw/master/install/auto-install.sh)
    <pre class="code highlight">`<span class="line">mkdir ~/plw_install
    cd ~/plw_install
    wget http://jirachi.tyneo.net/open-source/planisware-utils/raw/master/install/auto-install.sh</span>`</pre>
    Editez le fichier "auto-install.sh" et modifiez les paramètres suivants selon vos besoins :
    <pre class="code highlight">`<span class="line">#Connexion au serveur FTP Planisware
    export PLW_USER_FTP=mon_user
    export PLW_PWD_FTP=mon_password
    export PLW_INSTALLER_FTP=ftp.planisware.com/Processes/PlaniswareV6/6.1.1.1/Install/plw_install_linux_6.1.0.a.tar.gz

    #Configuration de la base de données
    export PLW_DB_NAME=planisware
    export PLW_DB_USER_PWD=planisware
    export PLW_DB_USER=planisware

    #Configuration de l'environnement d'installation
    export PLW_ENV_NAME=plan

    export PLW_INSTALL_DIR=/opt/planisware</span>`</pre>
    Pour lancer l'installation, exécutez simplement le script. A la fin du traitement, vous devriez obtenir un message vous invitant à lancer les processus Planisware :
    <pre class="code highlight">`<span class="line">./auto-install.sh
    .....
    .....
    Congratulation ! Planisare installation is done."

    - Database information:
      database name: planisware
      login: planisware
      password: planisware

    - Admin page (watchdog):
      login: admin
      password: plw

    Please start planisware with the following command:
     sudo /usr/local/planisware/plan/bin/start_plw</span>`</pre>
    Exécutez la commande ci-dessous puis affichez depuis votre navigateur la page http://[IP-de-la-VM]/plan/
    <pre class="code highlight">`<span class="line">sudo /usr/local/planisware/plan/bin/start_plw</span>

![Page d](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2015/10/planisware-v6.png "Page d")

Il ne vous reste plus qu'à installer depuis la console console système le dernier DPE ou restaurez un DPX.

Vous avez des questions, des remarques ? [contactez-nous](http://www.tyneo-consulting.fr/fr/contact.html) !