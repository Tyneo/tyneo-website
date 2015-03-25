<?php 
	$response->getProperties()->set('page_title', 'Plan du site');
	$response->getProperties()->set('page_description', 'Perdu sur le site Tyneo Consulting ? Pas de panique, ici nous listons l\'ensemble des pages accessibles sur notre site.');
	$response->getProperties()->set('page_keywords', 'tyneo consulting, plan du site');

	$response->getProperties()->set('page_resume', "Perdu sur le site Tyneo Consulting ? Pas de panique... Nous avons listé ici l'ensemble des pages accessibles sur notre site. Si malgré tout, vous ne trouver pas ce que vous cherchez, n'hésitez pas à nous contacter.");
?>
<section class="page page_2c">
	<article class="sitemap">
		<header>
			<h2>Plan du site</h2>
		</header>
		<p>Retrouvez ci-dessous l'essentiel des pages du site.</p>
		

		<ol>
			<li><a href="<?php urlFor('projects')?>">Gestion de projets</a>
				<ul>
					<li><a href="<?php urlFor('about_planisware')?>">A propos de Planisware</a></li>
					<li><a href="http://lab.tyneo.net/planisphere/links/">PlaniSphere pour Chrome</a>
					<?php include_component('training', 'showSitemap', array('category' => 'Gestion de projets', 'without-ul' => true)) ?>
				</ul>
			</li>
			<li><a href="<?php urlFor('requirements')?>">Gestion des exigences</a>
				<ul>
					<li><a href="<?php urlFor('tools', array('type' => 'requirement'))?>">Comparatif des outils de gestion des exigences</a>
					<?php include_component('training', 'showSitemap', array('category' => 'Gestion des exigences', 'without-ul' => true)) ?>
				</ul>
			</li>
			<li><a href="<?php urlFor('trainings')?>">Catalogue des formations</a>
				<ul>
						<li><a href="<?php urlFor('tools', array('type' => 'taining_contact'))?>">Devis formations</a>
						<?php include_component('training', 'showSitemap', array('category' => 'Gestion de projets', 'without-ul' => true)) ?>
						<?php include_component('training', 'showSitemap', array('category' => 'Gestion des exigences', 'without-ul' => true)) ?>
				</ul>
			</li>
			<li><a href="<?php urlFor('about_us')?>">A propos de Tyneo Consulting</a>
				<ul>
					<li><a href="<?php urlFor('publications')?>">Nos publications</a></li>
					<li><a href="<?php urlFor('mentions')?>">Mentions légales</a></li>
					<li><a href="<?php urlFor('contact')?>">Contactez-nous</a></li>
				</ul>
			</li>
		</ol>
		
		<p>En supplément des pages de ce site, le <a href="<?php echo $configuration->get('link_blog', ''); ?>">blog Tyneo Consulting</a> traite au travers de ses billets, des problématiques outils ou d’ordre fonctionnelles rencontrées par les consultants de la société ainsi que de l'actualité de notre secteur.</p>
	</article>
</section>

<?php
$jscript = "
";
addJavascript($jscript, false);
?>	