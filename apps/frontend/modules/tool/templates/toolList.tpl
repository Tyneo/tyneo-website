<?php 
	$response->getProperties()->set('page_title', 'Logiciels de gestion des exigences');
	$response->getProperties()->set('page_description', "Tyneo Consulting vous propose une liste les principaux éditeurs et solutions de gestion des exigences présents sur le marché.");
	$response->getProperties()->set('page_keywords', 'outil, gestion, exigence, editeur, solution, comparatif, liste, tyneo, consulting');
	$response->getProperties()->set('univers', 'requirements');
	$response->getProperties()->set('page_picture', $configuration->get('base_url').'/img/intro-requirements.png');
	$response->getProperties()->set('page_resume', false);
	
addJavascript(array('libs/tableSort.js'));

$toolType = $response->getProperties()->get('tool_type');
$tools = $response->getProperties()->get('tools');
?>
<section class="page caliber">
	<article class="">
		<header>
			<h2>Logiciels de gestion des exigences</h2>
		</header>
		<p>
			Le tableau suivant liste les principaux éditeurs et solutions de gestion des exigences présents sur le marché.
			
		</p>
		<table class="base_list sortable-onload-0-1 rowstyle-alt colstyle-alt arrow">
			<thead>
			<tr>
				<th class="sortable">Editeur</th>
				<th class="sortable">Logiciel</th>
				<th class="sortable-numeric">Version</th>
				<!--<th class="sortable">Commentaire</th>-->
			</tr>
			</thead>
			<tbody>
				<?php foreach($tools as $tool): 
					$tool_url = getUrl('tool', array('type' => $toolType, 'slug' => $tool->getSlug()))			
				?>
				<tr>
					<td><a href="<?php echo $tool_url ?>"><?php echo $tool->getEditorName() ?></a></td>
					<td><a href="<?php echo $tool_url ?>"><?php echo $tool->getName() ?></a></td>
					<td><a href="<?php echo $tool_url ?>"><?php echo $tool->getVersion() ?></a></td>
					<!--<td><a href="<?php echo $tool_url ?>"><?php echo $tool->getEditorSite() ?></a></td>-->
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<footer>
			<h3 class="title">Sur le même sujet...</h3>
			<ul class="table-list">
				<li>En savoir plus sur <a href="<?php urlFor('requirements')?>">notre offre Outils de gestion des Exigences</a></li>
			</ul>
		</footer>
	</article>
</section>