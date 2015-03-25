<?php
/**
 * BaseWpkbTermTaxonomyManager
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseWpkbTermTaxonomyManager.class.php
 */
namespace model\base;

abstract class BaseWpkbTermTaxonomyManager extends AbstractBaseObjectManager {
	public function __construct(\framework\ApplicationContext $context) {
		parent::__construct($context);
		$this->setTableName('wpkb_term_taxonomy');
	}

	public function getWpkbTermTaxonomies() {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}

	public function getWpkbTermTaxonomy($id) {
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

	protected function getUpdateQuery(\model\WpkbTermTaxonomy $obj) {
		$query = new \framework\query\UpdateBuilder($this->getTableName());
					$query->setField('term_taxonomy_id', $obj->getTermTaxonomyId());
							$query->setField('term_id', $obj->getTermId());
							$query->setField('taxonomy', $obj->getTaxonomy());
							$query->setField('description', $obj->getDescription());
							$query->setField('parent', $obj->getParent());
							$query->setField('count', $obj->getCount());

		foreach ($this->getIdFields() as $id) {
			$method = 'get'.$this->slugify($id);
			$query->addWhere($id, \framework\query\operator\Operator::EQUAL, $obj->$method());
		}
		return $query;
	}

	protected function update(\model\WpkbTermTaxonomy $obj) {
		$query = $this->getUpdateQuery($obj);
		$this->database->execute($query->toSQL());
	}

	protected function getCreateQuery(\model\WpkbTermTaxonomy $obj) {
		$query = new \framework\query\CreateBuilder($this->getTableName());
				$query->setField('term_taxonomy_id', $obj->getTermTaxonomyId());
					$query->setField('term_id', $obj->getTermId());
					$query->setField('taxonomy', $obj->getTaxonomy());
					$query->setField('description', $obj->getDescription());
					$query->setField('parent', $obj->getParent());
					$query->setField('count', $obj->getCount());

		return $query;
	}

	protected function create(\model\WpkbTermTaxonomy $obj) {
		$query = $this->getCreateQuery($obj);
		$this->database->execute($query->toSQL());
		$obj->setNew(false);
	}

	protected function getObjectFromRow($row) {
		$object = new \model\WpkbTermTaxonomy();
			$object->setTermTaxonomyId(\framework\utility\String::fromSQL($row->term_taxonomy_id));
			$object->setTermId(\framework\utility\String::fromSQL($row->term_id));
			$object->setTaxonomy(\framework\utility\String::fromSQL($row->taxonomy));
			$object->setDescription(\framework\utility\String::fromSQL($row->description));
			$object->setParent(\framework\utility\String::fromSQL($row->parent));
			$object->setCount(\framework\utility\String::fromSQL($row->count));

		$object->setNew(false);
		return $object;
	}

}
