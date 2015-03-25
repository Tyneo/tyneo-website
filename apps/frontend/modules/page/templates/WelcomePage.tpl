<!-- En résumé -->
<section id="brief" class="services">
	<article class="rosy">
		<header>
			<h3><?php __('brief.projects.title', array(), 'welcome')?></h3>
		</header>
		<figure>
			<img src="<?php  echo $configuration->get('base_url');?>/img/ico-project.png" alt="<?php __('brief.projects.figcaption', array(), 'welcome')?>" />
			<figcaption><?php __('brief.projects.figcaption', array(), 'welcome')?></figcaption>
		</figure>
		<p>
			<?php __('brief.projects.detail', array('%about_planisware' => getUrl('about_planisware')), 'welcome')?>
		</p>
		<footer>
			<a class="" href="<?php urlFor('projects')?>"><?php __('brief.more', array(), 'welcome')?></a>
		</footer>
	</article>
	<article class="green">
		<header>
			<h3><?php __('brief.requirements.title', array(), 'welcome')?></h3>
		</header>
		
		<figure>
			<img src="<?php  echo $configuration->get('base_url');?>/img/ico-exigence.png" alt="<?php __('brief.requirements.figcaption', array(), 'welcome')?>" />
			<figcaption><?php __('brief.requirements.figcaption', array(), 'welcome')?></figcaption>
		</figure>
		<p>
			<?php __('brief.requirements.detail', array('%about_caliber' => getUrl('about_caliber')), 'welcome')?>
		</p>
		<footer>
			<a class="" href="<?php urlFor('requirements')?>"><?php __('brief.more', array(), 'welcome')?></a>
		</footer>
	</article>
</section>
<div class="clear"> </div>

<?php include_component('blog', 'showBlogMessages', array()) ?>

<?php 
	//include_widget('newsletter_register')
	include_widget('event')
?>
<div class="clear"> </div>