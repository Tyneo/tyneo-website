<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $configuration->get('app_name')?> - <?php
		if($response->getProperties()->has('page_title')) {
			echo $response->getProperties()->get('page_title');
		} else {
			echo $configuration->get('app_slogan');
		}
		?></title>
 
	<link rel="shortcut icon" href="<?php  echo $configuration->get('base_url');?>/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="<?php  echo $configuration->get('base_url');?>/favicon.ico" />
	<link rel="icon" type="image/png" href="<?php  echo $configuration->get('base_url');?>/favicon.png" />
	<link rel="apple-touch-icon" href="<?php  echo $configuration->get('base_url');?>/apple-touch-icon.png" />
 
    <meta name="description" content="<?php  __('me.description.long');?>">
    <meta name="keywords"  content="<?php  __('site.keywords');?>">
    <meta name="geo.placename" content="Choisy Le Roi, Îles de France, France">
	<meta name="author" content="<?php  __('me.name');?>">

	<meta name="viewport" content="width=device-width">
	
	<?php
	addStylesheet(array('style_mobile.css'));
	?>

	<?php
	addJavascript(array(
		'libs/modernizr-2.5.3.min.js'
	));
	include_javascript_files();
	?>
</head>
<body id="top">

<?php include_widget('header_mobile')?>

<div role="main">
<?php include_content() ?>
</div>

<?php include_widget('footer_mobile')?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo \framework\utility\URL::getBaseUrl()?>js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script>
	var _gaq=[['_setAccount','<?php  echo $configuration->get('google_analytics');?>'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<script type="text/javascript">

$(function() {

<?php include_javascript()?>

});
</script>
</body>
</html>