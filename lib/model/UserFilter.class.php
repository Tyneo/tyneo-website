<?php
namespace model;

class UserFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $password_attributes = array('password');
		private $settings_attributes = array('settings');
		private $firstname_attributes = array('firstname');
		private $lastname_attributes = array('lastname');
		private $email_attributes = array('email');
		private $street_attributes = array('street');
		private $zipcode_attributes = array('zipcode');
		private $city_attributes = array('city');
		private $state_attributes = array('state');
		private $country_attributes = array('country');
		private $isactive_attributes = array('isactive');
		private $activationcode_attributes = array('activationcode');
		private $createddate_attributes = array('createddate');
		private $updateddate_attributes = array('updateddate');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->password_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.password)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->settings_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.settings)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->firstname_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.firstname)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->lastname_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.lastname)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->email_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.email)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->street_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.street)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->zipcode_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.zipcode)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->city_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.city)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->state_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.state)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->country_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.country)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->isactive_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.is_active)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->activationcode_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.activation_code)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->createddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.created_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->updateddate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('user').'.updated_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
