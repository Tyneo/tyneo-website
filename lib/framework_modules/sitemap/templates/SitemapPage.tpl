<?php 
	$response->getProperties()->set('page_title', 'Plan du site');
?>
<section class="page">
	<article class="sitemap">
		<header>
			<h2>Plan du site</h2>
		</header>
		<p>Retrouvez ci-dessous l'essentiel des pages du site.</p>
		

		<ol>
			<li><a href="<?php urlFor('projects')?>">Gestion de projets</a></li>
			<li><a href="<?php urlFor('requirements')?>">Gestion des exigences</a></li>
			<li><a href="<?php urlFor('contact')?>">Contactez-moi</a></li>
		</ol>
	</article>
</section>

<?php
//Affiche ou cache les blocs d'exemples de réalisations
$jscript = "
";
addJavascript($jscript, false);
?>