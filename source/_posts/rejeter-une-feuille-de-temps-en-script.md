title: 'Planisware : Rejeter une feuille de temps en script'
description: Rejetet une feuille de temps Timecard avec un script Planisware
keywords: timecard, script, ojs, planisware
og_type: article
main_tag: Planisware tutorial
tags:
  - Astuce
  - script
  - Planisware tutorial
id: 14
comment: false
categories:
  - Planisware
date: 2012-10-09 16:40:45
---

Bug ou pas bug ?

En souhaitant rejeter une feuille de temps Timecard depuis un script Planisware, j'ai utilisé naturellement la macro "reject" sur la classe OpxTimeCard.
<pre lang="JAVASCRIPT">var res = OpxResource.get(2387346655);
var tc_start = new Date("12/09/2011", "MM/DD/YYYY");

fromObject (res) {
    for (var tc in OpxTimecard where tc.startDate == tc_start) {
        tc.callMacro("Reject");
    }
}</pre>
Malheureusement, ce code n'a pas eu l'effet escompté, la feuille de temps n'a pas été rejeté.
Après quelques investigations dans les profondeurs de Planisware, il faut non pas appeler la macro "Reject" mais "REJECT-TIME-CARD-USER-TOOL" pour résoudre ce problème...
<!-- more -->
<pre lang="JAVASCRIPT">tc.callMacro("REJECT-TIME-CARD-USER-TOOL");</pre>