<?php
$training = $response->getProperties()->get('training');

$response->getProperties()->set('page_title', 'Formation : '.$training->getName());
$response->getProperties()->set('page_keywords', 'formation, tyneo, assistance, planisware, caliber, opx2, script, borland');
$response->getProperties()->set('page_description', 'Tyneo Consulting vous propose des programmes de formation adaptés autour des outils de gestion des exigences et de gestion de projets');
$response->getProperties()->set('univers', 'trainings');

if($training->getCategory() == "Gestion de projets") {
	$response->getProperties()->set('page_picture', $configuration->get('base_url').'/img/intro-projects.png');
	$response->getProperties()->set('page_resume', false);
} else if($training->getCategory() == "Gestion des exigences") {
	$response->getProperties()->set('page_picture', $configuration->get('base_url').'/img/intro-requirements.png');
	$response->getProperties()->set('page_resume', false);
}

?>
<?php include_component('training', 'submenu', array('aside' => true)) ?>
<section class="page page_2c training">
	<article class="">
		<header>
			<h2><?php __('title', array('%name%' => $training->getName()), 'training') ?></h2>
		</header>

<aside class="more">
<div class="green">
Durée : <?php echo __transChoice('duration.days_short', $training->getDuration(), array('%quantity%' => $training->getDuration()), 'training') ?><br/>
Effectif : 2  à 8 stagiaires<br/>
</div>

<div class="blue">
Référence : <?php echo $training->getSlug() ?>
</div>

<div class="red">
Cette formation vous intéresse ? <br/><a href="<?php urlFor('training_contact', array('ref' => $training->getSlug()))?>">Recevez votre devis personnalisé</a>.
</div>
</aside>

		<div class="p">Les programmes de formation Tyneo Consulting peuvent être dispensés sur votre lieu de travail ou dans nos centres de formation partenaires.
		Ce module peut être personnalisé afin d'intégrer vos processus internes ou d'adresser vos problématiques spécifiques.</div>
		
		<h3 class="title objective"><?php __('objective', array(), 'training') ?></h3>
		<div class="table-list"><?php echo html_entity_decode($training->getObjective(), ENT_COMPAT, 'UTF-8') ?></div>
		
		<h3 class="title requirement"><?php __('requirement', array(), 'training') ?></h3>
		<div class="p"><?php echo $training->getRequirements() ?></div>
		
		<h3 class="title recipient"><?php __('recipient', array(), 'training') ?></h3>
		<div class="table-list"><?php echo html_entity_decode($training->getRecipient(), ENT_COMPAT, 'UTF-8') ?></div>
		
		<h3 class="title agenda"><?php __('agenda', array(), 'training') ?></h3>
		<div class="table-list">
		<?php echo html_entity_decode($training->getAgenda(), ENT_COMPAT, 'UTF-8') ?>
		</div>
		
		<h3 class="title formative"><?php __('formative', array(), 'training') ?></h3>
		<div class="p"><?php echo html_entity_decode($training->getFormative(), ENT_COMPAT, 'UTF-8') ?></div>
		
	<div class="clear"> </div>	
	<aside class="bloc">
		<h2 class="title">Sur le même sujet...</h2>
		<ul class="table-list">
			<li>Découvrez notre <a href="<?php urlFor('trainings') ?>">catalogue de formation</a>.</li>
			<?php include_component('training', 'showTrainings', array('category' => $training->getCategory(), 'without-ul' => true, 'exclude' => $training->getSlug())) ?>
		</ul>
		
	</aside>
	
	</article>
</section>

<?php
$jscript = "
	$('a.detail').click(function() {
		$(this).next().toggle();
		
		if($(this).next().is(':visible')) $(this).addClass('active');
		else  $(this).removeClass('active');
	});
";
addJavascript($jscript, false);
?>	