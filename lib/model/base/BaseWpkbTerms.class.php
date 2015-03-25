<?php
/**
 * BaseWpkbTerms
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseWpkbTerms.class.php
 */
namespace model\base;

/**
 * This class provides an object representation of a WpkbTerms.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
abstract class BaseWpkbTerms extends AbstractBaseObject {


	/**
	 * Get the term_id
	 *
	 * @return term_id the term_id value
	 */
	public function getTermId() {
		return $this->properties->get('term_id');
	}

	/**
	 * Set the term_id
	 *
	 * @param term_id the term_id value
	 *
	 * @return BaseWpkbTerms
	 */
	public function setTermId($term_id) {
		$this->properties->set('term_id', $term_id);
		return $this;
	}


	/**
	 * Get the name
	 *
	 * @return name the name value
	 */
	public function getName() {
		return $this->properties->get('name');
	}

	/**
	 * Set the name
	 *
	 * @param name the name value
	 *
	 * @return BaseWpkbTerms
	 */
	public function setName($name) {
		$this->properties->set('name', $name);
		return $this;
	}


	/**
	 * Get the slug
	 *
	 * @return slug the slug value
	 */
	public function getSlug() {
		return $this->properties->get('slug');
	}

	/**
	 * Set the slug
	 *
	 * @param slug the slug value
	 *
	 * @return BaseWpkbTerms
	 */
	public function setSlug($slug) {
		$this->properties->set('slug', $slug);
		return $this;
	}


	/**
	 * Get the term_group
	 *
	 * @return term_group the term_group value
	 */
	public function getTermGroup() {
		return $this->properties->get('term_group');
	}

	/**
	 * Set the term_group
	 *
	 * @param term_group the term_group value
	 *
	 * @return BaseWpkbTerms
	 */
	public function setTermGroup($term_group) {
		$this->properties->set('term_group', $term_group);
		return $this;
	}

}
