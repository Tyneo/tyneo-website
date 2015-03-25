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

<form class="base_form newsletter_form" action="<?php urlFor('newsletter_subscribe')?>" method="post" name="form">
	<div class="base_table">
		<div class="c1">
			<div class="row">
				<label for="a_name" >Nom & Prénom :</label>
				<div><input id="a_name" class="name" type="text" name="name" maxlength="50" value="" /></div>
			</div>
		</div>
		<div class="c2">
			<div class="row">
				<label for="a_mail"><?php __('form.mail', array(), 'contact')?> :</span>
				<div><input id="a_mail" class="mail" type="text" name="mail" maxlength="50" value="" /></div>
			</div>
		</div>
		<div style="margin-top:30px">
			<input type="submit" name="Submit" value="Valider mon inscription" class="base_btn" />
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