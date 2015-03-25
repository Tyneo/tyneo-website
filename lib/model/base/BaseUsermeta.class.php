<?php
/**
 * BaseUsermeta
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseUsermeta.class.php
 */
namespace model\base;

/**
 * This class provides an object representation of a Usermeta.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
abstract class BaseUsermeta extends AbstractBaseObject {


	/**
	 * Get the umeta_id
	 *
	 * @return umeta_id the umeta_id value
	 */
	public function getUmetaId() {
		return $this->properties->get('umeta_id');
	}

	/**
	 * Set the umeta_id
	 *
	 * @param umeta_id the umeta_id value
	 *
	 * @return BaseUsermeta
	 */
	public function setUmetaId($umeta_id) {
		$this->properties->set('umeta_id', $umeta_id);
		return $this;
	}


	/**
	 * Get the user_id
	 *
	 * @return user_id the user_id value
	 */
	public function getUserId() {
		return $this->properties->get('user_id');
	}

	/**
	 * Set the user_id
	 *
	 * @param user_id the user_id value
	 *
	 * @return BaseUsermeta
	 */
	public function setUserId($user_id) {
		$this->properties->set('user_id', $user_id);
		return $this;
	}


	/**
	 * Get the meta_key
	 *
	 * @return meta_key the meta_key value
	 */
	public function getMetaKey() {
		return $this->properties->get('meta_key');
	}

	/**
	 * Set the meta_key
	 *
	 * @param meta_key the meta_key value
	 *
	 * @return BaseUsermeta
	 */
	public function setMetaKey($meta_key) {
		$this->properties->set('meta_key', $meta_key);
		return $this;
	}


	/**
	 * Get the meta_value
	 *
	 * @return meta_value the meta_value value
	 */
	public function getMetaValue() {
		return $this->properties->get('meta_value');
	}

	/**
	 * Set the meta_value
	 *
	 * @param meta_value the meta_value value
	 *
	 * @return BaseUsermeta
	 */
	public function setMetaValue($meta_value) {
		$this->properties->set('meta_value', $meta_value);
		return $this;
	}

}
