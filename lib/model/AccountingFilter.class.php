<?php
namespace model;

class AccountingFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $name_attributes = array('name');
		private $description_attributes = array('description');
		private $date_attributes = array('date');
		private $amount_attributes = array('amount');
		private $vat_attributes = array('vat');
		private $ischargeable_attributes = array('ischargeable');
		private $nature_attributes = array('nature');
		private $accountid_attributes = array('accountid');
		private $projectid_attributes = array('projectid');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->description_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.description)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->date_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->amount_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.amount)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->vat_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.vat)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->ischargeable_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.is_chargeable)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->nature_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.nature)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->accountid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.account_id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->projectid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.project_id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('accounting').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
