<?php 
	$response->getProperties()->set('page_title', 'Intégration des solutions Planisware');
	$response->getProperties()->set('page_description', "Consultants experts Planisware (Planisware 5) et OPX2, nous vous accompagnons tout au long de vos projets d'intégration et d'évolutions.");
	$response->getProperties()->set('page_keywords', 'Planisware, Planisware 5, Planisware 6, OPX2, p6, P5, intégrateur, formation, gestion, consultant');

	$response->getProperties()->set('page_resume', "Notre cabinet de conseil s'est spécialisé sur les solutions de gestion de projets et de portefeuilles projets autour du produit Planisware. Notre approche s’appuie sur l’expertise technique, fonctionnelle et métier de nos consultants multidisciplinaires qui peuvent intervenir dans les différentes phases de vos projets. ");
	
	$response->getProperties()->set('page_picture',  $configuration->get('base_url').'/img/intro-projects.png');
	$response->getProperties()->set('page_resume', false);
?>
<section class="resume opx2">
	<article class="integration">
		<header>
			<h2><?php  __('integration.title', array(), 'projects')?></h2>
		</header>
		<img src="<?php  echo $configuration->get('base_url');?>/img/integration.png" style="float:left; margin-right:20px"/>
		<p class="h2">
			<?php  __('integration.detail', array('%about_planisware' => getUrl('about_planisware')), 'projects')?>
		</p>
		<ul class="subarticle">
			<li>
				<h3><?php  __('integration.parametrage.title', array(), 'projects')?></h3>
				<p><?php  __('integration.parametrage.detail', array('%about_planisware' => getUrl('about_planisware')), 'projects')?></p>
				
				<a class="detail"><?php  __('some.examples', array(), 'projects')?></a>
				<ul class="detail">
					<li>Un tableau de bord à destination des gouvernances locales permettant d’observer les anomalies de planification liées aux adhérences des projets.</li>
					<li>Une interface avec un outil gérant la disponibilité des bancs de tests en fonction de la
					roadmap des projets. (Traitement de nuits OPX2, fichiers d’export)</li>
					<li>Un prototype pour gérer des versions des plannings de projets OPX2.</li>
					<li>Un traitement de planification automatique des projets en fonction de règles de gestion.</li>
					<li>L’authentification automatique à l’Intranet Server et TimeCard basée sur l’annuaire LDAP de
					l’entreprise.</li>
					<li>Un outil de gouvernance sur Intranet Server délocalisé sur une machine secondaire afin de ne pas impacter les performances de l’instance principale.</li>
				</ul>
			</li>
			<li>
				<h3><?php  __('integration.specifique.title', array(), 'projects')?></h3>
				<p><?php  __('integration.specifique.detail', array('%about_planisware' => getUrl('about_planisware')), 'projects')?></p>
				<a class="detail"><?php  __('some.examples', array(), 'projects')?></a>
				<ul class="detail">
					<li>Une application intranet permettant de créer et consulter des projets, des tâches et faire des
					affectations en utilisant les dernières technologies web 2.0 (.NET, Ajax, WebServices OPX2,
					SQL)</li>
					<li>Un document Word permettant de réaliser des devis de contrat en fonction des montants
					budgétés sur un projet (VBA , WebServices OPX2)</li>
					<li>Un reporting Excel permettant de visualiser les personnes n’ayant pas imputé leurs activités de la semaine (JAVA, SQL)</li>
				</ul>
			</li>
		</ul>
	</article>
	<aside class="infobox green">
		<h3 class="title">Un engagement durable</h3>
<p>Nos consultants s’efforcent à proposer les solutions les plus standards afin de s’assurer de la maintenabilité évolutive de l’application Planisware ainsi que de la standardisation des méthodes de travail. 
Pour cela, nous nous appuyons sur les recommandations officielles de l’éditeur publiées dans son livre blanc « Best Practices for Planisware 5 » ainsi que des bonnes pratiques internes construites par le biais des expériences passées de nos consultants.
Si l’une de nos propositions devait s’écartée du standard de l’éditeur, nous saurions la justifier et démontrer que nous avons étudié l’ensemble des pistes se rapprochant le plus du standard Planisware.</p>
	</aside>
	<div class="separator"> </div>
	<article class="exploitation">
		<header>
			<h2><?php  __('maintenance.title', array(), 'projects')?></h2>
		</header>
		<p>
			<img src="<?php  echo $configuration->get('base_url');?>/img/exploitation.png" style="float:left; margin-right:20px"/>
			<?php  __('maintenance.detail', array('%about_planisware' => getUrl('about_planisware')), 'projects')?>
		</p>
		<a class="detail"><?php  __('some.examples', array(), 'projects')?></a>
		<ul class="detail">
			<li>Support utilisateur niveau 1 sur l’outil de planification de l’entreprise</li>
			<li>Mise en place et rédaction de procédures de maintenance et d’exploitation de l’outil</li>
			<li>Automatisation de tâches de support</li>
			<li>Optimisation des performances de l’application Intranet Server</li>
			<li>Proprification des données de l’application (résolution de messages d’erreur et d’anomalies du
			référentiel)</li>
			<li>Extractions ponctuelles de données depuis l'outil OPX2 ou en base.</li>
			<li>Analyse et correction d’erreurs OPX2</li>
		</ul>
	</article>
	<div class="separator"> </div>
	<article class="formation">
		<header>
			<h2><?php  __('formation.title', array(), 'projects')?></h2>
		</header>
		<p>
			<img src="<?php  echo $configuration->get('base_url');?>/img/formation.png" style="float:left; margin-right:20px"/>
			<?php  __('formation.detail', array(), 'projects')?>
		</p>
		<a class="detail"><?php  __('some.examples', array(), 'projects')?></a>
		<ul class="detail">
			<li>Rédaction de support de formation liées aux processus de l’entreprise à l’outil</li>
			<li>Formations spécifiques au métier de chaque type d'utilisateur (gestionnaires de ressources, chefs
			de projets et directeurs de programmes)</li>
			<li>Elaboration de manuels ou d’aide utilisateur en ligne</li>
		</ul>
	</article>
	
	<div class="clear"> </div>

	<aside class="bloc">
		<h2 class="title">Nos formations Planisware</h2>
		<?php include_component('training', 'showTrainings', array('category' => 'Gestion de projets')) ?>
	</aside>

	<aside class="bloc">
		<h2 class="title">Nos ressources complémentaires</h2>
		<ul class="pictos">
			<li>
				<img src="/img/newspaper.png" alt="Blog Tyneo"/>
				<h3>Le blog Tyneo</h3>
				<p>Sur le blog Tyneo, nos consultants publient régulièrement leurs <a href="<?php echo $configuration->get('link_blog', ''); ?>">astuces Planisware</a>.</p>
			</li>
			<li>
				<img src="/img/chrome.png" alt="PlaniSphere pour Chrome"/>
				<h3>PlaniSphere Links</h3>
				<p>Télécharger gratuitement notre <a href="http://lab.tyneo.net/planisphere/links/">plugin Planisware pour Chrome</a>.</p>
			</li>
		</ul>
	</aside>
</section>

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