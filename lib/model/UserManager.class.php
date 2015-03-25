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
 * This class provides manager to manipulate User objects.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
class UserManager extends base\BaseUserManager {
	public function __construct() {
		parent::__construct(\framework\ApplicationContext::getInstance());
	}

	/**
	 * Retrouve un utilisateur depuis son nom d'utilisateur ou son identifiant unique
	 * @param unknown_type $idOrMail String ou Integer
	 */
	public function getUser($idOrMail) {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());

		if(is_numeric($idOrMail)) {
			$query->addWhere($this->getTableName().'.id', \framework\query\operator\Operator::EQUAL, $idOrMail);
		} else if($idOrMail){
			$query->addWhere($this->getTableName().'.email', \framework\query\operator\Operator::EQUAL, $idOrMail);
		}

		$object = $this->database->queryUniqueObject($query->toSQL());
		if($object != null) {
			return $this->getObjectFromRow($object);
		}
		return null;
	}

	public function saveSettings(\model\User $user) {
		$query = new \framework\query\UpdateBuilder($this->getTableName());
		$query->setField('settings', $user->getSettings()->serialize());
		$query->addWhere('id', \framework\query\operator\Operator::EQUAL, $user->getId());
		\framework\logger\Logger::getInstance()->info('>>>>>>>>>>>>> Save settings: '.$query->toSQL());
		$this->database->execute($query->toSQL());
		return $user;
	}

	protected function create(\model\User $obj) {
		parent::create($obj);
		$obj->setId($this->database->lastInsertedId());
	}

	protected function getObjectFromRow($row) {
		$object = parent::getObjectFromRow($row);
		$object->setSettings($row->settings);
		return $object;
	}

}
