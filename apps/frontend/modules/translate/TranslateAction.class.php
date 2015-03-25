<?php

namespace modules\translate;

class TranslateAction extends \framework\module\AbstractAction {

	public function executeTranslate(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$config = $this->getConfiguration();

		$base_urls = $config->get('base_urls');
		$new_url = $base_urls[$request->getParameters()->get('base_culture')];
		
		$response->setStatusCode(301);
		if($request->getParameters()->has('something1')) {
			$new_url .= '/'.$request->getParameters()->get('something1');
		}
		if($request->getParameters()->has('something2')) {
			$new_url .= '/'.$request->getParameters()->get('something2');
		}

		$response->redirect($new_url);
	}
}