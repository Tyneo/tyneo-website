<?php
namespace model\base;

use framework\validator\ValidatorException;

abstract class AbstractBaseObject {
	/**
	 * @var \framework\utility\ParameterHolder
	 */
	protected $properties = null;
	private $validators = array();
	private $secret_properties = array();
	private $isNew = true;

	public function __construct() {
		$this->properties = new \framework\utility\ParameterHolder();
		$this->configure();
	}

	protected function configure() {
	}

	protected function setValidators($validators = array()) {
		$this->validators = $validators;
	}

	public function validate() {
		foreach($this->validators as $fieldName => $validator) {
			$method = 'get'.ucfirst($fieldName);
			if (is_callable(array($this, $method))) {
				$validator->doValidation($this->{$method}());

			} elseif(is_callable(array($this, 'is'.ucfirst($fieldName)))) {
				$method = 'is'.ucfirst($fieldName);
				$validator->doValidation($this->{$method}());
			}
		}
	}

	/**
	 * Retourne un tableau contenant toutes les exceptions pouvant être 
	 * levé en cas d'enregistrement de l'objet.
	 * @return array un tableau de \framework\validator\ValidatorException
	 */
	public function getValidationErrors() {
		$exceptions = array();
		foreach($this->validators as $fieldName => $validator) {
			$method = 'get'.ucfirst($fieldName);
			if (is_callable(array($this, $method))) {
				try {
					$validator->doValidation($this->{$method}());
				} catch (\framework\validator\ValidatorException $e) {
					$exceptions[] = $e;
				}

			} elseif(is_callable(array($this, 'is'.ucfirst($fieldName)))) {
				$method = 'is'.ucfirst($fieldName);
				try {
					$validator->doValidation($this->{$method}());
				} catch (\framework\validator\ValidatorException $e) {
					$exceptions[] = $e;
				}
			}
		}
		return $exceptions;
	}

	public function toArray() {
		$properties = array();
		foreach($this->properties->getAll() as $name => $property) {
			if(!array_key_exists($name, $this->secret_properties)) {
				$properties[$name] = $property;
			}
		}
		return $properties;
	}
	/**
	 * Get created_date
	 *
	 * @return created_date
	 */
	public function getCreatedDate() {
		return $this->properties->get('created_date');
	}

	/**
	 * Set created_date
	 *
	 * @param created_date
	 *
	 * @return instance of the current class
	 */
	public function setCreatedDate($created_date) {
		$this->properties->set('created_date', $created_date);
		return $this;
	}
	/**
	 * Get updated_date
	 *
	 * @return updated_date
	 */
	public function getUpdatedDate() {
		return $this->properties->get('updated_date');
	}

	/**
	 * Set updated_date
	 *
	 * @param updated_date
	 *
	 * @return instance of the current class
	 */
	public function setUpdatedDate($updated_date) {
		$this->properties->set('updated_date', $updated_date);
		return $this;
	}
	
	public function getDateProperty($value) {
		$datetime = strtotime($this->properties->get($value));
		return date("d/m/Y", $datetime);
	}
	
	/**
	  * Get true if object is new in database
	  *
	  * @return isSaved
	  */
	public function isNew() {
	    return $this->isNew;
	}
	
	/**
	 * Set true if object is saved in database
	 *
	 * @param isSaved true if object is saved in database
	 *
	 * @return isSaved
	 */
	public function setNew($isNew) {
	    $this->isNew = $isNew;
	    return $this;
	}
}