<?php

namespace modules\training;

class TrainingComponent extends \framework\module\AbstractComponent {

	public function executeShowTrainings() {
		if($this->getParameters()->has('category')) {
			$postsManager = new \model\TrainingManager();
			$trainings = $postsManager->getTrainingsByCategory($this->getParameters()->get('category'));
			$this->getComponent()->set('trainings', $trainings);
			if($this->getParameters()->has('exclude')) $this->getComponent()->set('exclude', $this->getParameters()->get('exclude'));
			$this->getComponent()->set('without-ul', $this->getParameters()->get('without-ul', false));
		}
	}
	
	public function executeShowSitemap() {
		if($this->getParameters()->has('category')) {
			$postsManager = new \model\TrainingManager();
			$trainings = $postsManager->getTrainingsByCategory($this->getParameters()->get('category'));
			$this->getComponent()->set('trainings', $trainings);
		}
	}

}	