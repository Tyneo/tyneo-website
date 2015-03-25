<?php 
	$trainings = $response->getProperties()->get('trainings');
	$response->getProperties()->set('univers', 'trainings');
	$response->getProperties()->set('page_title', 'Demande de devis / Formation');
	$response->getProperties()->set('page_description', "Vous souhaitez obtenir un devis pour l’une de nos formations ? Contactez nous directement par téléphone ou à travers ce formulaire.");
	$response->getProperties()->set('page_keywords', 'formation, tyneo, devis');
?>
<aside class="more">
	<?php include_component('training', 'submenu', array('aside' => false)) ?>
	<ul class="green">
		<li>Tél: <?php  echo $configuration->get('tel_contact');?></li>
		<li>Fax: <?php  echo $configuration->get('fax_number_contact');?></li>
	</ul>
	<ul class="blue">
		<li class="mail"><a href="mailto:contact@tyneo.net">Mail: contact@tyneo.net</a></li>
	</ul>
	<ul class="red">
		<li>Tyneo Consulting</li>
		<li>12, rue des Bleuets</li>
		<li>94600 Choisy Le Roi</li>
	</ul>
</aside>

<div class="page page_2c">
	<h2>Demande de devis / Formation</h2>

<div class="contact_form">
<p>Vous souhaitez obtenir un devis pour l’une de nos formations ? 
Contactez nous directement par téléphone ou à travers ce formulaire.
</p>
<form  class="base_form contact_form" action="<?php urlFor('training_contact_sendmessage')?>" method="post" name="form">
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
			<div class="row">
				<label for="a_ref">Thème de la formation :</span>
				<div><select id="a_ref" name="ref">
					<?php foreach($trainings as $training): ?>
						
						<option value="<?php echo $training->getSlug()?>"
							<?php if($request->getParameters()->has('ref') && $request->getParameters()->get('ref') == $training->getSlug())
								echo " selected=\"selected\"";
							?>><?php echo $training->getName() ?></option>
					<?php endforeach; ?>
					</select></div>
			</div>
			<div class="row">
				<label for="a_participants">Nombre de participants :</span>
				<div><input id="a_participants" class="participants" type="text" name="participants" maxlength="50" value="" /></div>
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
			<div class="row">
				<label for="a_dates">Dates souhaitées :</span>
				<input id="a_dates" class="dates" type="text" name="dates" size="30" maxlength="50" value="" />
			</div>
			<div class="row">
				<label for="a_location">Lieu :</span>
				<input id="a_location" class="location" type="text" name="location" size="30" maxlength="50" value="" />
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

</div>

<?php
//Affiche ou cache les blocs d'exemples de réalisations
$jscript = "

";
addJavascript($jscript, false);
?>