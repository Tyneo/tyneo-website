title: Sélectionner la version de Docfactory dans Caliber
description: Configurer Caliber pour utiliser docfactory 1 ou docfactory 2
keywords: docfactory, caliber
og_type: article
main_tag: Caliber
tags:
  - Astuce
  - Caliber
  - Docfactory
id: 105
comment: false
categories:
  - Caliber
date: 2012-11-29 09:04:40
---

Caliber propose un puissant générateur de document Word. Celui-ci ayant bien évolué au fur et à mesure des années s'est vu être entièrement réécrit et aujourd'hui, il en existe deux versions : Docfactory 1 et Docfactory 2.

Outre les variantes de syntaxe dans les modèles de documents, la principale différence réside dans les performances de l'application de génération des documents. Docfactory 2 est sans commune mesure avec son prédécesseur bien plus performant. Docfactory 2 est le générateur de document activé par défaut, toutefois celui-ci n'est pas compatible avec toutes les versions du pack Office et je me rends compte encore régulièrement que tous mes clients n'ont pas encore migré vers les dernières version de la suite bureautique de Microsoft. Aussi, je vous livre dans cet article le moyen de solliciter depuis Caliber l'ancienne version de docfactory qui sera compatible avec les versions les plus anciennes de Word.
<!-- more -->
Pour cela, vous devez avoir des droits vous permettant de modifier la base de registre de votre système d'exploitation. En lançant l'utilitaire "regedit" depuis le menu Démarrer >; Exécuter, il faudra modifier (ou créer si elle n'existe pas) la clé de registre suivante :
<pre lang="JAVASCRIPT">Dans le dossier : HKEY_CURRENT_USERSoftwareBorlandCaliberRMLaunching DocFactory
Créer une valeur chaîne : Executable Name
Renseigner la valeur : "DocFactory.exe" ou "DocFactory2.exe" pour docfactory2</pre>
Une fois cette manipulation réalisée, vous n'avez plus qu'à redémarrer l'application Caliber et lorsque vous solliciterez à nouveau docfactory depuis le menu "Outils", les raccourcis de la barre d'outils ou depuis la grille d'exigences, ce sera docfactory 1 qui s’exécutera.

<span style="text-decoration: underline;">Pour aller plus loin :</span>
Techniquement, on voit que l'application Caliber ne fait qu'appeler l’exécutable "docfactory.exe" présent dans le dossier d'installation de caliber. Il devient alors facile de créer votre propre exécutable remplaçant le document factory natif de Caliber. On trouve passé en argument l'ensemble des éléments nécessaires pour traiter la demande (Identifiant de connexion, serveur, noeud d'exigences sélectionné...).

Personnellement, j'ai mis en oeuvre cette solution pour répondre à des besoins spécifiques de certains clients tout en améliorant encore les performances de génération de document et la simplicité de l'interface; l'outil s’intégrant parfaitement à l'application.