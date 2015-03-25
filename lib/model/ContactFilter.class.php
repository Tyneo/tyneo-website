<?php
namespace model;

class ContactFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $firstname_attributes = array('firstname');
		private $lastname_attributes = array('lastname');
		private $email_attributes = array('email');
		private $mob_attributes = array('mob');
		private $tel_attributes = array('tel');
		private $fax_attributes = array('fax');
		private $comment_attributes = array('comment');
		private $companyid_attributes = array('companyid');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->firstname_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.firstname)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->lastname_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.lastname)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->email_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.email)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->mob_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.mob)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->tel_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.tel)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->fax_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.fax)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->comment_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.comment)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->companyid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.company_id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('contact').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
