<?php 
	$response->getProperties()->set('page_title', 'Qui sommes-nous ?');
	$response->getProperties()->set('page_description', "Découvrez qui nous sommes, notre histoire, notre philosophie, nos références clients");
	$response->getProperties()->set('page_keywords', 'tyneo consulting, tyneo');
	$response->getProperties()->set('univers', 'about_us');
?>
<?php include_component('page', 'submenu_us', array()) ?>
<section class="page page_2c whoweare">
	<article class="integration">
		<header>
			<h2>Partenaires</h2>
		</header>
		<p class="h2">Parce qu'une société ne peut pas exister seule, nous avons mis en place une relation de confiance avec ces entreprises et organisations.</p>

		<h3 class="green">Gestion de projets</h3>
		<article class="mini-row">
			<header>
				<figure>
					<img src="<?php  echo $configuration->get('base_url');?>/img/ext/planisware-partner.png"/>
				</figure>
			</header>
			<p>Acteur incontournable du monde informatique, tant sur les applications bureautique, métier et outils de développement.</p>
			<footer>
				<a href="http://www.planisware.com">En savoir plus sur les offres de Planisware</a>
			</footer>
		</article>
		
		<div class="small-separator"> </div>
		<h3 class="red">Gestions des exigences</h3>
		<article class="mini-row">
			<header>
				<figure>
					<img src="<?php  echo $configuration->get('base_url');?>/img/ext/microfocus-partner.jpg"/>
				</figure>
			</header>
			<p>Acteur incontournable du monde informatique, tant sur les applications bureautique, métier et outils de développement.</p>
			<footer>
				<a href="http://www.microfocus.com">En savoir plus sur les offres de Microfocus</a>
			</footer>
		</article>
				
		<div class="small-separator"> </div>
		<h3 class="blue">Nos autres partenaires</h3>
		<article class="mini-row">
			<header>
				<figure>
					<img src="<?php  echo $configuration->get('base_url');?>/img/ext/microsoft.jpg"/>
				</figure>
			</header>
			<p>Acteur incontournable du monde informatique, tant sur les applications bureautique, métier et outils de développement.</p>
			<footer>
				<a href="http://www.microsoft.com">En savoir plus sur les offres de Microsoft</a>
			</footer>
		</article>
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