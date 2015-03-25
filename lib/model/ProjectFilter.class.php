<?php
namespace model;

class ProjectFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $name_attributes = array('name');
		private $description_attributes = array('description');
		private $startdate_attributes = array('startdate');
		private $enddate_attributes = array('enddate');
		private $isarchived_attributes = array('isarchived');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('project').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('project').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->description_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('project').'.description)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->startdate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('project').'.start_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->enddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('project').'.end_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->isarchived_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('project').'.is_archived)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('project').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('project').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
