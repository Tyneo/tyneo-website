title: Planisware et la gestion des environnements
description: La gestion des environnements est un processus primordial dans les projets informatiques et notamment les projets Planisware.
keywords: architecture, environnement, planisware
og_type: article
main_tag: Documentation
tags:
  - Organisation
  - Processus
  - Documentation
id: 524
categories:
  - Planisware
date: 2014-01-09 10:50:40
---

La gestion des environnements est un processus primordial dans les projets informatiques et notamment les projets [Planisware](http://www.planisware.com "Site officiel de l"). L’architecture des environnements mise en œuvre doit être formalisée et connue de chaque membre du projet. Elle doit supporter les contraintes techniques de l'outil Planisware tout en restant en adéquation avec le cycle de vie du projet.
<!-- more -->
![Environnements Planisware](//blog/wp-content/uploads/2014/01/Environments.png)
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td valign="top"><span style="color: #333399;">**Développement **</span>
Chaque développeur dispose d’un environnement indépendant lui permettant d’implémenter et de corriger les fonctionnalités attendues.<span style="line-height: 1.5em;">A chaque fin de cycle de développement, un[ ensemble de fichiers LSP contenants les objets Planisware impactés](//blog/2013/01/22/les-7-extensions-planisware-a-connaitre/ "ensemble de fichiers LSP contenants les objets Planisware impactés") sera produit afin de les intégrer.</span></td>
<td valign="top"><span style="color: #993366;">**Intégration **</span>
Cet environnement est utilisé pour les procédures d'intégration techniques et applicatives.En suivant les indications formalisées de chaque développeur, l’intégrateur importe les fichiers LSP et déroule les opérations manuelles nécessaires pour constituer l’environnement final. Il est alors sauvegardé sous la forme d’un fichier DPE qui correspondra au livrable mis en production.</td>
<td valign="top"><span style="color: #800080;">**Test**</span>
Cet environnement permet de tester l’ensemble des  fonctionnalités développées, corrigées et intégrées dans des conditions similaires à l’environnement de production.L’environnement contient des données de production (ou anonymisée) et est mis à jour à l’aide du DPE réalisé en intégration.</td>
</tr>
<tr>
<td valign="top">**Pré-production**
La pré-production est utilisé par les recetteurs ou testeur côté client pour la validation des livrables avant mise en production.Sa configuration est relativement identique à l’environnement de formation, mais sa mise à jour y est moins fréquente.</td>
<td valign="top"><span style="color: #800000;">**Production**</span>
La production est utilisé par les utilisateurs finaux.Lors d’une mise en production, le DPE généré à partir de l’intégration y sera installé.</td>
<td valign="top"><span style="color: #ff6600;">**Maintenance**</span>
L’environnement de maintenance est [une copie (DPX) de la production](//blog/2012/12/14/sauver-vos-donnees-planisware/ "une copie (DPX) de la production") à un moment T et permet de réaliser l’ensemble des investigations nécessaires dans les taches de support et de résolution d’anomalie.</td>
</tr>
</tbody>
</table>

### Les 4 règles d'un bon environnement

1.  L'environnement doit être **représentatif** : l’architecture technique et matérielle à été conçue et dimensionnée en accord avec les besoins ; l’environnement contient les données nécessaires.
2.  Il doit être **reproductible** : Le processus d’installation est maîtrisé, la documentation des environnements est à jour, un processus de gestion des livraisons est en place.
3.  Il doit être **stable** : Les changements sont tracés, un processus de gestion des anomalies est mis en œuvre.
4.  Il doit être **disponible** : [Mise en place d’une SLA](http://www.droit-technologie.org/actuality-713/le-service-level-agreement-dans-les-contrats-informatiques.html "Définition et mise en place d"), Prise en compte des cycles projet et [MCO en parallèle](http://fr.wikipedia.org/wiki/Maintien_en_condition_op%C3%A9rationnelle "Définition de MCO").