<?php
namespace model;

class TooltypeFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $name_attributes = array('name');
		private $description_attributes = array('description');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool_type').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool_type').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->description_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool_type').'.description)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
