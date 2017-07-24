title: Les liens relâchés dans Planisware
description: Les liens relâchés permettent de matérialiser la dépendance entre deux activités tout en maitrisant les décalages planning induits.
keywords: lien, relaché, synchroniser, planisware
og_type: article
main_tag: Planisware tutorial
tags:
  - Astuce
  - Documentation
  - Planisware tutorial
id: 733
comment: false
categories:
  - Planisware
  - UnMoisUneAstucePlanisware
date: 2015-11-04 09:15:57
---

Habituellement la création d'un lien par exemple de type FIN-DEBUT entre deux activités (sous-projet, tâche ou jalon) induit le décalage de l'activité liée si l'activité précédente se prolonge ou démarre plus tard que prévu.

Les liens relâchés permettent de matérialiser la dépendance entre deux activités tout en maitrisant les décalages planning induits. Au lieu d'être automatique, le décalage devient la responsabilité du chef de projet. Cette opération, dans Planisware, s'appelle la Synchronisation des liens.
<!-- more -->
![Planisware - Lien FIN-DEBUT](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2015/09/Planisware-Lien-FIN-DEBUT.gif)

### Exemple d'un lien relâché

![Planisware - Lien relaché](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2015/09/Planisware-Lien-relaché.gif)

Les liens non synchronisés apparaissent comme dans l'exemple ci-dessus en rouge.

Techniquement, à chaque synchronisation d'un lien relâché, Planisware va positionner une contrainte de début sur l'activité liée pour matérialiser la dépendance.

![Planisware - Date de début d](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2015/09/Planisware-Date-de-début-dune-activité.png)

Planisware recommande dans le cadre de l'utilisation de lien inter-projets d'utiliser des liens relâchés. Ceci permet par ailleurs d'éviter les boucles infinies et réduit le risque de nuire au performance de l'application Planisware.

> Chaque mois, l'équipe Tyneo publie une astuce utilisateur Planisware. Retrouvez [l'ensemble des astuces déjà publiée ](https://tyneo.net/blog/categories/Astuce/)sur notre blog.