<?php 
	$events = $response->getProperties()->get('events');
	$response->getProperties()->set('univers', 'about_us');
	$response->getProperties()->set('page_title', 'Nos évennements');
	$response->getProperties()->set('page_description', "");
	$response->getProperties()->set('page_keywords', ''); 
	
?>
<?php include_component('page', 'submenu_us', array()) ?>
<section class="page page_2c events">
	<h2>Nos évènements</h2>
	
	<?php foreach($events as $event): 
	$event_url = getUrl('event', array('id' => $event->getId()))			
	?>
	<article>
		<header>
			<h3><?php echo $event->getName(); ?></h3>
		</header>
		<div class="base_bloc left">
			<?php if($event->getPicture() != ""): ?>
			<figure>
				<img src="<?php  echo $configuration->get('base_url')."/img/".$event->getPicture() ?>"/>
			</figure>
			<?php endif; ?>
			<div class="green">Date : <?php echo $event->getDate(); ?></div>
			<div class="blue">Lieu : <?php echo $event->getLocation(); ?></div>
		</div>
		<p>
			<?php echo html_entity_decode($event->getShortDescription(), ENT_COMPAT, 'UTF-8') ?>
			<a href="<?php echo $event_url ?>">lire la suite...</a>
		</p>
	</article>
	<?php endforeach; ?>
</section>