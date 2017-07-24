title: La programmation orientée objet sur Planisware
description: Comment l'OPX2 Script rend possible de faire de la programmation orientée objet
keywords: objet, opx2, script, ojs, planisware, classe, méthode
og_type: article
main_tag: Planisware tutorial
tags:
  - script
  - Planisware tutorial
id: 88
comment: false
categories:
  - Planisware
date: 2012-11-19 09:00:52
---

![Programmation orientée objet (POO)](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2012/11/47oop1-150x150.jpg "Programmation orientée objet (POO)")
Bien que peu pratiqué par les consultants Planisware, le langage interne de l'application (OJS) permet de développer en utilisant une logique objet. Malgré l'utilisation du Javascript comme base du langage OJS, les méthodes traditionnellement utilisées pour déclarer des classes et des méthodes n'ont pas été implémentée de la même façon.
<!-- more -->
Ainsi pour définir une nouvelle classe, il faudra commencer par déclarer cette classe sous forme de fonction.

<pre lang="JAVASCRIPT">function Personne(nom, prenom) {
    this.nom = nom;
    this.prenom = prenom;
}</pre>

Une fois fait, vous pouvez ajouter de nouvelles méthodes à cette classe en utilisant les instructions method <span style="color: #999999;">_[Nom de la méthode]_</span> on <span style="color: #999999;">_[Nom de la classe]_</span>(<span style="color: #999999;">_[Arguments]_</span>)

<pre lang="JAVASCRIPT">method setNom on Personne(nom) {
    this.nom = nom;
}</pre>

Pour déclarer un objet de type Personne :

<pre lang="JAVASCRIPT">var raphael = new Personne("gloupss", "Raphael");
raphael.setNom("Gloups");</pre>

La programmation orientée objet dans Planisware vous permet de mieux structurer vos développements mais aussi d’éviter le risque de redéfinir des fonctions existantes en utilisant le même nom. Pour ma part, la première classe que j’ai développé en utilisant ce concept, est un gestionnaire de log permettant de tracer les différents niveaux d’alerte et permettant de débugger plus facilement les scripts OJS.

<pre lang="JAVASCRIPT">Logger.debug("Affecte la valeur SRD: " + srd);</pre>

Comme vous l’avez peut-être remarqué, on peut très facilement enrichir des classes existantes.  Par exemple, ces quelques lignes permettent d’ajouter une méthode _<span style="color: #999999;">contains()</span>_ à la classe String pour vérifier si une chaîne de caractères contient une sous-chaîne.

<pre lang="JAVASCRIPT">method contains on String(substring) {
    this.test("*" + substring + "*");
}
alert("ma chaine".contains("ma"));   //return true</pre>