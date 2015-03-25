<?php 
	$response->getProperties()->set('univers', 'about_us');
	$response->getProperties()->set('page_title', 'Newsletter');

	addJavascript(array('libs/tableSort.js'));
	$members = $response->getProperties()->get('members');
?>
<section class="page">
	<article class="">
		<header>
			<h2>Abonnées à la newsletter</h2>
		</header>
		<p>
			L'ensemble des abonnées à la newsletter Tyneo Consulting.
		</p>
		<table class="base_list sortable-onload-0 rowstyle-alt colstyle-alt arrow">
			<thead>
			<tr>
				<th class="sortable">Nom</th>
				<th class="sortable">Société</th>
				<th class="sortable">Poste</th>
				<th class="sortable">Mail</th>
				<th class="sortable">Status</th>
			</tr>
			</thead>
			<tbody>
				<?php foreach($members as $member): 
					$member_url = getUrl('newsletter_setting', array('key' => $member->getActivationCode()))			
				?>
				<tr>
					<td><a href="<?php echo $member_url ?>"><?php echo $member->getFullname() ?></a></td>
					<td><a href="<?php echo $member_url ?>"><?php echo $member->getCompany() ?></a></td>
					<td><a href="<?php echo $member_url ?>"><?php echo $member->getPosition() ?></a></td>
					<td><a href="<?php echo $member_url ?>"><?php echo $member->getMail() ?></a></td>
					<td><a href="<?php echo $member_url ?>"><?php echo $member->getState() ?></a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</article>
</section>