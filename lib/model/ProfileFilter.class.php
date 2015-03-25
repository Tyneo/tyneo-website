<?php
namespace model;

class ProfileFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $name_attributes = array('name');
		private $description_attributes = array('description');
		private $permissions_attributes = array('permissions');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('profile').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('profile').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->description_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('profile').'.description)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->permissions_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('profile').'.permissions)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('profile').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('profile').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
