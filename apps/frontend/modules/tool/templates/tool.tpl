<?php 
	$tool = $response->getProperties()->get('tool');
	$response->getProperties()->set('page_title', 'A propos de '.$tool->getEditorName().' '.$tool->getName());
	$response->getProperties()->set('page_description', $tool->getDescription());
	$response->getProperties()->set('page_keywords', 'outil, gestion, exigence,'.$tool->getEditorName().','.$tool->getVersion().','.$tool->getEditorName());
	$response->getProperties()->set('univers', 'requirements');
	$response->getProperties()->set('page_picture', $configuration->get('base_url').'/img/intro-requirements.png');
	$response->getProperties()->set('page_resume', false);
?>
<section class="page tool">
	<article class="">
		<header>
			<h2>A propos de <?php echo $tool->getName() ?></h2>
		</header>
		<p><?php echo html_entity_decode($tool->getDescription(), ENT_COMPAT, 'UTF-8') ?></p>

		<?php if($tool->getImg() != ""): ?>
		<figure>
			<img src="<?php  echo $configuration->get('base_url');?><?php echo $tool->getImg() ?>"/>
		</figure>
		<?php endif ?>
		
		<p>
			<dl class="table-display">
				<dt>Editeur</dt>
				<dd><?php echo $tool->getEditorName() ?>&nbsp;</dd>
			
				<dt>Dernière version</dt>
				<dd><?php echo $tool->getName() ?> <?php echo $tool->getVersion() ?>&nbsp;</dd>
				
				
				<dt>Environnement</dt>
				<dd><?php echo $tool->getEnvironment() ?>&nbsp;</dd>
				
				<dt>Type</dt>
				<dd><?php echo $tool->getToolTypeName() ?>&nbsp;</dd>
			
				<dt>Licence</dt>
				<dd><?php echo $tool->getLicense() ?>&nbsp;</dd>
			
				<dt>Site web</dt>
				<dd>
					<?php if($tool->getEditorSite() == ""):?>
					Site non communiqué
					<?php else: ?>
					<a href="<?php echo $tool->getEditorSite() ?>">Site de <?php echo $tool->getEditorName() ?></a>
					<?php endif; ?>
				</dd>
			</dl>
		</p>
		<?php if($tool->getEditorDescription() != ""): ?>
		<div class="clear"> </div>
		
		<aside class="bloc">
			<h3>A propos de la société <?php echo $tool->getEditorName() ?></h3> 
			<p><?php echo html_entity_decode($tool->getEditorDescription(), ENT_COMPAT, 'UTF-8') ?></p>
		</aside>
		<?php endif; ?>
		<footer>
			<h3 class="title">Sur le même sujet...</h3>
			<ul class="table-list">
				<li>En savoir plus sur <a href="<?php urlFor('requirements')?>">notre offre Outils de gestion des Exigences</a></li>
				<li>Retrouvez notre <a href="<?php urlFor('tools', array('type' => 'requirement')) ?>">récapitulatif gratuit des outils de gestion des exigences</a> du marché</li>
			</ul>
		</footer>
	</article>
</section>