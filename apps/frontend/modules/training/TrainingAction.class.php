<?php

namespace modules\training;

class TrainingAction extends \framework\module\AbstractAction {

	public function executeShowTraining(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		if($request->getParameters()->has('slug')) {
			$manager = new \model\TrainingManager();
			$training = $manager->getTrainingBySlug($request->getParameters()->get('slug'));
			$response->getProperties()->set('training', $training);
		}
	}
	
	public function executeShowTrainings(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$manager = new \model\TrainingManager();
		$trainings = $manager->getPublishedTrainings();
		$response->getProperties()->set('trainings', $trainings);
	}

	public function executeXmlSitemap(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$manager = new \model\TrainingManager();
		$trainings = $manager->getTrainings();
		
		$configuration = $this->getConfiguration();
		$routeManager = \framework\ApplicationContext::getInstance()->getRouteManager();

		$sitemap  = '<?xml version="1.0" encoding="UTF-8"?>';
		$sitemap .= '<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">';

		foreach ($trainings as $training) {
			$route = $routeManager->getRoute('training');
			$site  = '<url>';
			$site .= '<loc>'.$configuration->get('base_url', '').'/'.$route->getURL(array('slug' => $training->getSlug())).'</loc>';
			//$site .= '<lastmod></lastmod>';
			$site .= '<changefreq>'.$route->getParameters()->get('changefreq', 'monthly').'</changefreq>';
			$site .= '<priority>'.$route->getParameters()->get('priority', '0.5').'</priority>';
			$site .= '</url>';

			$sitemap .= $site;
		}

		$sitemap .= '</urlset>';


		$response->setContent($sitemap);
	}
	
	public function executeSendMessage(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$name = $request->getParameters()->get('name', 'Non renseign�');
		$company = $request->getParameters()->get('company', 'Non renseign�');
		$tel = $request->getParameters()->get('tel', 'Non renseign�');
		$mail = $request->getParameters()->get('email', 'Non renseign�');
		$content = $request->getParameters()->get('message', 'Non renseign�');

		$headers  ='From: "'.$this->getConfiguration()->get('app_name', 'NoReply').'"<'.$this->getConfiguration()->get('mail_contact', 'no-reply@gmail.com').'>'."\n";
		$headers .= 'Reply-To: '.$this->getConfiguration()->get('mail_contact', 'no-reply@gmail.com')."\n";
		$headers .= 'Content-Type: text/html; charset="iso-8859-1"'."\n";
		$headers .= 'Content-Transfer-Encoding: 8bit';

		$message  ='<html><head><title>'.$this->getConfiguration()->get('app_name', '').' - Nouveau message</title></head><body>';
		$message .= '<h1>Demande de devis Formation</h1><em>Un nouveau message a depose sur le site.</em><br/><br/>';
		$message .= '<b>Nom : </b>'.$name.'<br/>';
		$message .= '<b>Entreprise : </b>'.$company.'<br/>';
		$message .= '<b>Mail : </b>'.$mail.'<br/>';
		$message .= '<b>Tel : </b>'.$tel.'<br/><br/>';
		
		$message .= '<b>Theme : </b>'.$request->getParameters()->get('ref', 'Non renseign�').'<br/>';
		$message .= '<b>Dates : </b>'.$request->getParameters()->get('dates', 'Non renseign�').'<br/>';
		$message .= '<b>Participants : </b>'.$request->getParameters()->get('participants', 'Non renseign�').'<br/>';
		$message .= '<b>Lieu : </b>'.$request->getParameters()->get('location', 'Non renseign�').'<br/><br/>';
		
		$message .= '<b>Message : </b><br/>'.$content.'<br/>';
		$message .= '</body></html>';

		if(@mail($this->getConfiguration()->get('mail_contact', 'no-reply@gmail.com'), $this->getConfiguration()->get('app_name', '').' - Demande de devis Formation', $message, $headers)){
			$response->getProperties()->set('mail_success', true);
		} else {
			$response->getProperties()->set('mail_success', false);
		}
	}
}