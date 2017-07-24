title: Le modèle de données standard de Planisware
id: 669
categories:
  - Non classé
tags:
---

Modèle de données dynamique
Accessible depuis le menu d’aide « ? / Arborescence des classes »

La vue proposée par ce modèle de données est dynamique. Ainsi, si vous ajoutez de
nouveaux champs ou de nouvelles tables, vous les retrouverez dans ce modèle Planisware.

Page 55

Vérification du modèle de données
Depuis Pro, menu « Fichier / Administration / Vérification du modèle physique »
En sollicitant l’outil de vérification du modèle physique depuis Planisware Pro, les informations techniques de connexion à la base de données sont automatiquement renseignées.

A chaque fois qu’une modification est réalisée sur la structure du modèle de données (par
exemple lorsque vous ajoutez un champ stocké ou une nouvelle table), il est nécessaire d’en
faire une vérification. Les champs calculés comme les formules nommées ne modifient pas la
structure de la base de données car la valeur n’est pas stockée. Il n’est donc pas nécessaire
de vérifier le modèle de données.
Lorsque l’outil de vérification proposé par Planisware est sollicité, il va créer les modifications
dans la structure de votre base de données. Par exemple, si vous ajoutez un champ stocké
sur l’objet Projet, l’outil va ajouter une nouvelle colonne dans la table « Project » de votre
base de données.