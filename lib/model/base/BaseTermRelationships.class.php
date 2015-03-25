<?php
/**
 * BaseTermRelationships
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseTermRelationships.class.php
 */
namespace model\base;

/**
 * This class provides an object representation of a TermRelationships.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
abstract class BaseTermRelationships extends AbstractBaseObject {


	/**
	 * Get the object_id
	 *
	 * @return object_id the object_id value
	 */
	public function getObjectId() {
		return $this->properties->get('object_id');
	}

	/**
	 * Set the object_id
	 *
	 * @param object_id the object_id value
	 *
	 * @return BaseTermRelationships
	 */
	public function setObjectId($object_id) {
		$this->properties->set('object_id', $object_id);
		return $this;
	}


	/**
	 * Get the term_taxonomy_id
	 *
	 * @return term_taxonomy_id the term_taxonomy_id value
	 */
	public function getTermTaxonomyId() {
		return $this->properties->get('term_taxonomy_id');
	}

	/**
	 * Set the term_taxonomy_id
	 *
	 * @param term_taxonomy_id the term_taxonomy_id value
	 *
	 * @return BaseTermRelationships
	 */
	public function setTermTaxonomyId($term_taxonomy_id) {
		$this->properties->set('term_taxonomy_id', $term_taxonomy_id);
		return $this;
	}


	/**
	 * Get the term_order
	 *
	 * @return term_order the term_order value
	 */
	public function getTermOrder() {
		return $this->properties->get('term_order');
	}

	/**
	 * Set the term_order
	 *
	 * @param term_order the term_order value
	 *
	 * @return BaseTermRelationships
	 */
	public function setTermOrder($term_order) {
		$this->properties->set('term_order', $term_order);
		return $this;
	}

}
