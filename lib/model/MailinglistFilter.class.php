<?php
namespace model;

class MailinglistFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $mail_attributes = array('mail');
		private $state_attributes = array('state');
		private $firstname_attributes = array('firstname');
		private $lastname_attributes = array('lastname');
		private $company_attributes = array('company');
		private $position_attributes = array('position');
		private $interest_attributes = array('interest');
		private $activationcode_attributes = array('activationcode');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->mail_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.mail)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->state_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.state)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->firstname_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.firstname)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->lastname_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.lastname)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->company_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.company)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->position_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.position)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->interest_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.interest)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->activationcode_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.activation_code)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('mailing_list').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
