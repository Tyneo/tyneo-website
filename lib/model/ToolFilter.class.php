<?php
namespace model;

class ToolFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $name_attributes = array('name');
		private $slug_attributes = array('slug');
		private $img_attributes = array('img');
		private $version_attributes = array('version');
		private $description_attributes = array('description');
		private $environment_attributes = array('environment');
		private $license_attributes = array('license');
		private $tooltypeid_attributes = array('tooltypeid');
		private $editorid_attributes = array('editorid');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->name_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->slug_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.slug)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->img_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.img)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->version_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.version)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->description_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.description)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->environment_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.environment)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->license_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.license)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->tooltypeid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.tool_type_id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->editorid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('tool').'.editor_id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
