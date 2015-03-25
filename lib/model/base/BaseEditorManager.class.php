<?php
/**
 * BaseEditorManager
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseEditorManager.class.php
 */
namespace model\base;

abstract class BaseEditorManager extends AbstractBaseObjectManager {
	public function __construct(\framework\ApplicationContext $context) {
		parent::__construct($context);
		$this->setTableName('editor');
	}

	public function getEditors() {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}


	/**
	 * Returns a limited and filter number of Editors	 *
	 * @param $start Number Index where we start to display Editors (by default 0)
	 * @param $maxperpage Number Maximum number of item per page
	 * @param $filter String null or a Editor filter
	 */
	public function getLimitedEditors($start, $maxperpage, $filter) {
		if($maxperpage == null) $maxperpage = $this->context->getConfiguration()->get('max_per_page', 25);
		if($start == null) $start = 0;

		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());

		if($filter != null) {
			$f = new \model\EditorFilter($filter);
			$f->apply($query);
		}

		$query->setStart($start)->setMaxPerPage($maxperpage);

		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}

	public function countLimitedEditors($filter) {
		$query = new \framework\query\QueryBuilder();
		$query->addSelectCount($this->getTableName().'.id', 'total', true);
		$query->addTable($this->getTableName());

		if($filter != null) {
			$f = new \model\EditorFilter($filter);
			$f->apply($query);
		}

		return $this->database->queryUniqueObject($query->toSQL())->total;
	}

	public function countEditors() {
		$query = new \framework\query\QueryBuilder();
		$query->addSelectCount($this->getTableName().'.id', 'total', true);
		$query->addTable($this->getTableName());
		return $this->database->queryUniqueObject($query->toSQL())->total;
	}

	public function getEditor($id) {
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

	protected function getUpdateQuery(\model\Editor $obj) {
		$query = new \framework\query\UpdateBuilder($this->getTableName());
					$query->setField('id', $obj->getId());
							$query->setField('name', $obj->getName());
							$query->setField('description', $obj->getDescription());
							$query->setField('site', $obj->getSite());

		foreach ($this->getIdFields() as $id) {
			$method = 'get'.$this->slugify($id);
			$query->addWhere($id, \framework\query\operator\Operator::EQUAL, $obj->$method());
		}
		return $query;
	}

	protected function update(\model\Editor $obj) {
		$query = $this->getUpdateQuery($obj);
		return $this->database->execute($query->toSQL());
	}

	protected function getCreateQuery(\model\Editor $obj) {
		$query = new \framework\query\CreateBuilder($this->getTableName());
				$query->setField('id', $obj->getId());
					$query->setField('name', $obj->getName());
					$query->setField('description', $obj->getDescription());
					$query->setField('site', $obj->getSite());

		return $query;
	}

	protected function create(\model\Editor $obj) {
		$query = $this->getCreateQuery($obj);

		if($this->database->execute($query->toSQL())) {
			$obj->setNew(false);
			return true;
		}
		return false;
	}

	public function delete(\model\Editor $obj) {
		$query = new \framework\query\DeleteBuilder($this->getTableName());
		foreach ($this->getIdFields() as $id) {
			$method = 'get'.$this->slugify($id);
			$query->addWhere($id, \framework\query\operator\Operator::EQUAL, $obj->$method());
		}
		if($this->database->execute($query->toSQL())) {
			return true;
		}
		return false;
	}

	protected function getObjectFromRow($row) {
		$object = new \model\Editor();
			$object->setId(\framework\utility\String::fromSQL($row->id));
			$object->setName(\framework\utility\String::fromSQL($row->name));
			$object->setDescription(\framework\utility\String::fromSQL($row->description));
			$object->setSite(\framework\utility\String::fromSQL($row->site));

		$object->setNew(false);
		return $object;
	}

}
