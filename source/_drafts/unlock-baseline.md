title: Déverrouiller une baseline Caliber
id: 107
comment: false
categories:
  - En vrac
tags:
---

## Qu'est ce qu'une baseline dans Caliber ?

Une baseline est en quelque sorte une photo d'un périmètre d'exigences à un instant T. Cette baseline, une fois créée reste modifiable jusqu'au moment où vous estimez que votre périmètre est complet et stable. Vous pourrez alors le verrouiller et ainsi empêcher toute modification. Cette baseline peut être signée par une ou plusieurs personnes et chaque signature peut avoir un sens différent (approbation du périmètre, rejet...).

L'utilisation des baselines de Caliber se traduira très certainement par des engagements dans votre processus de gestion des exigences. Cela peut en effet symboliser un périmètre sur lequel vous vous engager tel qu'un cahier des charges,  un lot à développer, une stratégie de tests...

## Créer une baseline dans Caliber

Il existe depuis CaliberRM 2008, deux façons de matérialiser vos périmètres à l'aide d'une baseline et chacune de ces façons présentes ses avantages.

Dans les deux cas,  vous devez tout d'abord créer une enveloppe qui symbolisera la baseline. Pour ce faire, vous devez disposer du droit "Administrateur de baselines" qui se configure depuis le module d'administration. Une fois se droit octroyé, le sous-menu "administration de baseline" depuis le menu "Fichier" est activé dans Caliber Author. Dans ce menu, vous devrez cliquer sur "Créer une baseline".

L'

Unlock baseline :
crmdiagSP1 -ulb "Project Name" "Baseline Name" -f SQMDB