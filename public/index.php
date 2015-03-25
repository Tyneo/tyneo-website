<?php

define('BASE_PUBLIC_DIR', dirname(__FILE__));
define('BASE_LIB_DIR', BASE_PUBLIC_DIR.'/../lib/');

require_once BASE_LIB_DIR.'/framework/autoload.inc';
$context = \framework\ApplicationContext::getInstance();

$context->bootstrap('frontend', 'dev', \framework\ApplicationContext::BASE_BOOTSTRAP_FULL);

$response = $context->handleRequest();

if(!isset($response)) {
	echo 'error';
} elseif(true) {
	$helper = new \framework\renderer\RendererHelper($context->getConfiguration(), $context->getRequest());
	$render = $helper->getRenderer();
	$render->initialize($response);
	$render->renderer();
} elseif(false) {
	\Utils\HTTP::redirect($_GET['next']);
}
