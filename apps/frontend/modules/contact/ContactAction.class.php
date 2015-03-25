<?php

namespace modules\contact;

class ContactAction extends \framework\module\AbstractAction {

	public function executeVcard(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		
		$vcard = new \model\Vcard();
		$vcard->setFirstname("Samuel");
		$vcard->setSurname("Kauffmann");
		$vcard->setCompany("Tyneo Consulting");
		$vcard->setJobtitle("Consultant PMO Freelance");
		$vcard->setWorkcountry("France");
		$vcard->setWorkemail("skauffmann@tyneo.net");
		$vcard->setWorkurl("http://www.tyneo.net");
		$vcard->setMobile("+33 6 63 07 43 39");

		$note  = "En tant qu'indépendant, je propose mon expertise sur des problématiques PMO ciblées.\n\n";
		$note .= "- La gestion de projets :\n";
		$note .= "Consultant expert sur les outils de gestion de projets Planisware OPX2, je vous accompagne dans vos projets d'intégration et d'évolutions autour de ces outils.\n\n";
		$note .= "- La gestion des exigences :\n";
		$note .= "Intégrateur des solutions CaliberRM de MicroFocus, je vous conseille et vous assiste dans vos projets d’ingénierie des exigences.\n";				
		$vcard->setNote($note);
		
		$response->getProperties()->set('vcard', $vcard);
	}
	
	public function executeSendMessage(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$name = $request->getParameters()->get('name', 'Non renseigné');
		$company = $request->getParameters()->get('company', 'Non renseigné');
		$tel = $request->getParameters()->get('tel', 'Non renseigné');
		$mail = $request->getParameters()->get('email', 'Non renseigné');
		$content = $request->getParameters()->get('message', 'Non renseigné');

		$headers  ='From: "'.$this->getConfiguration()->get('app_name', 'NoReply').'"<'.$this->getConfiguration()->get('mail_contact', 'no-reply@gmail.com').'>'."\n";
		$headers .= 'Reply-To: '.$this->getConfiguration()->get('mail_contact', 'no-reply@gmail.com')."\n";
		$headers .= 'Content-Type: text/html; charset="iso-8859-1"'."\n";
		$headers .= 'Content-Transfer-Encoding: 8bit';

		$message  ='<html><head><title>'.$this->getConfiguration()->get('app_name', '').' - Nouveau message</title></head><body>';
		$message .= '<h1>Nouveau message</h1><em>Un nouveau message a depose sur le site.</em><br/><br/>';
		$message .= '<b>Nom : </b>'.$name.'<br/>';
		$message .= '<b>Entreprise : </b>'.$company.'<br/>';
		$message .= '<b>Mail : </b>'.$mail.'<br/>';
		$message .= '<b>Tel : </b>'.$tel.'<br/>';
		$message .= '<b>Message : </b><br/>'.$content.'<br/>';
		$message .= '</body></html>';

		if(@mail($this->getConfiguration()->get('mail_contact', 'no-reply@gmail.com'), $this->getConfiguration()->get('app_name', '').' - Nouveau message', $message, $headers)){
			$response->getProperties()->set('mail_success', true);
		} else {
			$response->getProperties()->set('mail_success', false);
		}
	}
}