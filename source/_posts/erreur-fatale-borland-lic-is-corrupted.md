title: Erreur fatale... borland.lic is corrupted
description: Résoudre l'erreur borland.lic is corrupted
keywords: borland, erreur corba, corrupted
og_type: article
main_tag: Caliber
tags:
  - Astuce
  - Borland
  - Caliber
id: 109
comment: false
categories:
  - Caliber
date: 2012-12-03 09:47:32
---

Petite astuce... Il peut vous arriver que Caliber ne veuille plus démarrer et en observant le journal d'activité de l'application obtenir cette trace :
<!-- more -->
<pre lang="LOG">*** Main Caught the following CORBA Exception
Exception: CORBA::NO_PERMISSION
Explanation: License storage E:BorlandCaliberRMServerVisibrokerborland.lic is corrupted, licensing data cannot be recovered.
Please register your Borland product(s) again. (1:7004,0,0,0)
Minor: 1330446336
Completion Status: NO</pre>

Ce problème apparaît principalement lorsqu'il n'y a plus suffisamment d'espace sur le disque où l'application est installée. Malheureusement, même après avoir rigoureusement libéré de l'espace disque, l'application Caliber ne démarrera pas.

L'astuce : Supprimer le fichier "borland.lic" situé dans le répertoire d'installation (par défaut C:BorlandCaliberRMServerVisibroker). Ce fichier sera automatiquement recréé par Caliber au prochain démarrage.