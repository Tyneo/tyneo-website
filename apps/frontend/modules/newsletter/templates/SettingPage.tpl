<?php 
	$response->getProperties()->set('univers', 'about_us');
	$response->getProperties()->set('page_title', 'Newsletter');
	$response->getProperties()->set('page_description', "Souscrivez à notre newsletter pour recevoir les dernières nouvelles de Tyneo Consulting.");
	$response->getProperties()->set('page_keywords', 'tyneo consulting, tyneo, newsletter, actualité'); 
	$mailing = $response->getProperties()->get('mailing');
?>
<?php include_component('page', 'submenu_us', array()) ?>
<div class="page page_2c">
	<h2>Newsletter</h2>
<p>
Souscrivez à notre newsletter pour recevoir les dernières nouvelles de Tyneo Consulting.
Nous nous engageons à ne pas communiquer vos coordonnées à des tiers et à tout momement, 
vous pourrez vous désinscrire afin de ne plus recevoir nos emails.
</p>

<form class="base_form newsletter_form" action="<?php urlFor('newsletter_setting')?>" method="post" name="form">
	<input type="hidden" name="key" value="<?php echo $mailing->getActivationCode()?>" />
	<div class="base_table">
		<div class="c1">
			<div class="row">
				<label for="a_firstname" >Prénom :</label>
				<div><input id="a_firstname" type="text" name="firstname" maxlength="50" value="<?php echo $mailing->getFirstname() ?>" /></div>
			</div>
			<div class="row">
				<label for="a_company" >Société :</label>
				<div><input id="a_company" type="text" name="company" maxlength="50" value="<?php echo $mailing->getCompany() ?>" /></div>
			</div>
			<div class="row">
				<label for="a_mail"><?php __('form.mail', array(), 'contact')?> :</span>
				<div><input id="a_mail" class="mail" type="text" name="mail" maxlength="50" value="<?php echo $mailing->getMail() ?>" /></div>
			</div>
		</div>
		<div class="c2">
			<div class="row">
				<label for="a_lastname" >Nom :</label>
				<div><input id="a_lastname" type="text" name="lastname" maxlength="50" value="<?php echo $mailing->getLastname() ?>" /></div>
			</div>
			<div class="row">
				<label for="a_position" >Poste :</label>
				<div><input id="a_position" type="text" name="position" maxlength="50" value="<?php echo $mailing->getPosition() ?>" /></div>
			</div>
			<div class="row">
				<span class="label">Intérêts :</span>
				<input type="checkbox" id="a_int_projects" name="int_projects" <?php if($mailing->hasInterest('PROJECTS')):?>checked="checked"<?php endif; ?> value="1"> <label for="a_int_projects" class="checkbox">Gestion de projets</label><br/>
				<input type="checkbox" id="a_int_requirements" name="int_requirements" <?php if($mailing->hasInterest('REQUIREMENTS')):?>checked="checked"<?php endif; ?>value="1"> <label for="a_int_requirements" class="checkbox">Gestion des exigences</label>
			</div>
		</div>
		
		
		<div style="margin-top:30px">
			<input type="submit" name="Submit" value="Modifier mon inscription" class="base_btn" />
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