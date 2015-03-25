<?php

namespace modules\newsletter;

class NewsletterAction extends \framework\module\AbstractAction {

	public function executeSettingUpdate(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		if($request->getParameters()->has('key')) {
			$manager = new \model\MailinglistManager();
			$mailing = $manager->getMailinglistByKey($request->getParameters()->get('key'));
			if($mailing == null) {
				$t = $this->getContext()->getTranslator();
				$response->addErrorMessage($t->trans('error.unknown'));
				$response->forward('newsletter_register');
			} else {

				$this->updateObject($request, $mailing);
				$mailing->setState('CONFIRMED');
				$errors = $mailing->getValidationErrors();
				if(!empty($errors)) {
					foreach($errors as $error) {
						$t = $this->getContext()->getTranslator();
						$message = $t->trans($error->getMessageFormat(), $error->getArguments());
						$response->addErrorMessage($message);
					}
					return;
				}

				$response->getProperties()->set('mailing', $mailing);

				if($manager->save($mailing)) {
					$response->addInfoMessage("Vos données ont bien été mise à jour !");
				} else {
					$t = $this->getContext()->getTranslator();
					$response->addErrorMessage($t->trans('error.unknown'));
				}
			}
		} else {
			$response->forward('newsletter_register');
		}

	}

	public function executeSetting(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		if($request->getParameters()->has('key')) {
			$manager = new \model\MailinglistManager();
			$mailing = $manager->getMailinglistByKey($request->getParameters()->get('key'));
			if($mailing == null) {
				$t = $this->getContext()->getTranslator();
				$response->addErrorMessage($t->trans('error.unknown'));
				$response->forward('newsletter_register');
			} else {
				$response->getProperties()->set('mailing', $mailing);
			}
		} else {
			$t = $this->getContext()->getTranslator();
			$response->addErrorMessage($t->trans('error.unknown'));
			$response->forward('newsletter_register');
		}
	}

	public function executeSubscribe(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$name = $request->getParameters()->get('name', 'Non renseigné');
		$mail = $request->getParameters()->get('mail');
			
		$mailing = new \model\Mailinglist();
		$mailing->setLastName($name);
		$mailing->setMail($mail);
		$mailing->setState('SUBSCRIBE');
		$mailing->setInterest('PROJECTS,REQUIREMENTS');
		$mailing->setActivationCode(strtoupper(md5(uniqid(rand(), true))));


		$errors = $mailing->getValidationErrors();
		if(!empty($errors)) {
			foreach($errors as $error) {
				$t = $this->getContext()->getTranslator();
				$message = $t->trans($error->getMessageFormat(), $error->getArguments());
				$response->addErrorMessage($message);
			}
			return;
		}



		$manager = new \model\MailinglistManager();

		if($manager->save($mailing)) {

			$response->addInfoMessage("Merci pour votre inscription!");

			//send confirmation mail
			$routeManager = \framework\ApplicationContext::getInstance()->getRouteManager();
			$route = $routeManager->getRoute('newsletter_setting');
			$activationUrl = $this->getConfiguration()->get('base_url', '').'/'.$route->getURL(array('key' => $mailing->getActivationCode()));

			$headers  ='From: "'.$this->getConfiguration()->get('app_name', 'NoReply').'"<'.$this->getConfiguration()->get('mail_newsletter', 'no-reply@tyneo.net').'>'."\n";
			$headers .= 'Reply-To: '.$this->getConfiguration()->get('mail_newsletter', 'no-reply@tyneo.net')."\n";
			$headers .= 'Content-Type: text/html; charset="iso-8859-1"'."\n";
			$headers .= 'Content-Transfer-Encoding: 8bit';

			$message  ='<html><head><title>'.$this->getConfiguration()->get('app_name', '').' - Confirmation inscription Newsletter</title></head><body>';
			$message .= 'Bonjour,<br/><br/>';
			$message .= "Nous avons bien reçu votre demande d'inscription sur notre newsletter et permettez moi tout d'abord de vous remercier pour l'intérêt que vous nous portez.<br/>";
			$message .= "Pour que votre inscription soit pleinnement effective, veuillez cliquer sur le lien suivant :<br/>";
			$message .= '<a href="'.$activationUrl.'">'.$activationUrl.'</a><br/>';
			$message .= "<br/>";
			$message .= "A très bientôt.<br/>";
			$message .= "Samuel Kauffmann, Tyneo Consulting.<br/>";
			$message .= '</body></html>';

			if(@mail($mail, 'Confirmation inscription Newsletter', $message, $headers)){
				$response->addInfoMessage("Vous allez recevoir d'ici quelques minutes un email de confirmation.");
			}
			$response->forward('welcome');

		} else {
			if($manager->mailExists($mail)) {
				$response->addErrorMessage("L'adresse mail renseigné est déjà présente dans notre base de données.");
			} else {
				$t = $this->getContext()->getTranslator();
				$response->addErrorMessage($t->trans('error.unknown'));
			}
		}
	}

	public function executeShowMembers(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$manager = new \model\MailinglistManager();
		$members = $manager->getMailinglists();
		$response->getProperties()->set('members', $members);
	}
		
	
	private function updateObject(\framework\request\WebRequest $request, \model\Mailinglist $mailing) {
		if($request->getParameters()->has('name')) $mailing->setLastname($request->getParameters()->get('name'));
		if($request->getParameters()->has('lastname')) $mailing->setLastname($request->getParameters()->get('lastname'));
		if($request->getParameters()->has('firstname')) $mailing->setFirstname($request->getParameters()->get('firstname'));
		if($request->getParameters()->has('company')) $mailing->setCompany($request->getParameters()->get('company'));
		if($request->getParameters()->has('position')) $mailing->setPosition($request->getParameters()->get('position'));
		if($request->getParameters()->has('mail')) $mailing->setMail($request->getParameters()->get('mail'));
		if($request->getParameters()->has('int_projects')) $mailing->addInterest('PROJECTS');
		if($request->getParameters()->has('int_requirements')) $mailing->addInterest('REQUIREMENTS');
	}
}