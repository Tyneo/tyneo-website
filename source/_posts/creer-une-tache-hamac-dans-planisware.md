title: Créer une tâche Hamac dans Planisware
description: Tutorial pour matérialiser un aléa au travers d'une tâche hamac dans un planning gantt Planisware
keywords: hamac, planisware
tags:
  - Astuce
  - Documentation
  - Planisware tutorial
description: >-
  Tutorial pour matérialiser un aléa au travers d'une tâche hamac dans un
  planning gantt Planisware
og_type: article
og_image: images/blog/planisware.png
id: 901
comment: false
main_tag: Planisware tutorial
categories:
  - Planisware
  - UnMoisUneAstucePlanisware
  - Astuce
date: 2019-04-01 07:00:00
---


Une tâche dites "hamac" est une tâche particulière dont la durée dépend de la planification des activités précédentes et suivantes. L'équipe Tyneo vous propose dans ce nouvel article de vous présenter la manière de créer ces tâches hamacs dans Planisware.

Ce type de tâche peut, par exemple, être utilisée pour matérialiser une marge libre entre deux activités (lien DEBUT-FIN) ou encore permettre la création d'une activité parallèle (lien FIN-FIN).
<!-- more --> 
### Procédure pour créer une tâche hamac :

Cette procédure prend en considération le planning suivant : une tâche Dev-Développement et une tâche RE7-Recette. La procédure suivant va vous conduire à créer une tâche hamac afin de représenter un aléa planning entre la fin du développement et le début de la recette.

![Planning initial - procédure de création d](http://www.tyneo-consulting.fr/images/blog/create-hamac-task.gif)

1.  Créer les tâches Dev-Développement et RE7-Recette
1.  Créer la tâche qui représentera l'aléa Aléa-Aléa planning - tâche hamac
2.  Dans les propriétés avancées de la tâche Aléa, modifier la valeur du champ étirement en "Hamac"
3.  Créer un lien entre les activités Aléa et Dev ainsi qu'un autre lien entre les activités RE7 et Aléa
4.  Modifier le type de ces deux liens en "DEBUT-FIN"

Maintenant, lorsque l'on modifie la durée de la tâche Dev, notre tâche hamac est automatiquement impactée et se raccourcie.

&nbsp;
> Régulièrement, l'équipe Tyneo publie une astuce utilisateur Planisware. Retrouvez [l'ensemble des astuces déjà publiée ](https://www.tyneo.net/blog/categories/astuce/)sur notre blog.
