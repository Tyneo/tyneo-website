<?php 
	$response->getProperties()->set('page_title', 'Gestion des exigences');
	$response->getProperties()->set('page_description', 'Intégrateurs de différentes solutions logicielles (Caliber, Doors, Polarion...), Tyneo Consulting vous assiste et conseille tout au long de vos projets d’ingénierie des exigences.');
	$response->getProperties()->set('page_keywords', 'intégrateur, borland, caliber, doors, polarion, reqtify, exigence, requirement');

	$response->getProperties()->set('page_resume', "Vous souhaitez mettre en place un outil de gestion des exigences ? Nous intervenons à vos côtés tout au long de votre projet pour sélectionner l’outil le plus adapté, pour l’intégrer à votre SI et pour le déployer. Une fois votre projet mis en œuvre, nous vous aidons à assurer la maintenance et l’exploitation de la solution sélectionnée."); 
	
	$response->getProperties()->set('page_picture', $configuration->get('base_url').'/img/intro-requirements.png');
	$response->getProperties()->set('page_resume', false);
?>
<section class="resume caliber">
	<article class="intro">
		<header>
			<h2><?php __('title', array(), 'requirements')?></h2>
		</header>
		<p>
			<?php  __('detail', 
				array(
					'%about_caliber' => getUrl('tool', array('type' => 'requirement', 'slug' => 'caliber')),
					'%about_doors' => getUrl('tool', array('type' => 'requirement', 'slug' => 'doors')),
					'%about_polarion' => getUrl('tool', array('type' => 'requirement', 'slug' => 'polarion'))
				),
				'requirements')?>
		</p>
	</article>
	
	<div class="row">
		<article class="service integration">
			<header>
				<h2><?php __('integration.title', array(), 'requirements')?></h2>
			</header>
			<p>
				<?php __('integration.detail', array('%about_caliber' => getUrl('about_caliber')), 'requirements')?>
			</p>
			<a class="detail"><?php __('some.examples', array(), 'requirements')?></a>
			<ul class="detail">
				<li>Rédaction de spécifications techniques</li>
				<li>Paramétrage du progiciel (types d'exigences, profils de sécurité...)</li>
			</ul>
		</article>
		<article class="service developpment">
			<header>
				<h2><?php __('developpment.title', array(), 'requirements')?></h2>
			</header>
			<p>
				<?php __('developpment.detail', array('%about_caliber' => getUrl('about_caliber')), 'requirements')?>
			</p>
			<a class="detail"><?php __('some.examples', array(), 'requirements')?></a>
			<ul class="detail">
				<li>Développement d'un remplacant à Document Factory plus rapide et plus simple (JAVA/Velocity)</li>
				<li>Mise en place d'une interface Quality Center spécifiques (.NET)</li>
				<li>Réalisation d'un système de versions en parallèles permettant la comparaison et la synchronisation d'exigences (JAVA)</li>
				<li>Conception d'un portail de demande de droits d'accès (PHP/JAVA)</li>
			</ul>
		</article>
	</div>
	<div class="row">
		<article class="service deployment">
			<header>
				<h2><?php __('deployment.title', array(), 'requirements')?></h2>
			</header>
			<p>
				<?php __('deployment.detail', array(), 'requirements')?>
			</p>
			<a class="detail"><?php __('some.examples', array(), 'requirements')?></a>
			<ul class="detail">
				<li>Réalisation de teaser, présentations, communications pour faire adhérer les nouveaux utilisateurs</li>
				<li>Rédaction de documentations adaptées à l'utilisation de l'outil dans le cadre des processus de l'entreprise</li>
				<li>Conception de packages pour déploiement industrialisé (VBS ou APP-V)</li>
			</ul>
		</article>
		<article class="service formation">
			<header>
				<h2><?php __('formation.title', array(), 'requirements')?></h2>
			</header>
			<p>
				<?php __('formation.detail', array('%about_caliber' => getUrl('about_caliber')), 'requirements')?>
			</p>
			<a class="detail"><?php __('some.examples', array(), 'requirements')?></a>
			<ul class="detail">
				<li>Rédaction de documentations adaptées à l'utilisation de l'outil dans le cadre des processus de l'entreprise</li>
				<li>Formation utilisateurs, support N1 et administrateurs</li>
				<li>Coaching individualisé</li>
			</ul>
		</article>
	</div>
	<div class="clear"> </div>
	
	<aside class="bloc">
		<h2 class="title">Nos formations sur la gestion des exigences</h2>
		<?php include_component('training', 'showTrainings', array('category' => 'Gestion des exigences')) ?>
	</aside>
	
	<aside class="bloc">
		<h2 class="title">Nos ressources complémentaires</h2>
		<ul class="pictos">
			<li>
				<img src="/img/monitor.png" alt="Outils de gestion des exigences"/>
				<h3>Les outils</h3>
				<p>Découvrez notre <a href="<?php urlFor('tools', array('type' => 'requirement')) ?>">sélection des outils de gestion</a> des exigences du marché.</p>
			</li>
			<li>
				<img src="/img/newspaper.png" alt="Blog Tyneo"/>
				<h3>Le blog Tyneo</h3>
				<p>Nous traitons aussi des outils de gestion des exigences sur notre <a href="<?php echo $configuration->get('link_blog', ''); ?>">blog Tyneo</a>.</p>
			</li>
		</ul>
	</aside>
</section>
<div class="clear"> </div>
<?php
//Affiche ou cache les blocs d'exemples de réalisations
$jscript = "
	$('a.detail').click(function() {
		$(this).next().toggle();
		
		if($(this).next().is(':visible')) $(this).addClass('active');
		else  $(this).removeClass('active');
	});
";
addJavascript($jscript, false);
?>