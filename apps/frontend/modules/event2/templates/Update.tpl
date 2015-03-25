<?php 
	$response->getProperties()->set('univers', 'about_us');

	$event = $response->getProperties()->get('event');
?>
<?php include_component('page', 'submenu_us', array()) ?>
<div class="page page_2c">
	<h2>Modifier un évennement</h2>

<form class="base_form newsletter_form" action="<?php urlFor('event_update', array('id' =>  $event->getId()))?>" method="post" name="form">
	<div class="base_table">
		<div class="c1">
			<div class="row">
				<label for="a_name" >Titre :</label>
				<div><input id="a_name" type="text" name="name" value="<?php echo $event->getName() ?>" /></div>
			</div>
			<div class="row">
				<label for="a_location" >Lieu :</label>
				<div><input id="a_location" type="text" name="location" value="<?php echo $event->getLocation() ?>" /></div>
			</div>
			<div class="row">
				<label for="a_state" >Etat :</label>
				<div><input id="a_state" type="text" name="state" value="<?php echo $event->getState() ?>" /></div>
			</div>
		</div>
		<div class="c2">
			<div class="row">
				<label for="a_date" >Date :</label>
				<div><input id="a_date" type="text" name="date" value="<?php echo $event->getDate() ?>" /></div>
			</div>
			<div class="row">
				<label for="a_picture" >Illustration :</label>
				<div><input id="a_picture" type="text" name="picture" value="<?php echo $event->getPicture() ?>" /></div>
			</div>
		</div>
		<div class="clear"> </div>
		<label for="a_description">Descriptif :</span>
		<div><textarea id="a_description" class="large" name="description"><?php echo $event->getDescription() ?></textarea></div>
		<div style="margin-top:30px">
			<input type="submit" name="Submit" value="Valider" class="base_btn" />
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