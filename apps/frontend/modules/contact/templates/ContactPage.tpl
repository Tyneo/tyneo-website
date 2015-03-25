<?php 
	$response->getProperties()->set('univers', 'about_us');
	$response->getProperties()->set('page_title', 'Contactez-nous');
	$response->getProperties()->set('page_description', "Vous désirez entrer en contact avec les équipes Tyneo Consulting pour discuter de nos expériences, de nos compétences ?");
	$response->getProperties()->set('page_keywords', 'tyneo, consulting, samuel, kauffmann, contact');
?>
<aside class="more">
	<?php include_component('page', 'submenu_us', array('aside' => false)) ?>
</aside>
<div class="page page_2c contact">
	<h2><?php __('title', array(), 'contact')?></h2>
<p><?php __('form.detail', array(), 'contact')?></p>

<form class="base_form contact_form" action="<?php urlFor('contact_sendmessage')?>" method="post" name="form">
	<div class="base_table">
		<div class="c1">
			<div class="row">
				<label for="a_name" >Nom & Prénom :</label>
				<div><input id="a_name" class="name" type="text" name="name" maxlength="50" value="" /></div>
			</div>
			<div class="row">
				<label for="a_mail"><?php __('form.mail', array(), 'contact')?> :</span>
				<div><input id="a_mail" class="email" type="text" name="mail" maxlength="50" value="" /></div>
			</div>
		</div>
		<div class="c2">
			<div class="row">
				<label for="a_company"><?php __('form.company', array(), 'contact')?> :</span>
				<div><input id="a_company" class="company" type="text" name="company" maxlength="50" value="" /></div>
			</div>
			<div class="row">
				<label for="a_tel"><?php __('form.tel', array(), 'contact')?> :</span>
				<div><input id="a_tel" class="tel" type="text" name="tel" maxlength="50" value="" /></div>
			</div>
		</div>
		<label for="a_message"><?php __('form.message', array(), 'contact')?> :</span>
		<div><textarea id="a_message" class="large" name="message"></textarea></div>
		
		<div style="margin-top:30px">
			<input type="submit" name="Submit" value="<?php __('form.submit', array(), 'contact')?>" class="base_btn" />
		</div>
	</div>
	
</form>

</div>

<?php
//Affiche ou cache les blocs d'exemples de réalisations
$jscript = "

";
addJavascript($jscript, false);
?>