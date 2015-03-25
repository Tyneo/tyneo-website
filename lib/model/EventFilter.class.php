<?php
namespace model;

class EventFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $name_attributes = array('name');
		private $date_attributes = array('date');
		private $location_attributes = array('location');
		private $description_attributes = array('description');
		private $picture_attributes = array('picture');
		private $state_attributes = array('state');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->date_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->location_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.location)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->description_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.description)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->picture_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.picture)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->state_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.state)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('event').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
