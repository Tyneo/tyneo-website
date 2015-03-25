<?php
/**
 * Event
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseEventManager.class.php
 */
namespace model;

/**
 * This class provides manager to manipulate Event objects.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
class EventManager extends base\BaseEventManager {
	public function __construct() {
		parent::__construct(\framework\ApplicationContext::getInstance());
	}

}
