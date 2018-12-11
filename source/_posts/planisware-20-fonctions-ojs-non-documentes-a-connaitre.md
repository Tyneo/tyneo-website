title: 'Planisware : 10 fonctions OJS non documentés à connaitre'
description: Je vous propose dans cet article une sélection de 20 fonctions non documentés à utiliser et à réutiliser lors de vos développements Planisware.
keywords: fonction, ojs, planisware
og_type: article
main_tag: Planisware tutorial
tags:
  - Astuce
  - script
id: 421
comment: false
categories:
  - Planisware
date: 2013-04-29 15:57:14
---

![javascript](//blog/wp-content/uploads/2012/10/javascript-150x150.jpg)
La documentation des fonctions [OJS](http://blog.tyneo.net/tag/script/ "Tous les articles à propos des Scripts") incluse et accessible depuis le menu "Aide" du client [Planisware Pro](http://fr.planisware.com/la-solution-planisware-vue-densemble "Vue d"), permet de se familiariser avec un grand nombre de fonctions introduites par le noyau Planisware. Pour autant, ces fonctions ne sont pas les seules puisque les équipes de développement de Planisware développent directement au sein de bibliothèques de scripts OJS d'autres fonctions permettant d'accélérer certaines tâches répétitives et donc de gagner du temps.

Je vous propose dans cet article une sélection de 20 fonctions non documentés à utiliser et à réutiliser lors de vos développements Planisware.
<!-- more -->
{% raw %}
<div class="table-responsive">
	<table class="table table-bordered table-striped">
	
<thead>
<tr><th>Nom</th><th>Type</th><th>Description</th><th>Dépendance</th></tr>

<tr><td>Rename_Column( class,text_key,slot)</td><td>void</td><td>Renomme un attribut d'une classe</td><td>OPX2_IT_LIBRARY</td></tr>
<tr><td>sprintf(sFormat)</td><td>string</td><td>Format une chaîne de caracteres selon les arguments</td><td>COMMON_@_LIBRARY</td></tr>
<tr><td>GetElement(Index)</td><td>object</td><td>Retourne un element d'un tableau ou vector selon son Index (identique a table[Index];)</td><td>COMMON_@_LIBRARY</td></tr>
<tr><td>IsIntranetMode()</td><td>boolean</td><td>Retourne vrai si le script est executé depuis l'Intranet Server</td><td>COMMON_@_LIBRARY</td></tr>
<tr><td>Get_Temp_Directory()</td><td>string</td><td>Retourne le repertoire temporaire defini par le systeme (ex: c:\temp)</td><td>COMMON_@_LIBRARY</td></tr>
<tr><td>IsInList(search)</td><td>boolean</td><td>Parcourt une liste et recherche l'élément search Exemple: vector.isInList(getCurrentUser())</td><td>COMMON_@_LIBRARY</td></tr>
<tr><td>RoundNumberWithPrecision( Value, Precision)</td><td>number</td><td>Arrondi la valeur en fonction de la précision demandée Exemple: RoundNumberWithPrecision(2.4332, 2)</td><td>COMMON_@_LIBRARY</td></tr>
<tr><td>SynchronizeAllScript()</td><td>void</td><td>Synchronize tous les scripts avec le champ fichier renseigné</td><td>COMMON_@_LIBRARY</td></tr>
<tr><td>sort(order, field)</td><td>vector</td><td>Permet de trier un vecteur</td><td>COMMON_@_LIBRARY</td></tr>
<tr><td>OpenReadOnly()</td><td>void</td><td>Cette fonction verifie que le fichier existe avant de l'ouvrir</td><td>COMMON_@_LIBRARY</td></tr>
</table>
</div>
{% endraw %}