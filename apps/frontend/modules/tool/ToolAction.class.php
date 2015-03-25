<?php

namespace modules\tool;

class ToolAction extends \framework\module\AbstractAction {

	public function executeShowTool(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		
		if($request->getParameters()->has('type') && $request->getParameters()->has('slug')) {
			$manager = new \model\ToolManager();
			$tool = $manager->getToolAndEditor($request->getParameters()->get('type'), $request->getParameters()->get('slug'));
			$response->getProperties()->set('tool', $tool);
		}
	}
	
	public function executeShowTools(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$manager = new \model\ToolManager();
		$tools = $manager->getToolsAndEditors($request->getParameters()->get('type'));
		$response->getProperties()->set('tools', $tools);
		$response->getProperties()->set('tool_type', $request->getParameters()->get('type'));
	}
	
	public function executeXmlSitemap(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$manager = new \model\ToolManager();
		$tools = $manager->getTools();
		
		$configuration = $this->getConfiguration();
		$routeManager = \framework\ApplicationContext::getInstance()->getRouteManager();

		$sitemap  = '<?xml version="1.0" encoding="UTF-8"?>';
		$sitemap .= '<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">';

		foreach ($tools as $tool) {
			$route = $routeManager->getRoute('tool');
			$site  = '<url>';
			$site .= '<loc>'.$configuration->get('base_url', '').'/'.$route->getURL(array('type' => $tool->getToolTypeName(), 'slug' => $tool->getSlug())).'</loc>';
			//$site .= '<lastmod></lastmod>';
			$site .= '<changefreq>'.$route->getParameters()->get('changefreq', 'monthly').'</changefreq>';
			$site .= '<priority>'.$route->getParameters()->get('priority', '0.5').'</priority>';
			$site .= '</url>';

			$sitemap .= $site;
		}

		$sitemap .= '</urlset>';


		$response->setContent($sitemap);
	}
}