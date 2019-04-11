title: Un script Planisware qui plante au démarrage ?
description: Un script OJS chargé au démarrage plante et Planisware ne veut pas démarrer ? Découvrez notre astuce pour résoudre ce problème.
keywords: ojs, script, planisware, opx2
og_type: article
main_tag: Planisware tutorial
tags:
  - Astuce
  - Planisware tutorial
id: 182
comment: false
categories:
  - Planisware
date: 2012-12-17 08:45:52
---

![Blackout](/blog/wp-content/uploads/2012/12/Internet-Blackout-300x191.png)
La semaine dernière, chez un client nous nous sommes confrontés à un problème quelque peu ennuyeux. En effet, suite à la modification d’un script lancé au chargement de l’application sur l’environnement de développement, une erreur s’est glissée provoquant un crash systématique de Planisware (Pro et IS).

Malheureusement, ce script était chargé et exécuté avec tous les comptes utilisateurs de l’application.
<!-- more -->
Après maintes recherches et tests, nous nous sommes résolu au fait que Planisware ne proposait pas d’option ou d’astuce pour éviter l’évaluation d’un script OJS afin de résoudre notre problème.

### Seule solution, restaurer la base ?

Pas tout à fait… Les scripts sont naturellement stockés en base de données, une solution consisterait alors à identifier ce script en base et à le supprimer ou annuler son évaluation automatique au chargement de l’application.

Les scripts sont contenu dans la table « environment_object » du modèle de données de l’application Planisware. Une simple requête SQL permet d’identifier le script recherché :
<pre>SELECT *
FROM environment_object
WHERE format_description like '%JAVASCRIPT%'
AND content like '%NOM_DU_SCRIPT_OU_CONTENU%'</pre>
Une fois la ligne identifié, il faut soit supprimer le script en positionnant un dataset négatif afin que le script ne soit plus chargé, soit modifier la valeur « EVALUATE-ON-LOAD » du script (colonne format_description) afin que la ligne ne soit plus évaluées.

Bien que cette mésaventure ait pu se régler sans trop de dommage, il me semble nécessaire de tirer au moins deux leçons de cette histoire :

### Sauvegarder vos environnements de développement Planisware

Il reste nécessaire de penser à sauvegarder votre environnement régulièrement, même l’environnement de développement. Pensez à la charge de travail supplémentaire nécessaire pour refaire votre travail de toute une semaine… ou plus… Une bonne solution consiste donc à réaliser une archive de la base de données chaque nuit de votre environnement de développement. A vous de juger du nombre de sauvegarde qu’il convient de conserver. Pour ma part, conserver les 3 dernières archives me parais suffisant.

N’hésitez pas à consulter notre article sur la sauvegarde de la base de données avec Planisware pour en savoir plus.

### Conserver un utilisateur avec le paramétrage standard

Le fait de séparer les nos développements Planisware du standard est relativement bien appliqué par les intégrateurs et était mis en place chez le client où nous avons vécu ces quelques péripéties.

Je tire toutefois une conclusion supplémentaire ou il doit être nécessaire de conserver un utilisateur par exemple le compte « admin » qui à la connexion, ne chargera pas la configuration spécifique du client. Cette bonne pratique peut présenter de nombreux avantages en plus de celui qui aurait permis de solutionner le problème évoqué dans se billet sans pour autant avoir besoin d’accéder à la base données.