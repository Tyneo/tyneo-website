title: Export des objets - Fichier LSP Planisware
description: Export ses objets d'environnement Planisware dans un fichier pour les transférer
keywords: lsp, environnement, objet, planisware
og_type: article
id: 657
comment: false
main_tag: Documentation
categories:
  - Planisware
  - Documentation
date: 2014-08-25 11:25:05
tags:
---

L’export d’un objet Planisware permet de sauvegarder dans un fichier texte ([fichier .lsp](http://fr.wikipedia.org/wiki/Lisp "Pour en savoir plus sur les fichiers Lisp")) la structure de l’objet. Ainsi, il peut être aisément réimporté dans un autre environnement. La principale utilité de cet export d’objet est lié au processus de développement Planisware et à la livraison ses développements.
<!-- more -->
![LISP](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2014/08/lisp-glossy-150x150.jpg)

### **Rechercher un objet**

Depuis Planisware Pro, cliquez sur le menu « Fichier / Administration / Environnement ».

Cette table permet d’accéder à l’ensemble des objets Planisware de l’environnement. Pour rechercher un objet, il suffit de constituer un filtrer adéquat.

Le filtre suivant permet de rechercher l’ensemble des formules nommées stockées dans le fichier « _MOD_PM » : _CLASS = 'FORMULE' AND FILE = '_MOD_PM' _

### **Exporter un objet Planisware**

Depuis Planisware Pro et en réalisant un clic droit sur une table listant l’objet que vous souhaitez exporter (par exemple la table Environnement vue précédemment), vous pouvez sélectionner dans le menu contextuel « Export des objets d’environnement ». Vous pouvez sélectionner plusieurs objets à la fois pour les exporter dans un seul et même LSP. Il est toutefois conseillé d’exporter dans un même fichier des objets appartenant au même fichier.

![Exporter](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2014/08/Exporter-300x204.jpg)

### **Importer un objet d’environnement**

Depuis Planisware Pro, allez dans le menu « Fichier / Administration / Import de l’environnement ». Sélectionnez le fichier décrivant l’objet ainsi que le fichier Planisware où sera stocké l’objet.

Il sera possible de déplacer l’objet d’un fichier à un autre par la suite en modifiant la colonne « Fichier » de l’objet.

![Importer](http://www.tyneo-consulting.fr/blog/wp-content/uploads/2014/08/Importer-300x106.jpg)

L’import et l’export d’objets Planisware sous la forme de fichiers Lisp (ou lsp) est une pièce maitresse dans la gestion des livraisons et la gestion des environnements Planisware. 
Pour en savoir plus sur la gestion des environnements Planisware, nous vous invitons à consulter ou redécouvrir [notre article consacré à ce sujet](http://www.tyneo-consulting.fr/blog/2014/01/09/gerer-les-environnements-planisware/ "Planisware et la gestion des environnements").