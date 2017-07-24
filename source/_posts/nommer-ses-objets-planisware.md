title: Nommer ses objets Planisware
description: Règles de nommage des objets dans Planisware
keywords: Best Practices, objet, nom, planisware
og_type: article
main_tag: Documentation
tags:
  - Documentation
  - Paramétrage
  - Reporting
id: 275
comment: false
categories:
  - Planisware
date: 2013-02-26 19:15:22
---

### Préambule

[Planisware](http://www.planisware.com "Site Internet de Planisware") propose dans son livre Blanc “Best Practices” un ensemble de règles de nommage pour les objets créés par les [intégrateurs Planisware](http://www.tyneo-consulting.fr/fr/projects.html "Découvrez nos services Intrégrateur des solutions Planisware"). Les bonnes pratiques proposées par Planisware garantissent une certaine cohérence dans le travaille des différents consultants et permet d’homogénéiser nos pratiques. Ainsi, pour nos clients, il est bien plus facile de leur garantir une certaine pérennité et une maintenabilité de nos livrables.

Ne nous cachons pas la réalité, nos clients aiment changer leurs intégrateurs, les mettre en concurrence et donc avoir une certaines indépendances vis-à-vis de notre travail.

De ce fait, et pour que nos différentes interventions soient satisfaisantes de ce point de vue, il est indispensable de suivre une ligne directrice commune, et de disposer de règles de travaille communes. Qui de mieux que l’éditeur du produit pour instaurer ces pratiques ?

Dans cet article nous ne nous attacherons pas a retranscrire l’intégralité du livre blanc “Best Practices” de Planisware, et nous essayerons de nous focaliser seulement sur les règles de nommage.
<!-- more -->
![Nom](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2013/02/design-fetish-nom-nom-nom-pillow1-300x229.jpg)

### Des règles connues de tous

Il est vivement conseillé de formaliser l’adaptation de ces règles de nommage dans un document technique mis à jour et connu de tous les intervenants sur le projet. Il est en effet pratiquement acquis que l’on essaye de différencier le paramétrage standard de Planisware du paramétrage de notre client en préfixant par quelques lettres le nom des objets. Par exemple, si votre client se nomme « Fonderie La Pierre », on peut préfixer l’ensemble des objets créés par le trigramme « FLP ».

### Règles de nommage

La règle de nommage généraliste fait commencer le nom des objets ainsi : {% raw %}[NOM_MODULE]_[TYPE]_{% endraw %}

#### Noms courts des modules Planisware

L'application Planisware étant découpées en module, vous trouverez dans la liste ci-dessous l'ensemble des noms courts de chaque module.

*   IF: Infra
*   IT: Infra IT
*   IP: Infra Pharma
*   IS: Issue
*   AD: Admin
*   PM: Project Management
*   RM: Resource Management
*   PE: Parametric Estimation
*   SI: Simulation
*   PW: Project Wizard
*   CO: Collaboration
*   WT: Wbs type
*   ML: Multi-level
*   PO: Portfolio

#### Noms courts des objets Planisware

*   AA: Additional Attribute
*   AL: Alert
*   AT: Attribute Type
*   BS: Breakdown Structure
*   CC: Composite Curve
*   CF: Cost Field
*   DA: Dynamic Attribute
*   ET: Expenditure Type
*   LO: Lock
*   MS: Macro Sequence
*   MC: Manager for Charts
*   MD: Multiple Operation
*   NF: Named Formula
*   JS: Opx2 JavaScript macro
*   PS: Parameter Set
*   RA: Relation Attribute
*   SV: Simulation Variable
*   ST: STyle
*   SF: Symbolic Field
*   TA: Table Aggregation
*   UM: Update Macro

### Spécificité pour les rapports

Pour nommer les rapports, Planisware recommande d'utiliser la syntaxe suivante '{% raw %}[MODULE]_[REPORT_TYPE]_[CLASS]_[ACTION]{% endraw %}'.
Le MODULE étant le nom du module utilisant le rapport,
Le REPORT_TYPE représente le type de rapport Standard (std), popup (POP) ou header (HDR),
La CLASS doit correspondre au type de l'objet manipulé (PROJECT, ACTIVITY, CONTEXT...),
L'ACTION est le type d'action géré par le formulaire (CREATION, MODIFICATION, DETAILS...)

Pour illustrer cela, nous pourrions nommer un nouveau rapport pour la création de tâche  'FLP_PM_POP_TASK_CREATION'.

### Spécificité pour les attributs

Concernant les attributs tels que les formules nommées, attributs additionnels ou attributs dynamiques, il préconisé d'inclure dans le nom de l'objet le type de propriété qui est retournée. Planisware recommande pour ces types d'attributs de ne pas préciser le module concerné. La structure du nom de l'objet sera alors {% raw %}[TYPE_OBJET]_[TYPE_RETOURNE]_{% endraw %}

*   B: Boolean
*   D: Date
*   N: Number
*   S: String
*   T: Text
*   U: Duration
*   X: Attribute Type
Ainsi, si nous devions créer un nouvel attribut pour catégoriser nos types de projets informatique, nous pourrions le nommer  'FLP_NF_S_PRJ_CATEGORY'.