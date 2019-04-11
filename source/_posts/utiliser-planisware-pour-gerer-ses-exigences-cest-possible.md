title: 'Utiliser Planisware pour gérer ses exigences, c''est possible ?'
description: Planisware dispose de fonctionnalités de gestion des exigences, mais sont-elles suffisantes pour spécifier correctement nos exigences ? On essaye d'y répondre à travers ce nouvel article...
keywords: exigence, requirement, planisware
og_type: article
og_image: images/blog/ie_activities-1024x409.png
id: 841
comment: false
main_tag: Planisware tutorial
tags:
  - Documentation
  - Exigence  
categories:
  - Planisware
  - Exigence
date: 2017-04-17 07:00:00
---

&nbsp;

Lorsque l’on parle d’ingénierie des exigences et plus spécifiquement des outils de gestion des exigences on ne penserait pas, à priori, à employer un outil PPM.

&nbsp;
> _« Requirements management can be simplified if initial requirements definitions are captured in a database-based tool to enable collaborative review... traceability and versioning/change control. »_
> 
> 
> _— Matt Light, Research Director, Gartner_
&nbsp;

La plus part du temps les exigences sont gérées dans un document Word ou Excel. Il existe toutefois des outils spécialisés tels que Doors, Caliber ou encore Polarion (et bien d’autres…) qui se proposent d’adresser tous ou tout du moins un certain nombre des grands principes de la gestion des exigences.

Si vous connaissez Planisware, vous n’êtes pas sans savoir que l’outil dispose en standard de fonctionnalités permettant de traiter des exigences. Je vous propose au travers de cet article de détailler les grands principes de l’ingénierie des exigences, les qualités dont devrait disposer un outil de gestion des exigences selon l’[International Requirements Engineering Board (IREB)](http://www.ireb.org) puis de regarder en quoi Planisware peut (ou ne peut pas) adresser cette problématique.

<!--more-->

## Mais tout d’abord, c’est quoi une exigence ?

La définition que l’ensemble des acteurs de normalisation et standardisation tend à reprendre est la suivante :
> <span style="color: #bc006e;">**(A) **Une condition ou capacité requise par un utilisateur pour résoudre un problème ou réaliser un objectif.</span>
> 
> 
> <span style="color: #bc006e;">**(B) **Une condition ou capacité qui doit être remplie ou possédée par un système ou un de ses composants pour satisfaire à un contrat, une norme, une spécification ou tout document imposé de façon formelle.</span>
> 
> 
> <span style="color: #bc006e;">**(C) **Une représentation documentée d'une condition ou d'une capacité, telle que celle définie en (A) ou en (B).</span>

_Norme IEEE 610.12-1990_

## Les grandes activités de l’ingénierie des exigences

Selon L’IREB, l’ingénierie des exigences s’appuie sur quatre activités principales qui sont l’élucidation, la documentation, la validation/négociation des exigences, et la gestion des exigences.

{% img "" "/images/blog/ie_activities-1024x409.png" 650 300 "Les grandes activités de l’ingénierie des exigences : Elucidation, Documentation, Validation et Gestion des exigences" %}

### L’élucidation des exigences

L’élucidation des exigences regroupe un ensemble de technique permettant de rechercher, de découvrir, de collecter et d’appréhender les exigences d’un système.

### La documentation des exigences

Aussi nommé « spécifier les exigences », cette activité consiste à formaliser le résultat de l’élucidation des exigences au travers du langage naturel et des modèles conceptuels d’exigences (modèles de buts, modèles de cas d’utilisation, diagramme de classes, diagrammes d’activité, diagramme d’état).

### La validation et la négociation

La validation et la négociation des exigences visent à obtenir un consensus des différentes parties prenantes sur la base d’une compréhension communes des exigences du système à développer.

### La gestion des exigences

La gestion des exigences est l’activité de support des trois précédentes. C’est un processus continue qui est mis en œuvre depuis la création des exigences jusqu’à leur implémentation et leur fin de vie (phase maintenance) afin rendre l’ensemble des exigences cohérent vis-à-vis du Changement.

On retrouve au sein de cette activité entres autres l’accès au référentiel des exigences, la traçabilité entre les exigences, les révisions (versionning), etc…

Le référentiel CMMi positionne la gestion des exigences au niveau 2 du modèle de maturité et regroupe les activités d’élucidation, de documentation et de validation/négociation au sein du processus Requirement Develoment au niveau 3.

## Planisware et les exigences

![](/images/blog/Planisware-et-les-exigences-1024x279.png)

Planisware est une solution de gestion de projets (EPM) et de portefeuille de projets (PPM).

Ce logiciel d’entreprise peut être implémenté au sein de grandes organisations de part sa capacité à manipuler un nombre très important de projets et d’utilisateurs (plusieurs dizaines de milliers d'utilisateurs).

Les différents modules de l’application permettent de gérer au sein de Planisware une vision à court et long terme des différentes activités de l'entreprise :

*   [La vision portefeuille](http://fr.planisware.com/gestion-de-portefeuille-projets) permet ainsi de suivre de manière macroscopique les projets de l’entreprise, les éventuels problèmes d'adhérence et de prévoir et d’adapter la capacité à faire de chaque département.
*   [La vision opérationnelle](http://fr.planisware.com/gestion-de-projets%20alt=) proposée par Planisware permet d’accompagner les acteurs au quotidien tant sur les aspects projets (coûts, planning, ressources, workflow, etc...) que dans la gestion de l’entreprise (produit, facturation, collaborateurs, etc...).
&nbsp;

Le module “Product Management” permet de gérer le référentiel des exigences de chaque produit.

### Tour d’horizon des fonctionnalités de base

#### _Créer une exigence_

Pour crée une exigence, il suffit de se rendre dans la vue « Exigences » du module « Produits » et de cliquer sur « Insérer / Exigence ».

![Créer une exigence avec Planisware](/images/blog/PLW01-Create-requirement-4.gif)
Les exigences peuvent également être créées en mode tableau ou via un simple copier/coller depuis Excel.

#### _Transformer une idée en exigence_

Le module « **<span style="color: #74941f;">Idea campaign</span> **» a pour vocation de collecter les idées au sein d’une organisation. Chaque membre de l’organisation qu’il soit employé, manager ou directeur peut soumettre ses idées.

Planisware permet de créer les exigences directement à partir d’une idée soumise et adoptée.

#### _Importer des exigences_

Si vous disposer déjà d'une documentation produit ou projet, Planisware permet de l'importer facilement. Dans le cas où vos exigences sont spécifiées dans un document Excel, un simple copier/coller dans la vue tableau suffira pour les importer. Quant aux exigences rédigées dans un format Word, Planisware propose un assistant d'import permettant de facilité la transition.
{% img "" "/images/blog/plw-import-word-reqs.gif" 600 500 "Import d'exigence contenue dans un document Word" %}



#### _Emettre des commentaires_

L’aspect collaboratif dans un outil de gestion des exigences est très important. Cela permet d’accroitre l’implication des différentes parties prenantes du projet (métier, testeur, développeur…) au plus tôt.

Par ailleurs, le processus de revue des exigences aboutissant à leur validation est accompagné de remarques au fil de la lecture des exigences.

Cela se traduit dans Planisware par des commentaires au niveau de chaque exigence.

![Ajouter un commentaire à une exigence dans Planisware](/images/blog/PLW01-Add-comment.gif)

#### _Visualiser l’historique d’une exigence_

Avec le paramétrage standard de Planisware, seules les modifications suivantes sont tracées :

*   Création/suppression de liens entre les exigences
*   Association/dé-association d’une exigence à une release
L’historique des modifications d’une exigence est accessible depuis l’exigence via le style « Change tracking »

![Visualiser les changements d'une exigences dans Planisware](/images/blog/PLW01-Track-changes.png)

Au travers d’une modification de paramétrage simple de l’administrateur, il sera possible d’historiser l’ensemble des modifications d’une exigence (Traces).

#### _Figer une baseline d’exigence_

Une baseline représente une configuration de référence. C’est en d’autres termes une photo des exigences faites à un jalon clé du projet afin de pouvoir comparer ou d’acter un périmètre d’exigence.

Les baselines se traduisent dans Planisware par les versions.

#### _Comparer une Baseline_

![Comparer une Baseline d'exigences dans Planisware](/images/blog/PLW01-Compare-baseline-1024x125.png)

Planisware offre la possibilité de définir des règles personnalisées pour comparer des versions (baselines) différentes.

Par exemple, on peut définir des règles qui vont se concentrer uniquement sur les différences de description d’une exigence ou encore sur les différences de traçabilité entre les exigences.

## Fonctionnalités des outils de gestion des exigences
Selon l’IREB, les outils de gestion des exigences doivent être dotés des fonctionnalités suivantes :

*   gérer différentes sortes d’informations ;
*   établir et maintenir des relations logiques entre les informations ;
*   identifier les artefacts de façon unique ;
*   permettre un accès flexible et sécurisé aux informations, grâce notamment au contrôle des droits d’accès ;
*   permettre la visualisation des informations selon différentes vues ;
*   organiser les informations (par exemple de façon hiérarchique ou par attributs) ;
*   générer des rapports ;
*   générer des documents.
&nbsp;

### Gérer différentes sorte d’informations avec Planisware

Planisware permet de définir plusieurs types d’exigences. Ces catégories sont définies et paramétrées par l’Administrateur.

Dans l’exemple ci-dessous, l’administrateur a défini les types d’exigences :

*   Technical requirements,
*   Business requirements,
*   Marketing requirements,
*   Functionnal requirements,
*   Support requirements
*   et interaction requirements.

{% img "" "/images/blog/PLW02-Requirement-types.png" 600 450 "Assigner un type d'exigence" %}

### Etablir et maintenir des relations logiques entre les informations

Outre la hiérarchisation des exigences qui permet d’obtenir une structure logique de lecture et de compréhension, Planisware permet de matérialiser une traçabilité entre les exigences.

La traçabilité permet de définir une relation entre deux exigences. Par exemple, un lien de traçabilité entre une exigence Business et une exigence Fonctionnelle va permettre de matérialiser la réponse de l’exigence fonctionnelle par rapport à l’exigence Business exprimée.

La traçabilité est représentée par les liens Upstream and downstream dans Planisware.

&nbsp;

Le fait de matérialiser les liens de traçabilités permet notamment de :

*   Faire des analyses de couverture et notamment de s’assurer que l’ensemble des exigences sont couvertes. _Est-ce que l’ensemble des exigences Business d’une release sont bien couvertes par d’autres exigences ? Est-ce que l’ensemble de mes exigences fonctionnelles réponde bien à une exigence ?_
*   Faire des analyses d’impacts. Que se passe-t-il si l’exigence Business REQ-000012 est changée ? Quels sont les impacts sur les exigences fonctionnelles et techniques ?
![Diagramme de traçabilité entre les exigences dans Planisware](/images/blog/PLW02-Traceability-diagram.png)

### Identifier les artefacts de façon unique

Chaque exigence est définie avec un nom unique que le système incrémente automatiquement. Cet aspect est configurable par l’administrateur Planisware.

### Permettre un accès flexible et sécurisé aux informations

Les exigences étant contenues dans un projet “Produit”, le contrôle des accès offre les mêmes possibilités que sur les projets classiques Planisware.

![Droits d'accès dans Planisware](/images/blog/PLW02-Access-rights.png)

Il est ainsi possible de limiter la visibilité du référentiel d’exigences d’un produit à des groupes d’utilisateurs ou des utilisateurs et de n’autoriser qu’une certaine catégorie de personne à modifier le référentiel.

Pour des permissions plus fines il est possible d’associer ces droits d’accès en lecture/écriture avec des alertes, verrous, et règles de données disponibles en paramétrage niveau 1.

### Permettre la visualisation des informations selon différentes vues

Là encore Planisware exploite pleinement ses fonctionnalités standards en permettant à l’utilisateur de naviguer aisément entre une vue tableau sur les exigences et une vue document.

L’ensemble des vues sont paramétrables, grâce aux styles. Il est donc possible d’ajouter/retirer des colonnes, de les filtrer en affichant par exemple seulement les exigences de la « release 1 », de les trier, de les regrouper, etc…

Les utilisateurs peuvent construire leurs propres vues et les partager.

### Organiser les informations

Les exigences Planisware peuvent être organisées hiérarchiquement afin d’obtenir une structure de parcours logique.

Au travers du paramétrage niveau 1, il devient possible d’ajouter très facilement de nouveau attributs aux exigences et de gérer des règles comportementales au travers des alertes et règles de données.

### Générer des rapports

La génération dans Planisware passe par l’excellent Planisware Explorer. Cette solution de construction de rapport interne à Planisware permet de construire des vues synthétiques en croisant informations contenues dans l’application.

### Générer des documents

Planisware propose nativement un ensemble d’outils permettant d’export n’importe quelle vue sous différents formats.

#### _Documents Excel / PDF / Power Point_

{% img "" "/images/blog/PLW02-Exports-1024x849.png" 600 450 "Exporter des informations de Planisware" %}

#### _Documents Word_

L’export des exigences au travers de document Word n’est pas pris en charge nativement par Planisware.

&nbsp;

## Conclusions

Planisware n'a pas à rougir de ces fonctionnalités de gestion des exigences et peut être employé en remplacement des traditionnels documents Word et Excel.

&nbsp;
Pour autant, il manque encore quelques fonctionnalités standards pour être sur le même pied d'égalité que les (véritables) outils de gestion des exigences. En effet, la liaison avec des outils tiers et notamment les outils de tests n'est pas aisée et devra obligatoirement passée par un export type Excel pour être ré-importée directement dans un outil tel que HP ALM (Quality Center), MicroFocus Silk ou TestLink (Open source).
Par ailleurs, le manque d'export Word devrait pénaliser une grande partie des utilisateurs. Comment communiquer avec un fournisseur et lui générer une documentation convenable ?
Quelques autres points devraient être améliorés pour versionner en standard l'ensemble des modifications (et notament le descriptif de l'exigence) et lors de nos tests, le Spreadsheet Comparison introduit en v6.1 n'a pas su gérer convenablement la comparaison des exigences via les versions de projet.

&nbsp;
Dans la pratique je recommanderai uniquement Planisware en tant qu'outil de gestion des exigences pour les organisations disposant déjà de l'outil et n'étant pas encore outillées dans ce domaine. Les fonctionnalités offertes permettent de bénéficier de gains immédiats par rapport à la documentation traditionnelle via Word ou Excel.