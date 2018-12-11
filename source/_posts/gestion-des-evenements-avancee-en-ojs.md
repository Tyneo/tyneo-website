title: Gestion avancée des événements en OJS
tags:
  - script
id: 73
comment: false
main_tag: Planisware tutorial
categories:
  - Planisware
  - Planisware tutorial
date: 2012-11-12 18:54:21
---

[![](//blog/wp-content/uploads/2012/10/javascript-150x150.jpg "javascript")](//blog/wp-content/uploads/2012/10/javascript.jpg)La semaine dernière, j'ai rencontré une certaine difficulté à implémenter une solution que j'ai proposé pour répondre un besoin d'un client. Le besoin était relativement simple : Pouvoir comparer et afficher la valeur d'attributs archivés grâce aux références créées sur un projet.

La solution est nativement fournie par Planisware, un nouveau champ est automatiquement disponible pour chaque attribut archivé et chaque référence... Sauf que cela n'est malheureusement disponible qu'au niveau du WBS.

Bien entendu, il suffit de créer une formule nommée pour retrouver la valeur d'un attribut sur un projet (Voir les fonctions REFERENCE_XXXX_VALUE) mais le client souhaitait disposer d'une solution générique où nous n'aurions pas à créer de nouvelle formule nommée pour chaque couple attribut/référence.
J'ai alors proposé de généré ces formules dynamiquement en fonction des noms des références possibles paramétrées dans Planisware ainsi que les attributs supplémentaires archivés. Cela me paraissait tout à fait faisable sans trop de difficulté en OJS, et effectivement je n'ai pas rencontré de difficulté particulière sur cette partie.
Mon problème, car il y en avait effectivement un résidait dans l'étape de chargement du script. Il était exécuté avant le chargement des paramètres globales. Ici aucune dépendance ne pouvait résoudre ce problème et je dois bien avoué, j'ai été bloqué un petit moment sur ce sujet.
Après avoir analysé de nombreux scripts OJS de Planisware, j'ai remarqué cette méthode assez énigmatique "AddWrapperFunction".
Elle fonctionne telle que les handler que l'on rencontre dans d'autres langages de programmation orienté objets : elle permet d'exécuter une fonction lors d'un événement donné. Il devenait possible de chargé mon script depuis un état post chargement des paramètres globales !
La mise en œuvre est assez aisée :
<pre lang="JAVASCRIPT">function monScriptDeChargement() {
   ...
}
AddWrapperFunction(NewOpxAppletWrapper,"monScriptDeChargement");</pre>
Voici une liste de quelque wrapper existant que j'ai pu noter dans les scripts Planisware :

*   NewOpxAppletWrapper : Lors de la création d'une nouvelle applet
*   InitializeMacroWrapper : Initialisation d'une macro
*   OpenDatasetsWrapper : Ouverture d'un dataset
*   CloseDatasetsWrapper : Fermeture d'un dataset
*   DeleteOpxAppletWrapper : Lors de la suppression d'une applet
Et si vous souhaitez vous même utiliser ces concepts dans vos scripts et application, voici comment appeler vos propres wrapper :
<pre lang="JAVASCRIPT">CallWrapperFunction(NewOpxAppletWrapper, Context);</pre>
Bien évidement, vous allez sans doute de me dire "C'est bien mais ca ressemble en fait a une alerte ce truc ?"
D'un sens vous avez tout à fait raison, d'ailleurs certains wrapper sont créés par Planisware en utilisant le même mécanisme que les alertes en script :
<pre lang="JAVASCRIPT">On OpenDatasets (Object) {
  CallWrapperFunction(OpenDatasetsWrapper, Object);
}</pre>
Mais le plus importants, c'est que cette méthode vous prémunie des bloques withoutAlerts, et qu'elle vous permet d'accéder a des classes (telle que OpxApplet) non visible par le biais de création d'alerte traditionnelle.