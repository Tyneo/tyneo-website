<?php
/**
 * BaseWpkbTermRelationshipsManager
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseWpkbTermRelationshipsManager.class.php
 */
namespace model\base;

abstract class BaseWpkbTermRelationshipsManager extends AbstractBaseObjectManager {
	public function __construct(\framework\ApplicationContext $context) {
		parent::__construct($context);
		$this->setTableName('wpkb_term_relationships');
	}

	public function getWpkbTermRelationshipss() {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}

	public function getWpkbTermRelationships($id) {
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

	protected function getUpdateQuery(\model\WpkbTermRelationships $obj) {
		$query = new \framework\query\UpdateBuilder($this->getTableName());
					$query->setField('object_id', $obj->getObjectId());
							$query->setField('term_taxonomy_id', $obj->getTermTaxonomyId());
							$query->setField('term_order', $obj->getTermOrder());

		foreach ($this->getIdFields() as $id) {
			$method = 'get'.$this->slugify($id);
			$query->addWhere($id, \framework\query\operator\Operator::EQUAL, $obj->$method());
		}
		return $query;
	}

	protected function update(\model\WpkbTermRelationships $obj) {
		$query = $this->getUpdateQuery($obj);
		$this->database->execute($query->toSQL());
	}

	protected function getCreateQuery(\model\WpkbTermRelationships $obj) {
		$query = new \framework\query\CreateBuilder($this->getTableName());
				$query->setField('object_id', $obj->getObjectId());
					$query->setField('term_taxonomy_id', $obj->getTermTaxonomyId());
					$query->setField('term_order', $obj->getTermOrder());

		return $query;
	}

	protected function create(\model\WpkbTermRelationships $obj) {
		$query = $this->getCreateQuery($obj);
		$this->database->execute($query->toSQL());
		$obj->setNew(false);
	}

	protected function getObjectFromRow($row) {
		$object = new \model\WpkbTermRelationships();
			$object->setObjectId(\framework\utility\String::fromSQL($row->object_id));
			$object->setTermTaxonomyId(\framework\utility\String::fromSQL($row->term_taxonomy_id));
			$object->setTermOrder(\framework\utility\String::fromSQL($row->term_order));

		$object->setNew(false);
		return $object;
	}

}
