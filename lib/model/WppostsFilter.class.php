<?php
namespace model;

class WppostsFilter extends AbstractFilter {

		private $id_attributes = array('id');
		private $postauthor_attributes = array('postauthor');
		private $postdate_attributes = array('postdate');
		private $postdategmt_attributes = array('postdategmt');
		private $postcontent_attributes = array('postcontent');
		private $posttitle_attributes = array('posttitle');
		private $postexcerpt_attributes = array('postexcerpt');
		private $poststatus_attributes = array('poststatus');
		private $commentstatus_attributes = array('commentstatus');
		private $pingstatus_attributes = array('pingstatus');
		private $postpassword_attributes = array('postpassword');
		private $postname_attributes = array('postname');
		private $toping_attributes = array('toping');
		private $pinged_attributes = array('pinged');
		private $postmodified_attributes = array('postmodified');
		private $postmodifiedgmt_attributes = array('postmodifiedgmt');
		private $postcontentfiltered_attributes = array('postcontentfiltered');
		private $postparent_attributes = array('postparent');
		private $guid_attributes = array('guid');
		private $menuorder_attributes = array('menuorder');
		private $posttype_attributes = array('posttype');
		private $postmimetype_attributes = array('postmimetype');
		private $commentcount_attributes = array('commentcount');


	protected  function applyFilter(array $filter, \framework\query\QueryBuilder $query) {
		if(array_search($filter['attribut'], $this->id_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.id)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postauthor_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_author)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postdate_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_date)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postdategmt_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_date_gmt)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postcontent_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_content)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->posttitle_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_title)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postexcerpt_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_excerpt)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->poststatus_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_status)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->commentstatus_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.comment_status)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->pingstatus_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.ping_status)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postpassword_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_password)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postname_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_name)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->toping_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.to_ping)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->pinged_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.pinged)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postmodified_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_modified)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postmodifiedgmt_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_modified_gmt)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postcontentfiltered_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_content_filtered)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postparent_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_parent)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->guid_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.guid)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->menuorder_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.menu_order)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->posttype_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_type)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->postmimetype_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.post_mime_type)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}
		if(array_search($filter['attribut'], $this->commentcount_attributes) !== false) {
			$query->addWhere('LOWER('.$query->getAlias('wp_posts').'.comment_count)', \framework\query\operator\Operator::LIKE, '%'.$filter['value'].'%', $filter['logical_operator']);
			return;
		}

	}
}
