<?php 
	$response->getProperties()->set('page_title', 'Contactez-nous');
	$response->getProperties()->set('page_description', "Vous désirez entrer en contact avec les équipes Tyneo Consulting pour discuter de nos expériences, de nos compétences ?");
	$response->getProperties()->set('page_keywords', 'tyneo, consulting, samuel, kauffmann, contact');
?>
<div class="contact">
	<h2><?php __('title', array(), 'contact')?></h2>


<div class="contact_form">
<p><?php __('form.detail', array(), 'contact')?></p>
<form action="<?php urlFor('contact_sendmessage')?>" method="post" name="form">
	<dl>
		<dt><?php __('form.name', array(), 'contact')?> :</dt>
		<dd>
			<input class="name" type="text" name="name" size="30" maxlength="50" value="" />
		</dd>
		<dt><?php __('form.mail', array(), 'contact')?> :</dt>
		<dd>
			<input class="mail" type="text" name="mail" size="30" maxlength="50" value="" />
		</dd>
		<dt><?php __('form.company', array(), 'contact')?> :</dt>
		<dd>
			<input class="company" type="text" name="company" size="30" maxlength="50" value="" />
		</dd>
		<dt><?php __('form.tel', array(), 'contact')?> :</dt>
		<dd>
			<input class="tel" type="text" name="tel" size="30" maxlength="50" value="" />
		</dd>
		<dt><?php __('form.message', array(), 'contact')?> :</dt>
		<dd><textarea class="message" name="message" cols="35" rows="8" ></textarea></dd>
		<dd>
			<!-- <input type="checkbox" name="ccme" value="1" /> <?php __('form.send_copy', array(), 'contact')?> -->
			<input type="submit" name="Submit" value="<?php __('form.submit', array(), 'contact')?>" style="display: block; margin-top: 15px;" />
		</dd>
	</dl>
</form>

</div>

</div>

<?php
//Affiche ou cache les blocs d'exemples de réalisations
$jscript = "

";
addJavascript($jscript, false);
?>