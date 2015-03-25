<?php
$training = $response->getProperties()->get('training');
$response->getProperties()->set('page_title', 'Formation : '.$training->getName());
$response->getProperties()->set('page_keywords', 'formation, tyneo, assistance, planisware, caliber, opx2, script, borland');
$response->getProperties()->set('page_description', 'Tyneo Consulting vous propose des programmes de formation adaptés autour des outils de gestion des exigences et de gestion de projets');
?>
<section class="page training">
	<article class="">
		<header>
			<h2><?php __('title', array('%name%' => $training->getName()), 'training') ?></h2>
		</header>

<aside class="more">
<div class="duration">
Durée : <?php echo __transChoice('duration.days_short', $training->getDuration(), array('%quantity%' => $training->getDuration()), 'training') ?><br/>
Effectif : 2  à 7 stagiaires<br/>
</div>

<div class="price">
Référence : <?php echo $training->getSlug() ?>
<!--<br/>
 Tarif : XXXXE HT -->
</div>

<div class="quote">
Cette formation vous intéresse ? <br/><a href="<?php urlFor('contact')?>">Recevez votre devis personnalisé</a>.
</div>
<!--
<div class="contact">
<a href="tel:<?php  echo $configuration->get('tel_contact_dir');?>"><?php  echo $configuration->get('tel_contact');?></a>
</div>
-->
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