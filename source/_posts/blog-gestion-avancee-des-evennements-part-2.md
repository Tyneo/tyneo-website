title: Gestion avancée des évènements part 2
description: Retour d'expérience sur l'utilisattion des wrapper Planisware en script
keywords: wrapper, script, ojs, planisware
og_type: article
id: 139
comment: false
main_tag: Planisware tutorial
categories:
  - En vrac
  - script
  - Planisware tutorial
date: 2012-12-05 09:23:05
tags:
---

Dans mon précédent article sur la gestion des évènements avancées dans Planisware, je vous présentais il y a quelques jours la fonction AddWrapperFunction()

Et justement, j'ai eu besoin de l'utiliser à nouveau il y a quelques jours et je souhaitais donc vous faire profiter de cette nouvelle expérience. Pour un de mes clients, je devais ajouter un traitement lors de la création d'une référence afin qu'elle soit définie en temps que référence budgétaire (LAB) selon certaine condition.
<!-- more -->
Ma première piste était naturellement de réaliser une alerte sur la création de nouvelle référence pour effectuer mon traitement supplémentaire. Seulement voilà, dans le paramétrage standard de Planisware, la création d'une référence est entourée par un block withoutAlert, ce qui rend impossible le déclenchement de mon alerte.

La solution : Utiliser un code JavaScript pour réaliser notre fameuse "alerte" qui outrepassera le block withoutAlert.
Pour ce faire, et pour éviter de changer l'écran standard de Planisware, nous pouvons ajouter un trigger sur la création d'un objet de la classe OpxReference :
<pre lang="JAVASCRIPT">On New OpxReference () {
  alert("hello 1");
}</pre>

Cette solution correspond tout à fait à notre problème, mais induit quelques problèmes qui peuvent nous échapper aujourd'hui et qui peuvent apporter des régressions par la suite. En effet, si nous souhaitons ajouter un deuxième traitement supplémentaire et que nous créons à nouveau une référence, nous observerons que ce nouveau traitement a remplacé le précédent et qu'il ne s'exécute plus :
<pre lang="JAVASCRIPT">On New OpxReference () {
  alert("hello 1");
}
On New OpxReference () {
  alert("hello 2");
}</pre>

Ce code OJS affiche seulement : hello 2

Pour contourner ce fonctionnement nous allons utiliser le mécanisme mise en place par Planisware avec la fonction <pre lang="JAVASCRIPT">AddWrapperFunction() :
On New OpxReference () {
  CallWrapperFunction("NewOpxReferenceWrapper", this);
}
function hello1() {
  alert("hello 1");
}
function hello2() {
  alert("hello 2");
}
AddWrapperFunction("NewOpxReferenceWrapper","hello1");
AddWrapperFunction("NewOpxReferenceWrapper","hello2");</pre>

Ainsi nos deux traitements seront bien exécutés l'un après l'autre.