<?php 
	$response->getProperties()->set('page_title', 'Contactez-nous');
?>
<div class="page contact">
	<h2><?php __('title', array(), 'contact')?></h2>
	<?php if($response->getProperties()->getBoolean('mail_success')): ?>
	
	<p>Votre message nous a bien été transmis. Merci.</p>
	<?php else: ?>
	<p>Oupss, nous sommes un peu gênés mais une erreur n'a pas permis de nous transmettre votre message.</p>
	<?php endif;?>
	<br/><br/>
</div>

