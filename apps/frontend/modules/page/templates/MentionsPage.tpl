<?php
	$response->getProperties()->set('univers', 'about_us');
	$response->getProperties()->set('page_title', 'Mentions légales');
	$response->getProperties()->set('page_description', 'Visiteurs du site internet Tyneo Consulting, nous vous invitons à consulter sur cette page les mentions légales.');
?>
<?php include_component('page', 'submenu_us', array()) ?>
<section class="page page_2c">
	<article class="mentions">
		<header>
			<h2>Mentions légales</h2>
		</header>
		
<h3 class="title">Editeur</h3>
<p>Ce site est édité par la société Tyneo Consulting, 12, rue des Bleuets 94600 Choisy Le Roi, France.<br/>
Tyneo Consulting est une société à responsabilité limitée au capital de 5 000,00 Euros - 788 450 393 RCS Créteil<br/>
Responsable de publication : Samuel Kauffmann</p>

<div class="small-separator"> </div>

<h3 class="title">Hébergeur</h3>
<p>Ce site est hébergé par la société OVH SAS, 2, rue Kellermann 59100 Roubaix, France.</p>

<div class="small-separator"> </div>

<h3 class="title">Droits d'auteurs</h3>
<p>Ce site respecte le droit d'auteur. Tous les droits des auteurs des Oeuvres protégées reproduites et communiquées sur ce site, sont réservés. Sauf autorisation, toute utilisation des Oeuvres autres que la reproduction et la consultation individuelles et privées sont interdites.</p>

<div class="small-separator"> </div>

<h3 class="title">Responsabilité</h3>
<p>Ce site fait référence à l'aide de liens hypertextes à d'autre site Internet. N'étant pas éditeur de ces dits sites, la société Tyneo Consulting ne peut être tenu pour responsable de la mise à disposition de ces sites et sources externes, et ne peut supporter la responsabilité quant aux contenus créés ou publiés sur ces sites tiers.</p>

<div class="small-separator"> </div>

<h3 class="title">Réserve de fiabilité et de garantie</h3>
<p>Bien que nous ayons pris grand soin dans la qualité et la fiabilité des informations contenues sur ce site, nous ne pourrions être tenu responsable des éventuels dommages causés par celles-ci.</p>
	</article>
</section>



<?php
//Affiche ou cache les blocs d'exemples de réalisations
$jscript = "
";
addJavascript($jscript, false);
?>