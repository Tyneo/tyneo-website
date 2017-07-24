title: Les APIs Caliber expliquées et en exemple
description: Dans cet article, nous allons détailler quelques fonctionnalités de base de cette bibliothèque, disponible en JAVA, .NET ou VB / VBA.
keywords: api, caliber, classe, CaliberServer
og_type: article
main_tag: Caliber
tags:
  - api
  - Borland
  - Caliber
  - Documentation
  - java
id: 293
comment: false
categories:
  - Caliber
date: 2013-02-28 09:34:06
---

MicroFocus à travers sa solution de gestion des exigences Borland Caliber propose une API permettant d’accéder à l'ensemble des données du référentiel à partir de vos propres programmes.
Dans cet article, nous allons détailler quelques fonctionnalités de base de cette bibliothèque, disponible en JAVA, .NET ou VB / VBA.
<!-- more -->
La structure et les objets de l'API Caliber étant relativement similaires depuis les différents langages de programmations, seuls les exemples en JAVA seront détaillés dans cet article.

![API / SDK](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2013/02/images.jpg)

### Se connecter au référentiel Caliber via les API

Pour se connecter au serveur Caliber à travers les API de l'outil, il est nécessaire d'instancier un objet de la classe CaliberServer puis d'appeler la méthode login().

Un objet de classe Session est alors retourné. Cet objet vous permettra d'accéder à l'ensemble des fonctionnalités de l'API.
<pre lang="JAVA">CaliberServer server = new CaliberServer("localhost");
Session session = server.login("admin", "admin");

//Now you are logged
System.out.println("Is logged: " + session.isLoggedIn());</pre>

### Parcourir la liste des projets

Depuis l'objet session, il suffit simplement de parcourir la liste des "Project" retournés par la méthode getProjects()
<pre lang="JAVA">for (Project project : session.getProjects()) {
    System.out.println(project.getName() + " - " + project.getProjectID().getIDNumber());
}</pre>

### Retrouver un projet depuis son identifiant

Vous pouvez retrouver simplement un projet a partir de son identifiant interne avec la méthode getProject().
<pre lang="JAVA">Project project = session.getProject(101);
System.out.println(project.getName() + " - " + project.getProjectID().getIDNumber());</pre>
Il n'existe pas de méthode proposée par l'API pour retrouver un projet depuis son nom. Ce sera sans doute une des fonctions que vous devrez développer et intégrer dans une bibliothèque commune pour tous vos développements Caliber.

### Afficher la liste des exigences d'un projet

Les exigences d'un projet sont stockées dans une baseline. Même si la baseline "En cours" (ou "Current") n'en est pas vraiment une par nature, vous devrez la "sélectionner" en appelant la méthode getCurrentBaseline().

Depuis la baseline "En cours" ou une autre (getBaselines()), vous avez la possibilité de récupérer les exigences "à plat" baseline.getRequirements() ou dans un arbre baseline.getRequirementsTree() ce qui vous permettra d'obtenir des information supplémentaires sur la hiérarchie des exigences par exemple.
<pre lang="JAVA">Project project = session.getProject(101);
Baseline baseline = project.getCurrentBaseline();
for (Requirement requirement : baseline.getRequirements()) {
    System.out.println(requirement.getName());
}</pre>

### Afficher les attributs d'une exigence

La description d'une exigence est enregistrée par Caliber au format HTML et est accessible depuis la méthode getDescription() depuis un objet de la classe Requirement. Si vous souhaitez afficher la description sans les baselines HTML, l'API Caliber fournie un utilitaire a travers la classe HTMLHelper pour vous aider à convertir un document HTML en texte brut.
<pre lang="JAVA">//Description au format HTML
String descriptionHTML = requirement.getDescription().getText();</pre>
<pre lang="JAVA">//Description au format texte brut
String description = HTMLHelper.htmlToPlainText((requirement.getDescription().getText()));</pre>
<pre lang="JAVA">//Etat d'une exigence
String status = requirement.getStatus().getSelectedValue().toString();</pre>

#### Valeur des attributs personnalise

La méthode getAttributeValues() permet de lister l'ensemble des attributs supplémentaires d'une exigence. L'objet AttributeValue doit être converti dans le type adéquat UDAxxxxxValue afin de pouvoir le consulter ou le modifier.

La liste ci-dessous vous trouverez la correspondance entre les paramètres de Caliber Author et les classes de la bibliothèque de développement :

*   UDATextValue: Ligne de texte isolée, ligne de texte multiple
*   UDAIntegerValue: Nombre entier
*   UDADurationValue: Durée
*   UDAFloatValue: Nombre décimal
*   UDADateValue: Date
*   UDABooleanValue: Booléen
*   UDAListValue: Liste à sélection simple ou multiple (valeur, groupes ou utilisateurs)
<pre lang="JAVA">for (AttributeValue value : requirement.getAttributeValues()) {
    if (value.getAttribute().getName().equals("Sponsor Name")) {
        UDATextValue text = (UDATextValue) value;
        System.out.println("Sponsor Name: " + text.getValue());
    }

    if (value.getAttribute().getName().equals("Funded")) {
        UDABooleanValue b = (UDABooleanValue) value;
        System.out.println("Funded: " + b.getValue());
    }
}</pre>

### Affichage des traces

L'affichage des traces depuis une exigence se réalise en appelant les méthodes getTracesTo() et getTracesFrom(). Dans l'exemple ci-dessous, nous affichons l'ensemble des éléments "répondant" à notre exigence.
<pre lang="JAVA">for (Trace trace : requirement.getTracesTo()) {
    Requirement reqTo = session.getRequirement(trace.getTraceToID().getIDNumber());
    System.out.println("  to -&gt; " + reqTo.getName());
}</pre>

### Affichage des références

Les références se trouvant attachées à l'exigences sont accessibles à travers les API Caliber en utilisant la méthode getDocumentReferences(). A l'instar de ce que nous avons vu pour les attributs personnalisés, il faudra convertir l'objet DocumentReference dans le type qu'il lui convient (fichier, texte ou URL)
<pre lang="JAVA">for(DocumentReference reference : requirement.getDocumentReferences()) {
    if (reference instanceof FileReference) {
        FileReference file = (FileReference) reference;
        System.out.println(file.getPath());
    }
}</pre>

### Création d'une nouvelle exigence

Il est possible de créer une nouvelle exigence en instanciant un nouvelle objet Requirement. Plusieurs constructeurs vous sont proposés pour créer l'exigence sous un type d'exigence ou sous une exigence existante. Il faudra aussi spécifier la position de l'exigence dans l'arborescence ce qui recalculera la position des autres exigences automatiquement. Dans l'exemple ci-dessous nous avons choisi de créer l'exigence à la 3ème position. Ainsi si l'exigence parente a le numéro hierarchique 3.4.2, l'exigence créée disposera du numéro hiearchique 3.4.2.3.
<pre lang="JAVA">Requirement requirement = new Requirement("Nouvelle exigence 3", requirement, 3, session);
requirement.save();</pre>

### Modification de l'Etat d'une exigence

L'exemple ci-dessous vous démontrer comment modifier l'attribut "Etat" d'une exigence. Vous remarquez l'utilisation des méthodes lock() et unlock() pour verrouiller et déverrouiller l'exigence pour empêcher autre toute modification.
<pre lang="JAVA">Requirement updReq = session.getRequirement(1);
updReq.lock();

UDAList list = (UDAList)updReq.getStatus().getAttribute();
int i=0;
for(UDAListEntry entry : list.getListEntries()) {
    if(entry.getObject().toString().equals("Draft")) {
        updReq.getStatus().setSelectedIndex(i);
    }
    i++;
}

updReq.save();
updReq.unlock();</pre>