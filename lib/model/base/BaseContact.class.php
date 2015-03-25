<?php
/**
 * BaseContact
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseContact.class.php
 */
namespace model\base;

/**
 * This class provides an object representation of a Contact.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
abstract class BaseContact extends AbstractBaseObject {


	/**
	 * Get the id
	 *
	 * @return id the id value
	 */
	public function getId() {
		return $this->properties->get('id');
	}

	/**
	 * Set the id
	 *
	 * @param id the id value
	 *
	 * @return BaseContact
	 */
	public function setId($id) {
		$this->properties->set('id', $id);
		return $this;
	}


	/**
	 * Get the firstname
	 *
	 * @return firstname the firstname value
	 */
	public function getFirstname() {
		return $this->properties->get('firstname');
	}

	/**
	 * Set the firstname
	 *
	 * @param firstname the firstname value
	 *
	 * @return BaseContact
	 */
	public function setFirstname($firstname) {
		$this->properties->set('firstname', $firstname);
		return $this;
	}


	/**
	 * Get the lastname
	 *
	 * @return lastname the lastname value
	 */
	public function getLastname() {
		return $this->properties->get('lastname');
	}

	/**
	 * Set the lastname
	 *
	 * @param lastname the lastname value
	 *
	 * @return BaseContact
	 */
	public function setLastname($lastname) {
		$this->properties->set('lastname', $lastname);
		return $this;
	}


	/**
	 * Get the email
	 *
	 * @return email the email value
	 */
	public function getEmail() {
		return $this->properties->get('email');
	}

	/**
	 * Set the email
	 *
	 * @param email the email value
	 *
	 * @return BaseContact
	 */
	public function setEmail($email) {
		$this->properties->set('email', $email);
		return $this;
	}


	/**
	 * Get the mob
	 *
	 * @return mob the mob value
	 */
	public function getMob() {
		return $this->properties->get('mob');
	}

	/**
	 * Set the mob
	 *
	 * @param mob the mob value
	 *
	 * @return BaseContact
	 */
	public function setMob($mob) {
		$this->properties->set('mob', $mob);
		return $this;
	}


	/**
	 * Get the tel
	 *
	 * @return tel the tel value
	 */
	public function getTel() {
		return $this->properties->get('tel');
	}

	/**
	 * Set the tel
	 *
	 * @param tel the tel value
	 *
	 * @return BaseContact
	 */
	public function setTel($tel) {
		$this->properties->set('tel', $tel);
		return $this;
	}


	/**
	 * Get the fax
	 *
	 * @return fax the fax value
	 */
	public function getFax() {
		return $this->properties->get('fax');
	}

	/**
	 * Set the fax
	 *
	 * @param fax the fax value
	 *
	 * @return BaseContact
	 */
	public function setFax($fax) {
		$this->properties->set('fax', $fax);
		return $this;
	}


	/**
	 * Get the comment
	 *
	 * @return comment the comment value
	 */
	public function getComment() {
		return $this->properties->get('comment');
	}

	/**
	 * Set the comment
	 *
	 * @param comment the comment value
	 *
	 * @return BaseContact
	 */
	public function setComment($comment) {
		$this->properties->set('comment', $comment);
		return $this;
	}


	/**
	 * Get the company_id
	 *
	 * @return company_id the company_id value
	 */
	public function getCompanyId() {
		return $this->properties->get('company_id');
	}

	/**
	 * Set the company_id
	 *
	 * @param company_id the company_id value
	 *
	 * @return BaseContact
	 */
	public function setCompanyId($company_id) {
		$this->properties->set('company_id', $company_id);
		return $this;
	}


	public function __toString() {
				return $this->getId();
    }



	public function getCompany() {
		$companyManager = new \model\CompanyManager();
		return $companyManager->getCompany($this->getCompanyId());
	}

}
