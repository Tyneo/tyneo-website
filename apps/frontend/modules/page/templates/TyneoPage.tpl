<?php 
	$response->getProperties()->set('page_title', 'Qui sommes-nous ?');
	$response->getProperties()->set('page_description', "Découvrez qui nous sommes, notre histoire, notre philosophie, nos références clients");
	$response->getProperties()->set('page_keywords', 'tyneo consulting, tyneo');
?>
<?php include_component('page', 'submenu_us', array()) ?>
<section class="page page_2c whoweare">
	<article class="integration">
		<header>
			<h2>Qui sommes-nous ?</h2>
		</header>
		<p class="h2">Tyneo Consulting est une société de conseil axée principalement sur la mise en place d’outils de <a href="<?php urlFor('projects')?>">gestion de projets</a> et de  <a href="<?php urlFor('requirements')?>">gestion des exigences</a>.</p>

<p>Nous sommes profondément attachés aux technologies de l'information, mais notre passion est l'amélioration des processus de nos clients. En collaboration avec nos partenaires clients et fournisseurs, nous mettons en œuvre des solutions adaptées et paramétrées selon les besoins des organisations dans une démarche durable.</p>

<p>Notre culture est fondée sur trois valeurs essentielles qui caractérisent tout ce que nous faisons : <span class="blue">L’esprit d'équipe</span>, <span class="red">l’innovation</span> et <span class="green">une démarche durable</span>.</p>
<div class="small-separator"> </div>
<h3 class="blue">Notre esprit d'équipe</h3>
<p>Nous aimons collaborer avec enthousiaste avec tous nos partenaires, qu’ils soient collaborateurs, clients ou fournisseurs. Notre objectif est de réussir les défis qui nous sont proposés et pour cela, il nous parait essentiel d’avancer, ensemble, et dans la même direction.</p>
<div class="small-separator"> </div>
<h3 class="red">L’innovation</h3>
<p>Du Conseil mais pas que. Tyneo Consulting n’est pas qu’un simple cabinet de conseil. Au-delà de notre offre de Conseil, nous aimons partager notre savoir, créer et innover, c’est pour cela que dès les origines de la société nous avons créé <a href="<?php urlFor('trainings')?>">notre centre de formation</a> et développé <a href="<?php echo $configuration->get('link_lab', ''); ?>">notre lab'tech</a> pour étudier, tester et lancer des produits innovants.</p>
<div class="small-separator"> </div>
<h3 class="green">Une démarche durable</h3>
<p>Nous nous engageons à proposer les meilleures solutions, en respectant les bonnes pratiques, dans une optique durable. Ce que nous faisons aujourd’hui, nous souhaitons qu’il puisse évoluer demain, qu’il soit compréhensible et maintenable par d’autres au besoin.</p>
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