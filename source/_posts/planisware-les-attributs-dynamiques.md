title: 'Planisware : Les attributs dynamiques'
description: Créer des attributs dynamiques Planisware en script
keywords: attribut dynamique, script, ojs planisware
og_type: article
main_tag: Planisware tutorial
tags:
  - script
  - Planisware tutorial
id: 52
comment: false
categories:
  - Gestion de projets
  - Planisware
date: 2012-10-24 17:53:31
---

[![](//blog/wp-content/uploads/2012/10/javascript-150x150.jpg "javascript")](//blog/wp-content/uploads/2012/10/javascript.jpg)
Les attributs dynamiques sont des champs supplémentaires « évoluées ». 
N'ayant pas de définition exacte de la part de Planisware, il faudra simplement retenir qu'un champ dynamique ou DA (dynamic attribute) est un attribut supplémentaire dont la valeur n'est pas sauvegardé en base et est créé depuis un script OJS dans lequel on a remplace son accesseur et mutateur. 
En d'autres termes, la valeur retournée par ce champ dépendra d'un script OJS, et la valeur saisie dans ce champ sera traité là aussi par un script.
<!-- more -->
En OJS, il suffit d'instancier un nouvel objet de la classe objectAttribute :
<pre lang="JAVASCRIPT">var attr = new objectAttribute([TYPE], [NAME], [CLASS]);
attr.comment = [LIBELLE];</pre>

{% raw %}
<div class="table-responsive">
	<table class="table table-bordered table-striped">
<tbody>
<tr>
<td>[TYPE]</td>
<td>correspond au type de l'attribut. Ce peut être un type primitif comme NUMBER, BOOLEAN, STRING et DATE ou un type étendu tel que OpxProject, OpxResponsability ou d'autre class que vous auriez créé.</td>
</tr><tr><td>[NAME]</td>
<td>représente le code Planisware de ce nouvel attribut. Comme bonne pratique, ajoutez le préfix "DA" pour signifier qu'il s'agit d'un attribut dynamique. Exemple : MY_PM_DA_XXXX.</td>
</tr><tr><td>[CLASS]</td>
<td>définie la classe dans laquelle vous souhaitez ajouter l'attribut.</td>
</tr><tr><td>[LIBELLE]</td>
<td>correspond au libelle/nom de votre attribut visible par les utilisateurs. La valeur peut correspondre à une clé texte pour permettre l'internationalisation de votre application Planisware:</td>
</tr>
</tbody>
</table>
</div>
{% endraw %}
Exemple :
<pre lang="JAVASCRIPT">var attr = new objectAttribute("String", "MY_PM_DA_CALC_PROJECT_NAME", "OpxProject");
attr.comment = "Nom du projet calculé";</pre>

En exécutant les lignes ci-dessus, un nouvel attribut de type "String" sera crée sur la classe "Projet". Son libellé (définie sur la deuxième ligne du script) sera "Nom du projet calculé".

Vous devez définir ensuite deux fonctions qui seront exécutées pour lire et pour modifier la valeur de votre attribut.
<pre lang="JAVASCRIPT">/**
 * Cette fonction est utilisée pour obtenir la valeur de l'attribut dynamique MY_PM_DA_CALC_PROJECT_NAME
 */
function get_CALC_PROJECT_NAME() {
    return this.CODE + "@" + this.MY_PM_AA_PROJECT_SUFFIX;
};
attr.reader = get_CALC_PROJECT_NAME; // Ici on remplace la méthode définie par défaut pour lire la valeur de l'attribut
/**
 * Cette fonction est utilisée pour modifier la valeur de l'attribut dynamique MY_PM_DA_CALC_PROJECT_NAME
 */
function set_CALC_PROJECT_NAME(input){

};
attr.modifier = set_CALC_PROJECT_NAME; // Ici on remplace la méthode définie par défaut pour modifier la valeur de l'attribut</pre>

Les quelques lignes ci-dessus vous permettent de redéfinir l'accesseur (méthode reader) et le mutateur (méthode modifier) de l'attribut. Cet attribut peut être ajouté dans un tableau ou sur un formulaire pour être manipulé par les utilisateurs.

Pour aller plus loin, il est possible de définir des arguments aux méthodes reader/modifier. Cela peut avoir son utilité si vous employer des méthodes génériques :
Soit les méthodes suivantes avec l’argument supplémentaire « type » :
<pre lang="JAVASCRIPT">function get_CALC_PROJECT_NAME(type){
	...
}
function set_CALC_PROJECT_NAME(input, type){
	...  
};</pre>
Lors de l'affectation aux reader/modifier, vous devez employer la méthode « closure » afin de définir la valeur des attributs supplémentaires :
<pre lang="JAVASCRIPT">attr.reader = get_CALC_PROJECT_NAME.closure("Mon argument");
attr.modifier = set_CALC_PROJECT_NAME.closure("Mon argument");</pre>
Ainsi la valeur de l’attribut « type » sera « Mon argument ».

Dans un prochain article de la catégorie OJS, nous évoquerons les principes d'introspection offerts par Planisware...
Et comme à partir de demain débute la conférence utilisateurs Planiware, je vous souhaite à tous bonne conférence et au plaisir de vous y rencontrer.