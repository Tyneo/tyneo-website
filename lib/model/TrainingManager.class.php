<?php
/**
 * Training
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseTrainingManager.class.php
 */
namespace model;

/**
 * This class provides manager to manipulate Training objects.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
class TrainingManager extends base\BaseTrainingManager {
	public function __construct() {
		parent::__construct(\framework\ApplicationContext::getInstance());
	}

	public function getTrainingBySlug($slug) {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$query->addWhere($this->getTableName().'.slug', \framework\query\operator\Operator::EQUAL, $slug);
		$object = $this->database->queryUniqueObject($query->toSQL());
		if($object != null) {
			return $this->getObjectFromRow($object);
		}
		return null;
	}
	
	public function getPublishedTrainings($category) {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$query->addWhere($this->getTableName().'.state', \framework\query\operator\Operator::EQUAL, 'PUBLISHED');
		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}

	public function getTrainingsByCategory($category) {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$query->addWhere($this->getTableName().'.category', \framework\query\operator\Operator::EQUAL, $category);
		$query->addWhere($this->getTableName().'.state', \framework\query\operator\Operator::EQUAL, 'PUBLISHED');
		$query->addSort('name');
		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}
}
