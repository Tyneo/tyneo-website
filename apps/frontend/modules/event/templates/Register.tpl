<?php
	$event = $response->getProperties()->get('event');
?>

<h2>Register new Event</h2>
<p>This form allows you to create new Event...</p>
<form class="base_form" action="<?php urlFor('event_register')?>" method="post">

		<label for="a_name" >Name :</label>
	<input id="a_name" type="text" name="name" value="<?php echo $event->getName() ?>" />
		<label for="a_date" >Date :</label>
	<input id="a_date" type="text" name="date" value="<?php echo $event->getDate() ?>" />
		<label for="a_location" >Location :</label>
	<input id="a_location" type="text" name="location" value="<?php echo $event->getLocation() ?>" />
		<label for="a_description" >Description :</label>
	<input id="a_description" type="text" name="description" value="<?php echo $event->getDescription() ?>" />
		<label for="a_picture" >Picture :</label>
	<input id="a_picture" type="text" name="picture" value="<?php echo $event->getPicture() ?>" />
		<label for="a_state" >State :</label>
	<input id="a_state" type="text" name="state" value="<?php echo $event->getState() ?>" />


	<input type="submit" name="Submit" value="Create" class="base_btn" />
</form>
<div class="actions">
	<li><a class="cancel" href="<?php echo urlFor('events')?>">Cancel</a></li>
</div>
