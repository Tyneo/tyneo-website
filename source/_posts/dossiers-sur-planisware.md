title: L'utilisation des Dossiers (folder) sur Planisware
description: Découvrez le concept des folder / dossier dans Planisware
keywords: folder, classeur, dossier, planisware, paramétrage
og_type: article
main_tag: Planisware tutorial
tags:
  - Astuce
  - Planisware tutorial
  - Reporting
id: 226
comment: false
categories:
  - Planisware
date: 2013-01-02 19:06:30
---

Aujourd'hui, j'ai choisi de vous présenter une fonctionnalité que j'apprécie particulièrement lors que je construis des rapports avec [Planisware](http://www.planisware.com "Site Planisware") : les dossiers (folders).
<!-- more -->
![Illustration des dossiers dans Planisware](/blog/wp-content/uploads/2013/01/dossier_surendetement1-300x199.jpg)


### Qu'est ce que les Dossiers dans Planisware ?

Les dossiers permettent de réaliser deux choses. La première, étant de réaliser des onglets sur un formulaire à l’instar de ceux que l’on peut réaliser sur les tableaux et la seconde de permettre de déléguer une partie d’un formulaire à un autre rapport.

### Comment utiliser les Dossiers dans un rapport Planisware ?

Très simplement, en mode « Rapport » et au sein de la palette d’outils (ou depuis le menu « Insert »), vous avez la possibilité d’ajouter le composant « Folder » ![Planisware (Icone du dossier Folder)](//blog/wp-content/uploads/2013/01/ico-folder.png). Une fois inséré dans votre rapport vous devez le configurer afin d’y afficher le sous rapport désiré ainsi que le ou les rapports secondaires qui seront affichés sous la forme d’onglets supplémentaires.

![Planisware (Rapport du formulaire d](/blog/wp-content/uploads/2013/01/plw-task_report_with_folder.png)

### Pourquoi les dossiers sont indispensables ?

### Des composants communs

L’une des utilisations des plus courantes pour ma part, outre les traditionnels onglets, est de définir des composants réutilisables. En effet, si vous souhaitez personnaliser par exemple le popup des projets ainsi que le popup des opportunités pour y afficher des informations identiques, étant techniquement des objets de la classe Project, pourquoi ne pas créer un composant commun grâce à l’utilisation des dossiers? Les gains sont immédiats en termes de mise en place mais aussi futurs puisqu’un seul écran aura besoin d’être modifié le cas échéant.

### Le « replacer »

Dans le même genre d’idée et pour certains clients ayant plusieurs applications sur la même base commune, j’utilise les dossiers conjointement avec le design pattern « replacer ».

![Planisware (Schéma application multiple et dossier)](/blog/wp-content/uploads/2013/01/plw-multiapp_folder.png)

Dans le schéma ci-dessous, les applications disposent d’un noyau commun (à gauche) où sont définis les différents écrans partagés. Le design pattern « replacer » consiste à définir seulement la partie spécifique à chaque application. Pour ce faire, la partie généraliste du rapport devra être définie dans les fichiers communs du noyau et devra contenir un dossier pointant vers un rapport vide par exemple. Chaque application devra alors définir un nouveau rapport remplaçant le rapport vide créé dans les fichiers communs.

Ainsi si vous changer la partie généraliste du rapport, chaque application en bénéficiera. Seule la partie spécifique est définie dans vos applications ce qui facilite grandement la maintenance et les migrations.

![Planisware (Rapport sur le formulaire d](/blog/wp-content/uploads/2013/01/plw-two_task_report3-1024x340.png)

Vous utilisez les composants Dossier pour d’autres choses ? Partagez vos idées en m’envoyant un mail à [skauffmann@tyneo.net](mailto:skauffmann@tyneo.net) et je les publierai.