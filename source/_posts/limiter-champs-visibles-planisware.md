title: 3 astuces pour limiter les champs visibles dans Planisware
description: Dans cet article, je vous propose quelques astuces pour limiter cette liste et ainsi faciliter la prise en main de Planisware.
keywords: champ, visible, planisware, intranet
og_type: article
main_tag: Planisware tutorial
tags:
  - Astuce
  - Paramétrage
  - Reporting
  - script
  - Planisware tutorial
id: 459
comment: false
categories:
  - Planisware
date: 2013-06-12 12:39:33
---

[Planisware](//fr/about/planisware.html "En savoir plus sur Planisware") propose un mécanisme permettant aux utilisateurs de choisir les différentes informations qu’ils souhaitent voir s’afficher dans les vues tableaux. Cette modification du **style** d’affichage est très pratique. Il suffit de faire un clic droit sur l’entête d’une des colonnes du tableau pour pouvoir sélectionner le champ à ajouter dans la vue.

![Planisware - Selection d](//blog/wp-content/uploads/2013/06/select_attribut_form-300x204.jpg "Planisware - Selection d")

D’un point de vue utilisateur, le principal problème de cette fonctionnalité est le nombre très important de champs visibles lors de la sélection. Dans cet article, je vous propose quelques astuces pour limiter cette liste et ainsi faciliter la prise en main de Planisware.
<!-- more -->
###  Not visible in OPX2 Intranet Server

Les champs techniques sont des champs créés et utilisés uniquement pour mettre en œuvre un paramétrage particulier. Par exemple, afin de faciliter la réutilisabilité de certains critères de filtre, il peut être utile de créer une formule nommée qui validera l’affichage ou non d’une information. Ce champ pourra alors être réutilisé simplement et rapidement sur plusieurs styles. Pour autant, cette information n’a pas forcément de sens métier ou d’importance pour l’utilisateur. Il peut donc être utile de la masquer.

La colonne « Not visible in OPX2 Intranet Server » (HIDDEN_IN_INTRANET_SERVER)  peut être ajouté par l’intégrateur Planisware sur la table « environnement » ou sur la table de la classe de l’objet (formules nommées, attributs additionnels, etc.…). En cochant ce champ, l’attribut concerné ne pourra plus être sélectionné par l’utilisateur depuis l’Intranet Server. Si ce champ est utilisé dans un filtre ou un rapport, celui-ci fonctionnera normalement.

![Planisware - Not visible in Opx2 IS](//blog/wp-content/uploads/2013/06/not_visible_in_opx2_is.jpg "Planisware - Not visible in Opx2 IS")

### Cacher en Opx2 Script

Depuis les dernières versions de Planisware, les attributs dynamiques sont automatiquement cachés sur Intranet Server. Pour faire apparaitre ou cacher ces objets, il est nécessaire de modifier la valeur de l’attribut booléen « hiddenInIntranetServer » en Opx2 script.
<pre lang="JAVASCRIPT">var slot = new objectAttribute(OpxActualHours, "TY_DA_S_FINCODE_CODE", "STRING");
slot.comment = "Financial Code";
slot.reader = get_ActualHours_FinancialCode;
slot.modifier = set_ActualHours_FinancialCode;
slot.initializer = set_ActualHours_FinancialCode;
slot.hiddenInIntranetServer = false; //true pour cacher ce champ dynamique depuis IS</pre>
Cette méthode peut être tout aussi bien utilisée avec d’autres types d’objets que des attributs dynamiques :
<pre lang="JAVASCRIPT">var slot = OpxActualHours.getSlot("VF_AA_S_UNIQUE_ID");
slot.hiddenInIntranetServer = true; //true pour cacher ce champ dynamique depuis IS</pre>

### Cacher tout sauf...

Planisware offre une autre possibilité pour restreindre la liste des attributs sélectionnables. Depuis un élément graphique « Tableau » en mode rapport, l’intégrateur peut décocher les options « Allow input on unspecified report columns » et « Allow display of unspecified report columns in reports and styles ». En faisant ainsi, seuls les attributs définis dans les rapports renseignés sur le champ « Reports defining input options and hyperlinks » pourront être affichés.

![Planisware - Autoriser certains attributs dans un tableau](//blog/wp-content/uploads/2013/06/table_form_allow_unspecified_attributes.jpg "Planisware - Autoriser certains attributs dans un tableau")

Noter que ce fonctionnement ne concernera pas les utilisateurs Administrateurs qui continueront d’avoir une visibilité sur l’ensemble des attributs.