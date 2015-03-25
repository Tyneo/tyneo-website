<?php
namespace model;

class TrainingFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $slug_attributes = array('slug');
		private $name_attributes = array('name');
		private $category_attributes = array('category');
		private $objective_attributes = array('objective');
		private $requirements_attributes = array('requirements');
		private $recipient_attributes = array('recipient');
		private $agenda_attributes = array('agenda');
		private $duration_attributes = array('duration');
		private $formative_attributes = array('formative');
		private $state_attributes = array('state');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->slug_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.slug)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->category_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.category)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->objective_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.objective)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->requirements_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.requirements)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->recipient_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.recipient)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->agenda_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.agenda)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->duration_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.duration)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->formative_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.formative)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->state_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.state)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('training').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
