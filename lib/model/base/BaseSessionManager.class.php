<?php
/**
 * BaseSessionManager
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseSessionManager.class.php
 */
namespace model\base;

abstract class BaseSessionManager extends AbstractBaseObjectManager {
	public function __construct(\framework\ApplicationContext $context) {
		parent::__construct($context);
		$this->setTableName('session');
	}

	public function getSessions() {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}


	/**
	 * Returns a limited and filter number of Sessions	 *
	 * @param $start Number Index where we start to display Sessions (by default 0)
	 * @param $maxperpage Number Maximum number of item per page
	 * @param $filter String null or a Session filter
	 */
	public function getLimitedSessions($start, $maxperpage, $filter) {
		if($maxperpage == null) $maxperpage = $this->context->getConfiguration()->get('max_per_page', 25);
		if($start == null) $start = 0;

		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());

		if($filter != null) {
			$f = new \model\SessionFilter($filter);
			$f->apply($query);
		}

		$query->setStart($start)->setMaxPerPage($maxperpage);

		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}

	public function countLimitedSessions($filter) {
		$query = new \framework\query\QueryBuilder();
		$query->addSelectCount($this->getTableName().'.id', 'total', true);
		$query->addTable($this->getTableName());

		if($filter != null) {
			$f = new \model\SessionFilter($filter);
			$f->apply($query);
		}

		return $this->database->queryUniqueObject($query->toSQL())->total;
	}

	public function countSessions() {
		$query = new \framework\query\QueryBuilder();
		$query->addSelectCount($this->getTableName().'.id', 'total', true);
		$query->addTable($this->getTableName());
		return $this->database->queryUniqueObject($query->toSQL())->total;
	}

	public function getSession($id) {
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

	protected function getUpdateQuery(\model\Session $obj) {
		$query = new \framework\query\UpdateBuilder($this->getTableName());
					$query->setField('sid', $obj->getSid());
							$query->setField('user_id', $obj->getUserId());
							$query->setField('hostname', $obj->getHostname());
							$query->setField('timestamp', $obj->getTimestamp());
							$query->setField('data', $obj->getData());

		foreach ($this->getIdFields() as $id) {
			$method = 'get'.$this->slugify($id);
			$query->addWhere($id, \framework\query\operator\Operator::EQUAL, $obj->$method());
		}
		return $query;
	}

	protected function update(\model\Session $obj) {
		$query = $this->getUpdateQuery($obj);
		return $this->database->execute($query->toSQL());
	}

	protected function getCreateQuery(\model\Session $obj) {
		$query = new \framework\query\CreateBuilder($this->getTableName());
				$query->setField('sid', $obj->getSid());
					$query->setField('user_id', $obj->getUserId());
					$query->setField('hostname', $obj->getHostname());
					$query->setField('timestamp', $obj->getTimestamp());
					$query->setField('data', $obj->getData());

		return $query;
	}

	protected function create(\model\Session $obj) {
		$query = $this->getCreateQuery($obj);

		if($this->database->execute($query->toSQL())) {
			$obj->setNew(false);
			return true;
		}
		return false;
	}

	public function delete(\model\Session $obj) {
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
		$object = new \model\Session();
			$object->setSid(\framework\utility\String::fromSQL($row->sid));
			$object->setUserId(\framework\utility\String::fromSQL($row->user_id));
			$object->setHostname(\framework\utility\String::fromSQL($row->hostname));
			$object->setTimestamp(\framework\utility\String::fromSQL($row->timestamp));
			$object->setData(\framework\utility\String::fromSQL($row->data));

		$object->setNew(false);
		return $object;
	}

}
