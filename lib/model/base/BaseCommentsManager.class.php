<?php
/**
 * BaseCommentsManager
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BaseCommentsManager.class.php
 */
namespace model\base;

abstract class BaseCommentsManager extends AbstractBaseObjectManager {
	public function __construct(\framework\ApplicationContext $context) {
		parent::__construct($context);
		$this->setTableName('comments');
	}

	public function getCommentss() {
		$query = new \framework\query\QueryBuilder();
		$query->addSelect($this->getTableName().'.*');
		$query->addTable($this->getTableName());
		$results = $this->database->query($query->toSQL());
		return $this->getObjectsFromResult($results);
	}

	public function getComments($id) {
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

	protected function getUpdateQuery(\model\Comments $obj) {
		$query = new \framework\query\UpdateBuilder($this->getTableName());
					$query->setField('comment_id', $obj->getCommentId());
							$query->setField('comment_post_id', $obj->getCommentPostId());
							$query->setField('comment_author', $obj->getCommentAuthor());
							$query->setField('comment_author_email', $obj->getCommentAuthorEmail());
							$query->setField('comment_author_url', $obj->getCommentAuthorUrl());
							$query->setField('comment_author_ip', $obj->getCommentAuthorIp());
							$query->setField('comment_date', $obj->getCommentDate());
							$query->setField('comment_date_gmt', $obj->getCommentDateGmt());
							$query->setField('comment_content', $obj->getCommentContent());
							$query->setField('comment_karma', $obj->getCommentKarma());
							$query->setField('comment_approved', $obj->getCommentApproved());
							$query->setField('comment_agent', $obj->getCommentAgent());
							$query->setField('comment_type', $obj->getCommentType());
							$query->setField('comment_parent', $obj->getCommentParent());
							$query->setField('user_id', $obj->getUserId());

		foreach ($this->getIdFields() as $id) {
			$method = 'get'.$this->slugify($id);
			$query->addWhere($id, \framework\query\operator\Operator::EQUAL, $obj->$method());
		}
		return $query;
	}

	protected function update(\model\Comments $obj) {
		$query = $this->getUpdateQuery($obj);
		$this->database->execute($query->toSQL());
	}

	protected function getCreateQuery(\model\Comments $obj) {
		$query = new \framework\query\CreateBuilder($this->getTableName());
				$query->setField('comment_id', $obj->getCommentId());
					$query->setField('comment_post_id', $obj->getCommentPostId());
					$query->setField('comment_author', $obj->getCommentAuthor());
					$query->setField('comment_author_email', $obj->getCommentAuthorEmail());
					$query->setField('comment_author_url', $obj->getCommentAuthorUrl());
					$query->setField('comment_author_ip', $obj->getCommentAuthorIp());
					$query->setField('comment_date', $obj->getCommentDate());
					$query->setField('comment_date_gmt', $obj->getCommentDateGmt());
					$query->setField('comment_content', $obj->getCommentContent());
					$query->setField('comment_karma', $obj->getCommentKarma());
					$query->setField('comment_approved', $obj->getCommentApproved());
					$query->setField('comment_agent', $obj->getCommentAgent());
					$query->setField('comment_type', $obj->getCommentType());
					$query->setField('comment_parent', $obj->getCommentParent());
					$query->setField('user_id', $obj->getUserId());

		return $query;
	}

	protected function create(\model\Comments $obj) {
		$query = $this->getCreateQuery($obj);
		$this->database->execute($query->toSQL());
		$obj->setNew(false);
	}

	protected function getObjectFromRow($row) {
		$object = new \model\Comments();
			$object->setCommentId(\framework\utility\String::fromSQL($row->comment_id));
			$object->setCommentPostId(\framework\utility\String::fromSQL($row->comment_post_id));
			$object->setCommentAuthor(\framework\utility\String::fromSQL($row->comment_author));
			$object->setCommentAuthorEmail(\framework\utility\String::fromSQL($row->comment_author_email));
			$object->setCommentAuthorUrl(\framework\utility\String::fromSQL($row->comment_author_url));
			$object->setCommentAuthorIp(\framework\utility\String::fromSQL($row->comment_author_ip));
			$object->setCommentDate(\framework\utility\String::fromSQL($row->comment_date));
			$object->setCommentDateGmt(\framework\utility\String::fromSQL($row->comment_date_gmt));
			$object->setCommentContent(\framework\utility\String::fromSQL($row->comment_content));
			$object->setCommentKarma(\framework\utility\String::fromSQL($row->comment_karma));
			$object->setCommentApproved(\framework\utility\String::fromSQL($row->comment_approved));
			$object->setCommentAgent(\framework\utility\String::fromSQL($row->comment_agent));
			$object->setCommentType(\framework\utility\String::fromSQL($row->comment_type));
			$object->setCommentParent(\framework\utility\String::fromSQL($row->comment_parent));
			$object->setUserId(\framework\utility\String::fromSQL($row->user_id));

		$object->setNew(false);
		return $object;
	}

}
