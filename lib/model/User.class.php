<?php
/**
 * User
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseUserManager.class.php
 */
namespace model;

/**
 * This class provides an object representation of a User.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
class User extends Base\BaseUser {

	/**
	 * @var \framework\utility\ParameterHolder
	 */
	private $settings;

	protected function configure() {
		$this->settings =  new \framework\utility\ParameterHolder();

		$this->setValidators(array(
		'firstname'   => new \framework\validator\StringValidator(
		array('required' => true, 'min_length' => 2),
		array('required' => 'error.user.firstname_required', 'min_length' => 'error.user.firstname_min_length', )),

		'lastname'   => new \framework\validator\StringValidator(
		array('required' => true, 'min_length' => 4),
		array('required' => 'error.user.lastname_required', 'min_length' => 'error.user.lastname_min_length', )),
		
		'email'   => new \framework\validator\EmailValidator(
		array('required' => true),
		array('invalid' => 'error.user.mail_invalid','required' => 'error.user.mail_required')),

		'RawPassword'   => new \framework\validator\StringValidator(
		array('required' => true, 'min_length' => 4),
		array('required' => 'error.user.password_required', 'min_length' => 'error.user.password_min_length', ))

		));
	}

	/**
	 * Get raw_password
	 *
	 * @return raw_password
	 */
	public function getRawPassword() {
		return $this->properties->get('raw_password');
	}

	/**
	 * Set raw_password
	 *
	 * @param raw_password
	 *
	 * @return instance of the current class
	 */
	public function setRawPassword($raw_password) {
		$this->properties->set('raw_password', $raw_password);
		$this->setPassword(md5($raw_password));
		return $this;
	}

	public function getPassword() {
		return parent::getPassword();
	}

	public function checkPassword($password) {
		return md5($password) === parent::getPassword();
	}

	/**
	 * Get user settings
	 *
	 * @return \framework\utility\ParameterHolder
	 */
	public function getSettings() {
		if($this->settings == null) {
			$this->settings = new \framework\utility\ParameterHolder();
		}
		return $this->settings;
	}

	/**
	 * Set user setting
	 *
	 * @param settings user settings
	 */
	public function setSettings($settings) {
		if ($settings instanceof \framework\utility\ParameterHolder ) {
			$this->settings = $settings;
		} else {
			$this->settings->unserialize($settings);
		}
		return $this;
	}
}
