<?php
namespace model;

abstract class AbstractFilter {

	/**
	 * @var \framework\request\QueryFilter
	 */
	private $queryFilter;

	public function __construct(\framework\request\QueryFilter $queryFilter) {
		$this->queryFilter = $queryFilter;
	}

	/**
	 * Applique les filtres passé en argement (?q=) à la requete SQL
	 * @param \framework\query\QueryBuilder $query SQL Query
	 */
	public function apply(\framework\query\QueryBuilder $query) {
		if($this->queryFilter != null) {
			foreach($this->queryFilter->getFilters() as $filter) {
				$this->applyFilter($filter, $query);
			}
		}
	}

	protected abstract function applyFilter(array $filter, \framework\query\QueryBuilder $query);
}