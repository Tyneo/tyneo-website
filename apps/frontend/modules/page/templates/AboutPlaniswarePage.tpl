<?php 
	$response->getProperties()->set('page_description', "Planisware 5 est une solution de gestion de projets (EPM) et de portefeuille de projets (PPM) couvrant l’intégralité du cycle de vie des projets.");
	$response->getProperties()->set('page_keywords', 'Planisware, Planisware 5, Planisware 6, OPX2, p6, P5, EPM, PPM, outil, projet, gestion');
	$response->getProperties()->set('page_title', 'A propos de Planisware');
	$response->getProperties()->set('univers', 'projects');
	$response->getProperties()->set('page_picture', $configuration->get('base_url').'/img/intro-projects.png');
	$response->getProperties()->set('page_resume', false);
?>

<section class="page planisware">
	<article class="">
		<header>
			<h2>A propos de Planisware</h2>
		</header>
		<p>Planisware, anciennement OPX2, est une solution de gestion de projets (EPM) et de portefeuille de projets (PPM)</p>
		<p>Ce logiciel d’entreprise peut être implémenté au sein de grandes organisations de part sa capacité à manipuler un nombre très important de projets et d’utilisateurs (plusieurs dizaines de milliers d'utilisateurs).</p>
		<p>Les différents modules de l’application permettent de gérer au sein de Planisware une vision à court et long terme des différentes activités de l'entreprise :
			<ul>
				<li><a href="http://fr.planisware.com/gestion-de-portefeuille-projets" alt="Description de la vision portefeuille sur le site Planisware">La vision portefeuille</a> permet ainsi de suivre de manière macroscopique les projets de l’entreprise, les éventuels problèmes d'adhérence et de prévoir et d’adapter la capacité à faire de chaque département.</li>
				<li><a href="http://fr.planisware.com/gestion-de-projets alt="Description de la vision projet sur le site Planisware"">La vision opérationnelle</a> proposée par Planisware permet d’accompagner les acteurs au quotidien tant sur les aspects projets (coûts, planning, ressources, workflow, etc...) que dans la gestion de l’entreprise (produit, facturation, collaborateurs, etc...).</li>
			</ul></p>
		<p>Tyneo Consulting <a href="<?php urlFor('projects')?>" alt="Notre offre de service Planisware">accompagne ses clients</a> dans la mise en place et le maintient opérationnel de Planisware. 
			Grâce aux incroyables possibilités de Planisware en terme de paramétrage et de développement, les consultants Tyneo adaptent l'outil à vos besoins dans une démarche durable*.</p>

		<p>Liste non exhaustive des modules de l’application Planisware 5 :
			<ul>
				<li>Projets</li>
				<li>Lots de travaux</li>
				<li>Ressources</li>
				<li>Produits</li>
				<li>Idées</li>
				<li>Opportunités</li>
				<li>Portefeuille</li>
				<li>Simulations</li>
				<li>Collaborateurs</li>
				<li>Facturation</li>
				<li>Planisware Explorer</li>
				<li>Présentations</li>
			</ul></p>

		<p><i>Notre démarche durable* : Nous nous engageons à vous proposer les meilleurs solutions respectant les bonnes pratiques misent en place par Planisware, 
			garantissant ainsi l'évolution de votre implémentation au fur et à mesure de nouvelles versions du produit.</i></p></p>

		<figure>
			<a href="http://www.planisware.com"><img src="<?php  echo $configuration->get('base_url');?>/img/ext/planisware.png"/></a>
		</figure>
		<p>
			<dl class="table-display">
				<dt>Editeur</dt>
				<dd>Planisware</dd>
			
				<dt>Dernière version</dt>
				<dd>Planisware 5 (anciennement OPX2)</dd>
				
				
				<dt>Environnement</dt>
				<dd>Microsoft Windows, Linux 64 bits</dd>
				
				<dt>Type</dt>
				<dd>Logiciels de gestion de projets</dd>
			
				<dt>Licence</dt>
				<dd>Propriétaire</dd>
			
				<dt>Site web</dt>
				<dd><a href="http://www.planisware.com">Site de Planisware</a></dd>
			</dl>
		</p>
		<footer>
			<a href="http://fr.planisware.com/article.php?docid=12420">En savoir plus sur Planisware...</a>
		</footer>
	</article>
</section>