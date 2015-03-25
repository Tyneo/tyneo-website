<?php
namespace model;

class AccountFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $ref_attributes = array('ref');
		private $name_attributes = array('name');
		private $description_attributes = array('description');
		private $parent_attributes = array('parent');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('account').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->ref_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('account').'.ref)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('account').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->description_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('account').'.description)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->parent_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('account').'.parent)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
