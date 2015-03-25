<?php
namespace model\base;

abstract class AbstractBaseObjectManager {
	/**
	 * @var \framework\database\DatabaseManager
	 */
	protected $database;
	
	/**
	 * @var \framework\ApplicationContext
	 */
	protected $context;
	
	private $table_prefix;
	private $table;

	public function __construct(\framework\ApplicationContext $context) {
		$this->context = $context;
		$this->database = $context->getDatabase();
		$this->prefix = $context->getConfiguration()->get('db_table_prefix', '');
	}

	/**
	 * Get the table name with prefix
	 *
	 * @return table
	 */
	public function getTableName() {
		return $this->prefix.$this->table;
	}

	/**
	 * Set the table name
	 *
	 * @param table the table name
	 *
	 * @return table
	 */
	protected  function setTableName($table) {
		$this->table = $table;
		return $this;
	}

	public function save(\model\base\AbstractBaseObject $obj, \model\User $user = null) {
		$obj->validate();

		if($obj->isNew()) {
			return $this->create($obj, $user);
		} else {
			return $this->update($obj);
		}
	}

	protected function getIdFields() {
		return array('id');
	}

	protected function slugify($text) {
		$upperCase = true;
		$result = "";
		for($i=0; $i<strlen($text); $i++) {
			$c = $text[$i];
			if($c == "_") {
				$upperCase = true;
			} else {
				if($upperCase) {
					$result .= strtoupper($c);
					$upperCase = false;
				} else {
					$result .= $c;
				}
			}
		}
		return $result;
	}

	protected function getObjectsFromResult($result) {
		$objects = array();
		while ($row = $this->database->fetchNextObject($result)) {
			$objects[] = $this->getObjectFromRow($row);
		}
		return $objects;
	}
}