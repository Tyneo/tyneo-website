title: Rechercher les doublons dans une table
description: Comment retrouver les doublons dans un table SQL? 
keywords: sql, doublon
og_type: article
main_tag: Astuce
tags:
  - Astuce
  - SQL
id: 21
comment: false
categories:
  - En vrac
date: 2012-10-11 14:05:12
---

Nous avons régulièrement besoin de vérifier ou d'identifier les doublons présent dans une table. En SQL plusieurs possibilités s'offrent à nous pour résoudre ce problème :
<pre lang="SQL">select i.id_project, i.name_project, i.id_origin, count(*)
from chronos_prom_link i
group by i.id_project, i.name_project, i.id_origin
HAVING count(*) &gt; 1
ORDER BY count(*) DESC</pre>
ou sans utiliser le mot clé HAVING :
<!-- more -->
<pre lang="SQL">select * from chronos_prom_link t
where exists (
    select 1 from chronos_prom_link t2
    where t.id_prgmoe=t2.id_prgmoe and t.id_pjtmoe=t2.id_pjtmoe and t.rowid</pre>