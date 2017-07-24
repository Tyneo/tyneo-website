title: Sauvez vos données Planisware !
description: Les méthodes pour sauvegarder et restaurer son environnement Planisware
keywords: dpx, sauvegarde, environnement, planisware, dump, oracle
og_type: article
id: 149
comment: false
main_tag: Planisware tutorial
categories:
  - Planisware
date: 2012-12-14 19:19:34
tags:
---

Il est toujours nécessaire de sauvegarder régulièrement ses environnements Planisware. Tout d’abord pour s’assurer de pouvoir restaurer un état précédent d’une base suite à une défaillance ou à une perte de données. Ensuite, vous pouvez (même très certainement) être amené à gérer plusieurs environnement et souhaiter les restaurer entre eux (restaure l’environnement de production sur l’environnement de maintenance, ….). Bref, pour ce faire, il est essentiel de maitriser les étapes de sauvegarde et restauration de vos environnements Planisware.

Deux méthodes sont utilisables pour effectuer ce genre de manipulation. La première consiste à réaliser ce traitement depuis Planisware Pro, ce qui a l’avantage de permettre la sélection des éléments à sauvegarder. La deuxième possibilité se fait à travers les outils du SGBDR, ce qui permet d’effectuer une sauvegarde rapide des données.
<!-- more -->
## Depuis Planisware Pro

### Sauvegarder une base depuis Planisware Pro

Pour ce faire, vous devez lancer l’application Planisware Pro avec un compte administrateur, puis vous positionner dans ce mode Administrateur.
Depuis le menu « File &gt; administration &gt; Dump Database », vous aller pouvoir solliciter l’outil de sauvegarde inclus dans l’application Planisware.
![](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2012/12/popup_database_dump-263x300.jpg "popup_database_dump")
Cet écran présente différentes sections permettant de réduire le périmètre des données qui seront archivées. Par défaut, toutes les données sont archivées à l’exception des objets supprimés et des documents (voir les deux cases décochées)

#### Section « Datas »

Cette section vous permet de sélectionner le ou les projets que vous souhaiter inclure dans votre sauvegarde. Un champ de filtre permet de ne sauvegarde que les éléments répondant à ce critère. Vous pouvez par exemple sauvegarde tous les projets actifs en utilisant ce filtre :
![](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2012/12/section_filter-300x15.jpg "section_filter")
N’oubliez pas de cliquer sur le bouton « Apply » afin que Planisware évalue ce filtre.

#### Section « Status » et Section « Audits »

Depuis ces sections vous pouvez choisir d’exporter ou non les statuts et les éléments générés par les différents outils d’audits (transactions, W7 log…)

#### Section « Options »

Cette section ne propose qu’une option, qui est d’exporter ou non les objets supprimés. En effet, lorsqu’un utilisateur supprime un objet, que ce soit un projet, une tâche ou un autre élément, cet objet n’est pas réellement supprimé en base mais simplement tagué pour qu’il soit ignoré.
Techniquement, la valeur du champ dataset de l’objet est passée en négatif. Je vous conseille de faire de même dans vos opérations de suppression en base afin de limiter les risques. Pour restaurer l’objet, il suffira de repasser ce dataset en valeur positive.

#### Section « File »

Dans cette section, vous devez indiquer l’emplacement où sera déposé l’archive réalisée. Le fichier généré porte l’extension .dpx.gz (fichier dpx compressé).
Une fois que vous avez sélectionné les différentes options souhaitées, cliquez simplement sur le bouton « Ok » pour lancer l’opération de sauvegarde. L’archivage de la base peut durer un certain temps et plusieurs facteurs peuvent impacter sur le traitement comme la volumétrie, les options sélectionnées, les performances de votre poste et le débit de votre connectivité réseau.

### Restaurer une base depuis Planisware Pro

Pour restaurer une archive réalisée depuis Planisware Pro (fichier .dpx.gz), vous devez lancer l’application Planisware Pro avec un compte administrateur, puis vous positionner dans ce mode Administrateur.
Depuis le menu « File &gt; administration &gt; Restore Database », vous aller pouvoir solliciter l’outil de restauration inclus dans l’application Planisware.
Ici les étapes de customisations sont moins nombreuses, l’assistant de restauration vous propose seulement de choisir l’archive avant de la restaurer puis vous demande de confirmer la restauration immédiate de l’environnement.
A la fin de la restauration, le client Planisware Pro vous avertira qu’il doit être relancé pour que vous puissiez manipuler les données restaurées.
Je vous conseille alors de relancer Planisware Pro avec l’utilisateur ayant réalisé la sauvegarde afin de déverrouiller le mode Administrateur (il ne peut y avoir qu’un seul utilisateur utilisant le mode administrateur à un instant T sur Planisware Pro).

## Depuis Oracle

### Sauvegarder une base avec les outils Oracle

Pour sauvegarder la base de données Oracle et être à même de la restaurer sur cette même machine ou une autre, vous devez lancer une invite de commande et entrer la ligne suivante :
<pre lang="SQL">exp [Utilisateur_Oracle]/[Mot_de_passe_Oracle]@[Serveur_oracle] file=c:backupbackup_planisware.dump log=c:backupbackup_planisware-exp.log rows=y owner=&lt;owner_schema_Oracle&gt;</pre>
Il conviendra bien entendu de modifier les paramètres présentés afin de les adapter à votre environnement et votre système d’exploitation.

### Restaurer une base avec les outils Oracle

Pour restaurer une archive, il faut utiliser la commande suivante :
<pre lang="SQL">imp [Utilisateur_Oracle]/[Mot_de_passe_Oracle]@[Serveur_oracle] file=c:backupbackup_planisware.dump log=c:backupbackup_planisware-imp.log</pre>
Il est nécessaire, comme dans l’étape précédente d’adapter les paramètrers