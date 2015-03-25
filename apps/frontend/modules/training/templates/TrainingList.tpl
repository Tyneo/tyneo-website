<?php 
addJavascript(array('libs/tableSort.js'));

$trainings = $response->getProperties()->get('trainings');
$response->getProperties()->set('page_title', 'Formation : Catalogue des formations Tyneo Consulting');
$response->getProperties()->set('page_keywords', 'formation, tyneo, assistance, planisware, caliber, opx2, script, borland');
$response->getProperties()->set('page_description', 'Tyneo Consulting vous propose des programmes de formation adaptés autour des outils de gestion des exigences et de gestion de projets');
?>

<?php include_component('training', 'submenu', array('aside' => true)) ?>
<section class="page page_2c trainings">

	<article class="">
		<header>
			<h2>Catalogue des formations</h2>
		</header>
		
		<h3 class="title certified">Organisme de formation agréé</h3>
		<p>Tyneo Consulting est un organisme de formation agréé<!-- et enregistré sous le numéro XXXXX -->. 
			Nos formations peuvent donc bénéficier des financements par un OPCA, du dispositif mis en place par Pôle Emploi, du DIF et du CIF.</p>

		<h3 class="title anywhere">Où que vous soyez</h3>
		<p>Les programmes de formation Tyneo Consulting peuvent être dispensés sur votre lieu de travail ou dans nos centres de formation partenaires.</p>
		
		<h3 class="title custom">Des programmes sur mesure</h3>
		<p>La plupart des formations Tyneo Consulting peuvent être personnalisées afin d'intégrer les processus internes de votre entreprise ou d'adresser des problématiques spécifiques.</p>
		
		</p>
		
		<table class="base_list sortable-onload-0-1 rowstyle-alt colstyle-alt arrow">
			<thead>
			<tr>
				<th class="sortable">Catégorie</th>
				<th class="sortable">Formation</th>
				<th class="sortable">Durée</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($trainings as $training): ?>
				<tr>
					<td><a href="<?php urlFor('training', array('slug' => $training->getSlug())) ?>"><?php echo $training->getCategory() ?></a></td>
					<td><a href="<?php urlFor('training', array('slug' => $training->getSlug())) ?>"><?php echo $training->getName() ?></a></td>
					<td><a href="<?php urlFor('training', array('slug' => $training->getSlug())) ?>"><?php echo __transChoice('duration.days_short', $training->getDuration(), array('%quantity%' => $training->getDuration()), 'training') ?></a></td>
				</tr>
			<?php endforeach; ?>				
			</tbody>
		</table>
	</article>
</section>