<?php

namespace framework_modules\sitemap;

use framework\ApplicationContext;
use framework\routing;

class SitemapAction extends \framework\module\AbstractAction {

	public function executeXmlSitemap(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {

		$configuration = $this->getConfiguration();
		$routeManager = ApplicationContext::getInstance()->getRouteManager();

		$sitemap  = '<?xml version="1.0" encoding="UTF-8"?>';
		$sitemap .= '<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">';

		$parameters = new \framework\utility\ParameterHolder();
		$parameters->set('alt', 'html');
		$parameters->set('method', 'GET');
		foreach ($routeManager->getRoutes() as $route) {
			
			
			
			if(
				$route->checkRequirements($parameters, $configuration) &&
				!$route->getParameters()->has('no_sitemap') &&
				!$route->getParameters()->has('next') &&
				$route->getParameters()->has('default_template')
			) {

				$application = $response->getParameters()->get('base_application');
				$module = $route->getParameters()->get('module');
				$template = $route->getParameters()->get('default_template');
				$filename = BASE_APPS_DIR.'/'.$application.'/'.$configuration->get('default_modules_dir', 'modules').'/'.$module.'/'.$configuration->get('default_templates_dir', 'templates').'/'.$template.'.tpl';
				if (file_exists($filename)) {
				   $lastmod = date ("Y-m-d", filemtime($filename)); // echo "$filename a été modifié le : " . date ("F d Y H:i:s.", filemtime($filename));
				}
				$site  = '<url>';
				$site .= '<loc>'.$configuration->get('base_url', '').'/'.$route->getURL(array()).'</loc>';
				$site .= '<lastmod>'.$lastmod .'</lastmod>';
				$site .= '<changefreq>'.$route->getParameters()->get('changefreq', 'monthly').'</changefreq>';
				$site .= '<priority>'.$route->getParameters()->get('priority', '0.5').'</priority>';
				$site .= '</url>';

				$sitemap .= $site;
			}
		}

		$sitemap .= '</urlset>';


		$response->setContent($sitemap);
	}

}