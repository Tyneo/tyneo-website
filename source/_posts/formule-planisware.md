title: Maîtriser les formules Planisware
description: Maîtriser le puissant concept de “Formule” introduit au cœur du paramétrage de l’application Planisware
keywords: formule, planisware
og_type: article
main_tag: Planisware tutorial
tags:
  - Planisware tutorial
  - Documentation
  - Paramétrage
  - script
id: 343
comment: false
categories:
  - Gestion de projets
  - Planisware
date: 2014-08-11 10:26:52
---

Le puissant concept de "Formule" introduit par Planisware est au cœur du paramétrage de l’application. Ce concept est en effet utilisé dans la majorité des fonctionnalités de la solution logicielle  d’entreprise pour la gestion de portefeuille projets et produits de Planisware.

On retrouve ainsi l’utilisation des formules dans :

*   Les tables pour réaliser des filtres,
*   Les formules nommées pour enregistrer une formule,
*   Les paramètres de l’application pour utiliser une valeur calculée et dynamique,
*   Les rapports pour réaliser des filtres ou afficher des données,
*   Les actions multiples, les tables et champs coûts, etc…
<!-- more -->

_![Formule](/blog/wp-content/uploads/2014/08/formules-186x300.png)
Ce système est donc un concept indispensable à maîtriser lorsque l’on réalise des tâches de paramétrage de l’application ou d’administration avancées._

Dans cet article, nous vous proposons de vous présenter la syntaxe des formules Planisware et leur utilisation.

Une formule Planisware est symbolisée par une grammaire évaluée par le moteur Planisware afin d’en retourner un résultat calculé. Ainsi une formule évaluée peut retourner n’importe quel type primitif Planisware et avoir un résultat différent selon le contexte utilisateur ou temporel.

Par exemple, dans le cas d’un filtre, la formule devra retourner une valeur booléenne afin de savoir si l’information doit ou non être affichée selon des critères dynamiques.



## Les types primitifs
{% raw %}
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			<tr><th>Type</th><th>Description</th><th>Exemple</th></tr>
		</thead>
		<tbody>
			<tr><td>Boolean</td><td>Valeur booléene vrai ou faux</td><td>TRUE</td></tr>
			<tr><td>Date</td><td>Date</td><td>2013-07-26</td></tr>
			<tr><td>Duration</td><td>Durée (selon calendrier)</td><td>'3M'</td></tr>
			<tr><td>Integer</td><td>Nombre (peut-être à virgule)</td><td>23</td></tr>
			<tr><td>String</td><td>Chaîne de caractères</td><td>"Ceci est une chaîne de caractères"</td></tr>
		</tbody>
	</table>
</div>
{% endraw %}

## Les opérateurs de comparaison
{% raw %}
<table class="table table-bordered table-striped">
	<thead>
		<tr><th>Opérateur</th><th>Exemple</th><th>Résultat</th></tr>
	</thead>
	<tbody>
		<tr><td>= Egal</td><td>VAR_A = VAR_B</td><td>TRUE si la valeur de VAR_A est égale à la valeur de VAR_B</td></tr>
		<tr><td>&lt;&gt; Différent</td><td>VAR_A &lt;&gt; VAR_B</td><td>TRUE si la valeur de VAR_A est différente de la valeur de VAR_B</td></tr>
		<tr><td>&lt; Plus petit</td><td>VAR_A &gt; VAR_B</td><td>TRUE si la valeur de VAR_A est strictement plus petite que la valeur de VAR_B</td></tr>
		<tr><td>&gt; Plus grand</td><td>VAR_A &gt; VAR_B</td><td>TRUE si la valeur de VAR_A est strictement plus grande que la valeur de VAR_B</td></tr>
		<tr><td>&lt;= Inférieur ou égal</td><td>VAR_A &lt; VAR_B</td><td>TRUE si la valeur de VAR_A est plus petite ou égale à la valeur de VAR_B</td></tr>
		<tr><td>&gt;= Supérieur ou égal</td><td>VAR_A &gt; VAR_B</td><td>TRUE si la valeur de VAR_A est plus grande ou égale à la valeur de VAR_B</td></tr>
	</tbody>
</table>
{% endraw %}

## Les opérateurs arithmétiques
{% raw %}
<table class="table table-bordered table-striped">
	<thead>
		<tr><th>Opérateur</th><th>Exemple</th><th>Résultat</th></tr>
	</thead>
	<tbody>
		<tr><td>+ Addition</td><td>VAR_A + VAR_B</td><td>Somme des valeurs de VAR_A et VAR_B</td></tr>
		<tr><td>- Soustraction</td><td>VAR_A - VAR_B</td><td>Différence des valeurs de VAR_A et VAR_B</td></tr>
		<tr><td>* Multiplication</td><td>VAR_A * VAR_B</td><td>Produit des valeurs de VAR_A et VAR_B</td></tr>
		<tr><td>/ Division</td><td>VAR_A / VAR_B</td><td>Quotient des valeurs de VAR_A et VAR_B</td></tr>
	</tbody>
</table>
{% endraw %}

## Les opérateurs logiques
{% raw %}
<table class="table table-bordered table-striped">
	<thead>
		<tr><th>Opérateur</th><th>Description</th></tr>
	</thead>
	<tbody>
		<tr><td>ET</td><td>Chaque condition doit être vérifiée</td></tr>
		<tr><td>OU</td><td>Au moins une condition doit être vérifiée</td></tr>
		<tr><td>NON</td><td>N'est pas</td></tr>
	</tbody>
</table>
{% endraw %}
La priorisation de l’évaluation des critères du filtre se fait à l’aide des parenthèses **()** et crochets **[]**.
<pre lang="JAVASCRIPT">1+2 * 3 = 7
(1+2) * 3 = 9</pre>

**Parenthèses ou crochets ?** Dans le cas du paramétrage d'un tableau, les crochets permettent de réaliser des filtres invisibles à l’utilisateur. Ainsi la colonne sur laquelle un filtre est positionné, ne s'affichera pas en bleu. L'utilisateur ne se doutera donc pas de la présence d'un filtre.

## Les chaînes de caractères
Afin d’être interprétées comme telles, les chaînes de caractères au sein des formules Planisware doivent être entourées par des guillemets "".
Les opérations d’égalité ou d’inégalité ne font pas de distinction entre un mot en majuscule et un autre en minuscule. Ainsi, le résultat de la formule ci-dessous sera toujours VRAI :
<pre lang="JAVASCRIPT">"PLANISWARE" = "planisware"</pre>
Le point d’interrogation ‘?’ permet de remplacer un caractère. L’étoile ‘*’ permet de remplacer n’importe quel nombre de caractères. Ainsi, le résultat de la formule ci-dessous retourne toujours VRAI :
<pre lang="JAVASCRIPT">"PLANI*RE" = "planisware"</pre>

## Les nombres

Les nombres peuvent s’utilisent comme dans les équations mathématiques simples.

## Les booleens

Les valeurs usuelles des [booléens](https://fr.wikipedia.org/wiki/Bool%C3%A9en "Definition d") dans Planisware sont les suivantes :

*   Lorsque la condition est remplie: TRUE, VRAI, YES
*   Sinon : FALSE, FAUX, NO
Si l’on adjoint l’opérateur « NOT » (ou NON) devant une valeur booléenne, le résultat en sera le contraire.
Exemple:
<pre lang="JAVASCRIPT">(NOT TRUE) = FALSE</pre>

## Les dates

Les dates s’utilisent entre guillemets simples ‘ ‘. Le format des dates est celui qui est spécifié dans les paramètres utilisateurs (Menu « Dates/unités / Autres formats »).
Par exemple, si le format de date est JJ/MM/AAAA, vous pourrez utiliser la date du 24 décembre 2010 de cette façon :
<pre lang="JAVASCRIPT">‘24/12/2010’</pre>

![Formule](/blog/wp-content/uploads/2014/08/formule1.jpg)

## Les Durées

Les durées s’expriment comme les dates entre guillemets simples ‘ ‘. Le format d’une durée dépend du format de durée par défaut. Par exemple, si le format de durée par défaut est ‘DDjdHhMMm’, alors il est possible d’écrire une durée de cette forme : '30j7h30m‘
Pour une durée de 3 jours, on écrira la formule « ’3j’ ».
Pour ajouter ou soustraire une durée à une date, on peut utiliser les opérateurs mathématiques.
<pre lang="JAVASCRIPT">‘24/12/2010’ - ‘3j’ = ‘21/12/2010’</pre>

## Définir plusieurs critères

Il est possible de combiner plusieurs critères à l'aide des opérateurs AND et OR.
Dans l'exemple suivant, nous recherchons l'ensemble des projets actifs commencant par la lettre "A".
<pre lang="JAVASCRIPT">STATUS = "Active" AND NAME = "a*"</pre>

## Les formules conditionnelles

<pre lang="JAVASCRIPT">IF [CRITERE] THEN [ACTION1] ELSE [ACTION2] FI</pre>
Permet de réaliser une action en fonction d’un ou plusieurs critères.
Exemple :
<pre lang="JAVASCRIPT">IF $current_date = DEBUT_MOIS($current_date) THEN "DEBUT" ELSE "EN COURS" FI</pre>
Si la date du jour est le 1er jour du mois, alors renvoyer « DEBUT » sinon renvoyer « En cours ».
<pre lang="JAVASCRIPT">NAME IN (“PROJET”, “PROJECT”)</pre>
L’opérateur IN est utilisé pour rechercher une valeur dans une liste.

## Les fonctions

Une fonction Planisware permet d’exécuter un traitement ou de calculer une valeur. Cette valeur peut être conditionnée par les arguments passés à la fonction.
<pre lang="JAVASCRIPT">DEBUT_MOIS('21/12/2010')</pre>
L'exemple ci-dessus, montre l'utilisation de la fonction "DEBUT_MOIS" retournant la date du début du mois en fonction de la date passée en argument.



## Les variables globales

Les variables globales sont des mots clés introduits par le noyau Planisware. Ces variables commencent toutes par le signe $ et peuvent être utilisées directement au sein d’une formule.
<pre lang="JAVASCRIPT">$current_user = "USER01"</pre>
L’exemple ci-dessus permet donc de vérifier que l’utilisateur affichant la page est bien l’utilisateur N°1 (login: USER01).
La liste ci-dessous présente les variables globales Planisware les plus courantes :

*   $CURRENT_DATE : (Date) Permet de récupérer la valeur de la date courante (Time Now)
*   $CURRENT_PAGE_OBJECT_ID : (String) Affiche l’identifiant de l’objet courant
*   $CURRENT_USER : (String) Retourne le nom de l’utilisateur actuel
*   $DATE_OF_THE_DAY : (Date) Affiche la date du jour
*   $LANGUAGE : (String) Retrouve la langue définie pour l’utilisateur courant
*   $OPX2BATCH_MODE : (Booléen) Vrai si le traitement est défini dans un batch
*   $OPX2PRO_MODE : (Booléen) Vrai si le traitement est exécuté depuis le client Planisware
Pro

## Pour conclure

Pour aller plus loin dans le concept des formules Planisware, n'hésitez pas à parcourir l'éditeur de formule Planisware qui présente l'ensemble des champs, variables ou fonctions disponibles dans le contexte où vous écrivez votre formule.

Vous retrouverez tous ces concepts et bien plus encore dans notre formation ["Configurer et administrer Planisware"](//fr/training/planisware_admin). Nos programmes de formation peuvent être dispensés sur votre lieu de travail ou dans nos centres de formation partenaires.

