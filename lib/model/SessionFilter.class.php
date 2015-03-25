<?php
namespace model;

class SessionFilter extends AbstractFilter {

		private $sid_attributes = array('sid');
		private $userid_attributes = array('userid');
		private $hostname_attributes = array('hostname');
		private $timestamp_attributes = array('timestamp');
		private $data_attributes = array('data');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->sid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('session').'.sid)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->userid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('session').'.user_id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->hostname_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('session').'.hostname)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->timestamp_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('session').'.timestamp)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->data_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('session').'.data)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
