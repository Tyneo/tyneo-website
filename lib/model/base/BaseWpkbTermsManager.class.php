<?php
/**
 * BaseWpkbTermsManager
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseWpkbTermsManager.class.php
 */
namespace model\base;

abstract class BaseWpkbTermsManager extends AbstractBaseObjectManager {
	public function __construct(\framework\ApplicationContext $context) {
		parent::__construct($context);
		$this->setTableName('wpkb_terms');
	}

	public function getWpkbTermss() {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}

	public function getWpkbTerms($id) {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		if(!is_array($id)) {
			$query->addWhere($this->getTableName().'.id', \framework\query\operator\Operator::EQUAL, $id);
		} else {
			foreach ($id as $key => $value) {
				$query->addWhere($key, \framework\query\operator\Operator::EQUAL, $value);
			}
		}
		$object = $this->database->queryUniqueObject($query->toSQL());
		if($object != null) {
			return $this->getObjectFromRow($object);
		}
		return null;
	}

	protected function getUpdateQuery(\model\WpkbTerms $obj) {
		$query = new \framework\query\UpdateBuilder($this->getTableName());
					$query->setField('term_id', $obj->getTermId());
							$query->setField('name', $obj->getName());
							$query->setField('slug', $obj->getSlug());
							$query->setField('term_group', $obj->getTermGroup());

		foreach ($this->getIdFields() as $id) {
			$method = 'get'.$this->slugify($id);
			$query->addWhere($id, \framework\query\operator\Operator::EQUAL, $obj->$method());
		}
		return $query;
	}

	protected function update(\model\WpkbTerms $obj) {
		$query = $this->getUpdateQuery($obj);
		$this->database->execute($query->toSQL());
	}

	protected function getCreateQuery(\model\WpkbTerms $obj) {
		$query = new \framework\query\CreateBuilder($this->getTableName());
				$query->setField('term_id', $obj->getTermId());
					$query->setField('name', $obj->getName());
					$query->setField('slug', $obj->getSlug());
					$query->setField('term_group', $obj->getTermGroup());

		return $query;
	}

	protected function create(\model\WpkbTerms $obj) {
		$query = $this->getCreateQuery($obj);
		$this->database->execute($query->toSQL());
		$obj->setNew(false);
	}

	protected function getObjectFromRow($row) {
		$object = new \model\WpkbTerms();
			$object->setTermId(\framework\utility\String::fromSQL($row->term_id));
			$object->setName(\framework\utility\String::fromSQL($row->name));
			$object->setSlug(\framework\utility\String::fromSQL($row->slug));
			$object->setTermGroup(\framework\utility\String::fromSQL($row->term_group));

		$object->setNew(false);
		return $object;
	}

}
