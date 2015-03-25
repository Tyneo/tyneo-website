<?php

namespace modules\event;

class EventAction extends \framework\module\AbstractAction {

	public function executeShowEvent(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		if($request->getParameters()->has('id')) {
			$manager = new \model\EventManager();
			$event = $manager->getEvent($request->getParameters()->get('id'));
			if($event != null) {
				$response->getProperties()->set('event', $event);
			} else {
				$response->addErrorMessage("L'évennement recherché n'a pas été trouvé...");
				$response->forward('events');
			}
		} else {
			$response->forward('events');
		}
	}


	public function executeShowEvents(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$manager = new \model\EventManager();
		$events = $manager->getEvents();
		if($events != null) {
			$response->getProperties()->set('events', $events);
		} else {
			$t = $this->getContext()->getTranslator();
			$response->addErrorMessage($t->trans('error.unknown'));
			$response->forward('welcome');
		}
	}

	public function executeRegisterEvent(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$event = new \model\Event();

		if($request->getMethod() == 'POST') {
			$this->updateObject($request, $event);
			$errors = $event->getValidationErrors();
			if(!empty($errors)) {
				foreach($errors as $error) {
					$t = $this->getContext()->getTranslator();
					$message = $t->trans($error->getMessageFormat(), $error->getArguments());
					$response->addErrorMessage($message);
				}
			} else {
				$manager = new \model\EventManager();
				if($manager->save($event)) {
					$response->addInfoMessage("L'évènement a bien été créé !");
				} else {
					$t = $this->getContext()->getTranslator();
					$response->addErrorMessage($t->trans('error.unknown'));
				}
			}
		}
		$response->getProperties()->set('event', $event);
	}

	public function executeUpdateEvent(\framework\request\WebRequest $request, \framework\response\WebResponse $response) {
		$manager = new \model\EventManager();

		if($request->getParameters()->has('id') == false) {
			$t = $this->getContext()->getTranslator();
			$response->addErrorMessage($t->trans('error.unknown'));
			$response->forward('events');
			return;
		}

		$event = $manager->getEvent($request->getParameters()->get('id'));
		if($event == null) {
			$response->addErrorMessage("L'évènement recherché est introuvable");
			$response->forward('events');
			return;
		}

		if($request->getMethod() == 'POST') {
			$this->updateObject($request, $event);
			$errors = $event->getValidationErrors();
			if(!empty($errors)) {
				foreach($errors as $error) {
					$t = $this->getContext()->getTranslator();
					$message = $t->trans($error->getMessageFormat(), $error->getArguments());
					$response->addErrorMessage($message);
				}
			} else {
				if($manager->save($event)) {
					$response->addInfoMessage("L'évènement a été mis à jour !");
				} else {
					$t = $this->getContext()->getTranslator();
					$response->addErrorMessage($t->trans('error.unknown'));
				}
			}
		}
		$response->getProperties()->set('event', $event);
	}

	private function updateObject(\framework\request\WebRequest $request, \model\Event $event) {
		if($request->getParameters()->has('name')) $event->setName($request->getParameters()->get('name'));
		if($request->getParameters()->has('date')) $event->setDate($request->getParameters()->get('date'));
		if($request->getParameters()->has('location')) $event->setLocation($request->getParameters()->get('location'));
		if($request->getParameters()->has('description')) $event->setDescription($request->getParameters()->get('description'));
		if($request->getParameters()->has('picture')) $event->setPicture($request->getParameters()->get('picture'));
		if($request->getParameters()->has('state')) $event->setState($request->getParameters()->get('state'));
	}
}