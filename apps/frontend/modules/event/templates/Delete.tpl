<?php
	$event = $response->getProperties()->get('event');
?>


<h2>Delete Event</h2>
<p>Do you confirm you want to delete this id</p>
<form class="base_form" action="<?php urlFor('event_delete', array('id' => $event->getId()))?>" method="post">
	<input type="submit" name="Submit" value="Yes, delete it" class="base_btn" />
</form>
<div class="actions">
	<li><a class="cancel" href="<?php echo urlFor('event', array('id' => $event->getId()))?>">Cancel</a></li>
</div>
