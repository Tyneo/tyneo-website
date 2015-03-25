<?php
/**
 * Links
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource BaseLinksManager.class.php
 */
namespace model;

/**
 * This class provides manager to manipulate Links objects.
 *
 * @author  Samuel Kauffmann <skauffmann@tyneo.net>
 * @version  1.0
 */
class LinksManager extends base\BaseLinksManager {
	public function __construct() {
		parent::__construct(\framework\ApplicationContext::getInstance());
		if($this->context->getConfiguration()->has("wordpress.blog.prefix"))
			$this->setTableName($this->context->getConfiguration()->get("wordpress.blog.prefix", "").$this->getTableName());
	}

}
