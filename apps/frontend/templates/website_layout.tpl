<?php
	if(!$response->getProperties()->has('univers')) $response->getProperties()->set('univers', $request->getRoute()->getName());
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php
		if($response->getProperties()->has('page_title')) {
			echo $response->getProperties()->get('page_title');
		} else {
			echo $configuration->get('app_slogan');
		}
		?> - <?php echo $configuration->get('app_name')?></title>
 
	<link rel="shortcut icon" href="<?php  echo $configuration->get('base_url');?>/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="<?php  echo $configuration->get('base_url');?>/favicon.ico" />
	<link rel="icon" type="image/png" href="<?php  echo $configuration->get('base_url');?>/favicon.png" />
	<link rel="apple-touch-icon" href="<?php  echo $configuration->get('base_url');?>/apple-touch-icon.png" />
 
	<meta name="description" content="<?php
		if($response->getProperties()->has('page_description')) echo $response->getProperties()->get('page_description');
		else echo $response->getProperties()->get('page_title');
	?>">
	<meta name="keywords"  content="<?php
		if($response->getProperties()->has('page_keywords')) echo $response->getProperties()->get('page_keywords');
		else __('site.keywords');
	?>">
	<meta name="geo.placename" content="Choisy Le Roi, Îles de France, France">
	<meta name="author" content="<?php  __('me.name');?>">
	<meta name="msvalidate.01" content="147101578981994AF7677857DBA78D49" />
	<meta name="google-site-verification" content="8j13eOhe2MnjVOeo-gUX24yVE8kJGeQ5FjAXDimlYIo" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<meta property="og:title" content="<?php
		if($response->getProperties()->has('page_title')) echo $response->getProperties()->get('page_title');
		else echo $configuration->get('app_slogan');
	?>">
	<meta property="og:description" content="<?php
		if($response->getProperties()->has('page_description')) echo $response->getProperties()->get('page_description');
		else echo $response->getProperties()->get('page_title');
	?>">
	<meta property='og:site_name' content='<?php echo $configuration->get('app_name'); ?>'/>
	<meta property='og:type' content='website'/>
	
	<link rel="author" href="<?php echo $configuration->get('link_googleplus')?>"/>

	<?php
	addStylesheet(array('style.src.css'));
	addJavascript(array(
		'libs/modernizr-2.5.3.min.js'
	));
	include_javascript_files();
	?>

        <a href="<?php echo $configuration->get('link_googleplus')?>"></a> 
</head>
<body id="top">

<?php include_widget('website_header')?>

<div role="main">
<?php include_widget('base_messages'); ?>
<?php include_content() ?>
</div>

<?php include_widget('footer')?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo \framework\utility\URL::getBaseUrl()?>js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php  echo $configuration->get('google_analytics');?>']);
	_gaq.push(['_trackPageview']);
	(function() {
	//ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
<script type="text/javascript">

$(function() {

<?php include_javascript()?>

});
</script>

</html>	