title: Configurer sa fenêtre de temps Planisware
description: Découvrez et maîtriser la configuration de la fenêtre de temps Planisware avec cet article illustré.
og_type: article
keywords: temps, fenêtre, planisware
og_image: blog/wp-content/uploads/2016/01/planisware-dates-unités-dates.png
id: 831
comment: false
main_tag: Planisware tutorial
tags:
  - Astuce
  - Documentation
  - Planisware tutorial
categories:
  - Planisware
  - UnMoisUneAstucePlanisware
  - Astuce
date: 2017-07-05 09:00:20
---

&nbsp;

<em>Cet article va vous permettre de maîtriser la configuration des fenêtres de temps dans Planisware.</em>

La visualisation d'un Gantt est bornée entre deux dates, c'est ce que l'on appelle la fenêtre de temps. Ainsi seules les activités planifiées dans la fenêtre de temps sont visibles. Dès lors il devient primordial de savoir configurer correctement son affichage et donc sa fenêtre de temps.
<!-- more --> 
## Tutorial

Il existe 4 façons de définir la période que l'on souhaite afficher à l'écran.

### La plus simple : le "doigt" pour ajuster la fenêtre

![Ajuster la fenêtre de temps Planisware avec le doigt](/blog/wp-content/uploads/2016/01/planisware-dates-doitg.png)

La façon la plus simple pour ajuster la fenêtre de temps dans une vue Gantt est sans doute d'utiliser le "doigt" présent dans la barre d'outils de planification. Automatiquement, la période affichée à l'écran va se caler aux dates de l'activité sélectionnée.

Par exemple en sélectionnant l'activité de niveau 1 représentant le projet puis en cliquant sur le doigt, vous pourrez visualiser l'ensemble du planning du projet. Par contre si vous sélectionnez la phase de "Recette", la fenêtre de temps sera ajustée aux seules activités de la phase recette.

### Affiner la période affichée en sélectionnant la période

Vous pouvez cliquer directement sur l'entête des colonnes du gantt ou du tableau de charge. En cliquant sur 2016, Planisware va ajuster la fenêtre de temps du 1er janvier 2016 au 31 décembre 2016.

Vous pouvez sélectionner plusieurs période en maintenant vos curseur appuyé après le premier clic. Dans ce cas vous pourrez zoomer sur une période (janvier à mars par exemple).

![Affiner la période affichée en sélectionnant la période](/images/blog/plw-adjust-dates.gif)


### Le menu Dates pour renseigner manuellement la date de début et la date de fin

Sans que vous le remarquiez, les deux précédentes fonctionnalités manipulaient les 4 paramètres du menu "Dates/Unités" / "Dates".

![Planisware Menu Dates/Unités Dates](/blog/wp-content/uploads/2016/01/planisware-dates-unités-dates.png)

{% raw %}
<div class="table-responsive">
	<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<th>Date de début</th>
			<td>Permet de renseigner manuellement la date de début de la fenêtre de temps</td>
		</tr>
		<tr>
			<th>Date de fin</th>
			<td>Permet de renseigner manuellement la date de fin de la fenêtre de temps</td>
		</tr>
		<tr>
			<th>Période</th>
			<td>Définie la période de temps affichée entre les deux dates précédentes. Le reste de la fenêtre de temps sera visualisable en déplacant l'ascenseur horizontale. </td>
		</tr>
		<tr>
			<th>Première période affichée</th>
			<td>Définie la date de la première période affichée </td>
		</tr>
	</tbody>
	</table>
</div>
{% endraw %}

![Configurer les dates dans Planisware](/images/blog/plw-param-dates.gif)
&nbsp;

### Les styles de dates : enregistrez vos préférences de dates
Les styles de dates vous permettent d'enregistrer une configuration dynamique de fenêtre de temps (par exemple par rapport à la date courante). Tout comme les styles de tableaux, vous pourrez également les partager en donnant des droits de lecture ou d'écriture à des utilisateurs ou groupes d'utilisateurs.

L'accès au style de Date se fait par le menu Planisware "Styles de dates". 
{% img "" "/images/blog/plw-date-style.png" 400 500 "Les styles de dates" %}

Après avoir renseigné le nom et le descriptif (libellé dans le menu Planisware) de votre nouveau style de date, vous pourrez configurer votre style au travers d'une date pivot (la date courrante par exemple) ou en définissant des formules.
Vous pourrez par exemple créer un style de date pour afficher les années N-1, N, N+1, N+2 et N+3.

> Régulièrement, l'équipe Tyneo publie une astuce utilisateur Planisware. Retrouvez [l'ensemble des astuces déjà publiée ](https://tyneo.net/blog/categories/Astuce/)sur notre blog.