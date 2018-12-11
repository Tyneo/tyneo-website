title: Configurer l'accès LDAP de Caliber
description: Découvrons comment Borland Caliber permet de s’interfacer avec un annuaire LDAP afin de déléguer l’authentification des utilisateurs
keywords: ldap, annuaire, sso, caliber, borland
og_type: article
main_tag: Caliber
tags:
  - Astuce
  - Caliber
  - LDAP
  - Paramétrage
id: 321
comment: false
categories:
  - Caliber
date: 2013-03-26 13:59:50
---

L’outil de gestion des exigences de [Microfocus](http://www.microfocus.fr "Site de Microfocus France"), Borland Caliber permet de s’interfacer avec un annuaire [LDAP](http://fr.wikipedia.org/wiki/Lightweight_Directory_Access_Protocol "Qu") afin de déléguer l’authentification des utilisateurs à celui-ci.

Ce fonctionnement vous permet de garantir le niveau de sécurité des comptes utilisateurs et d’offrir un système d’authentification centralisé pour vos utilisateurs leur demandant de ne retenir qu’un seul mot de passe.
<!-- more -->
### Un accès SSO ?

Le mot de passe ne sera donc pas conservé par Caliber, et l’outil sollicitera à chaque connexion d’un utilisateur l’annuaire pour s’assurer que le mot de passe est valide. Ainsi, même si le mot de passe venait à changer, cela ne poserait aucun souci à Caliber qui le prendrait immédiatement en compte.

Pour autant, Caliber n’offre pas un système d’accès [SSO](http://fr.wikipedia.org/wiki/Sso "Qu") (Single Sign-On) et oblige l’utilisateur à saisir son mot de passe même si celui-ci est identique à celui utilisé lors de la connexion à la session Windows.

### Et concrètement comment configurer LDAP ?

Pour activer l’authentification des utilisateurs à travers l’annuaire LDAP de l’entreprise, il est nécessaire de réaliser le paramétrage suivant :

Dans la fenêtre « Caliber Data Server Settings » du panneau de configuration Windows, il faudra se positionner sur l'onglet "Directory Services" et sélectionner l'option "Enabled". Le reste des paramètres dépendent de la configuration de votre annuaire LDAP. Il sera donc nécessaire de vous rapprocher de votre administrateur LDAP pour renseigner ces champs.

![caliber LDAP](//blog/wp-content/uploads/2013/03/caliber_ldap1-300x206.png)

Puis au niveau de la configuration des utilisateurs depuis Caliber Administrator, il est nécessaire de sélectionner l’option d’authentification LDAP et de ressaisir le login de l’utilisateur dans la partie appropriée.

![caliber LDAP 2](//blog/wp-content/uploads/2013/03/caliber_ldap2-300x204.png)

Après redémarrage des services Caliber via les commandes _dbmgr -stop_ et _dbmgr -start_, L’ensemble des modules (Caliber Author, Caliber Review et Caliber Visualize) utiliseront l’annuaire LDAP dans le processus d’authentification des utilisateurs.

_Vous souhaitez en savoir plus sur l'administration de Caliber ? _Découvrez notre formation ["Administration de l'outil Caliber"](//fr/training/caliber_administrator "Programme de formation Administrateur").