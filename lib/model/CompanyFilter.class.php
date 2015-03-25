<?php
namespace model;

class CompanyFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $name_attributes = array('name');
		private $description_attributes = array('description');
		private $address_attributes = array('address');
		private $city_attributes = array('city');
		private $postalcode_attributes = array('postalcode');
		private $country_attributes = array('country');
		private $tel_attributes = array('tel');
		private $fax_attributes = array('fax');
		private $website_attributes = array('website');
		private $vatnumber_attributes = array('vatnumber');
		private $contactid_attributes = array('contactid');
		private $langage_attributes = array('langage');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->description_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.description)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->address_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.address)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->city_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.city)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postalcode_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.postal_code)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->country_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.country)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->tel_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.tel)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->fax_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.fax)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->website_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.website)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->vatnumber_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.vat_number)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->contactid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.contact_id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->langage_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.langage)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('company').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
