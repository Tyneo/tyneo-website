<?php 
	$event = $response->getProperties()->get('event');
	$response->getProperties()->set('univers', 'about_us');
	$response->getProperties()->set('page_title', $event->getName());
	$response->getProperties()->set('page_description', "");
	$response->getProperties()->set('page_keywords', ''); 
	
?>
<?php include_component('page', 'submenu_us', array()) ?>
<section class="page page_2c event">
	<article class="">
		<header>
			<h2>Evènements: <?php echo $event->getName(); ?></h2>
		</header>
		<p><?php echo html_entity_decode($event->getDescription(), ENT_COMPAT, 'UTF-8') ?></p>
		<?php if($event->getPicture() != ""): ?>
		<aside class="more">
			<div class="green">Date : <?php echo $event->getDate(); ?></div>
			<div class="blue">Lieu : <?php echo $event->getLocation(); ?></div>
		</aside>
		<figure>
			<img src="<?php  echo $configuration->get('base_url')."/img/".$event->getPicture() ?>"/>
		</figure>
		
		<?php if($context->getSecurityManager()->isAuthenticated()): ?>
			<a href="<?php urlFor('event_update', array('id' => $event->getId())) ?>">Editer cet évènements</a>	
		<?php endif; ?>
		
		<?php endif; ?>
	</article>
</section>