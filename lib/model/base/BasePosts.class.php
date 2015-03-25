<?php
/**
 * BasePosts
 * Generated by Tyneo Base Tools
 *
 * @package     model
 * @author      Samuel Kauffmann <skauffmann@tyneo.net>
 * @copyright   Copyright (c) 2011, Samuel Kauffmann
 * @link        http://www.tyneo.net
 * @filesource	BasePosts.class.php
 */
namespace model\base;

/**
 * This class provides an object representation of a Posts.
 *
 * @author		Samuel Kauffmann <skauffmann@tyneo.net>
 * @version		1.0
 */
abstract class BasePosts extends AbstractBaseObject {


	/**
	 * Get the id
	 *
	 * @return id the id value
	 */
	public function getId() {
		return $this->properties->get('id');
	}

	/**
	 * Set the id
	 *
	 * @param id the id value
	 *
	 * @return BasePosts
	 */
	public function setId($id) {
		$this->properties->set('id', $id);
		return $this;
	}


	/**
	 * Get the post_author
	 *
	 * @return post_author the post_author value
	 */
	public function getPostAuthor() {
		return $this->properties->get('post_author');
	}

	/**
	 * Set the post_author
	 *
	 * @param post_author the post_author value
	 *
	 * @return BasePosts
	 */
	public function setPostAuthor($post_author) {
		$this->properties->set('post_author', $post_author);
		return $this;
	}


	/**
	 * Get the post_date
	 *
	 * @return post_date the post_date value
	 */
	public function getPostDate() {
		return $this->properties->get('post_date');
	}

	/**
	 * Set the post_date
	 *
	 * @param post_date the post_date value
	 *
	 * @return BasePosts
	 */
	public function setPostDate($post_date) {
		$this->properties->set('post_date', $post_date);
		return $this;
	}


	/**
	 * Get the post_date_gmt
	 *
	 * @return post_date_gmt the post_date_gmt value
	 */
	public function getPostDateGmt() {
		return $this->properties->get('post_date_gmt');
	}

	/**
	 * Set the post_date_gmt
	 *
	 * @param post_date_gmt the post_date_gmt value
	 *
	 * @return BasePosts
	 */
	public function setPostDateGmt($post_date_gmt) {
		$this->properties->set('post_date_gmt', $post_date_gmt);
		return $this;
	}


	/**
	 * Get the post_content
	 *
	 * @return post_content the post_content value
	 */
	public function getPostContent() {
		return $this->properties->get('post_content');
	}

	/**
	 * Set the post_content
	 *
	 * @param post_content the post_content value
	 *
	 * @return BasePosts
	 */
	public function setPostContent($post_content) {
		$this->properties->set('post_content', $post_content);
		return $this;
	}


	/**
	 * Get the post_title
	 *
	 * @return post_title the post_title value
	 */
	public function getPostTitle() {
		return $this->properties->get('post_title');
	}

	/**
	 * Set the post_title
	 *
	 * @param post_title the post_title value
	 *
	 * @return BasePosts
	 */
	public function setPostTitle($post_title) {
		$this->properties->set('post_title', $post_title);
		return $this;
	}


	/**
	 * Get the post_excerpt
	 *
	 * @return post_excerpt the post_excerpt value
	 */
	public function getPostExcerpt() {
		return $this->properties->get('post_excerpt');
	}

	/**
	 * Set the post_excerpt
	 *
	 * @param post_excerpt the post_excerpt value
	 *
	 * @return BasePosts
	 */
	public function setPostExcerpt($post_excerpt) {
		$this->properties->set('post_excerpt', $post_excerpt);
		return $this;
	}


	/**
	 * Get the post_status
	 *
	 * @return post_status the post_status value
	 */
	public function getPostStatus() {
		return $this->properties->get('post_status');
	}

	/**
	 * Set the post_status
	 *
	 * @param post_status the post_status value
	 *
	 * @return BasePosts
	 */
	public function setPostStatus($post_status) {
		$this->properties->set('post_status', $post_status);
		return $this;
	}


	/**
	 * Get the comment_status
	 *
	 * @return comment_status the comment_status value
	 */
	public function getCommentStatus() {
		return $this->properties->get('comment_status');
	}

	/**
	 * Set the comment_status
	 *
	 * @param comment_status the comment_status value
	 *
	 * @return BasePosts
	 */
	public function setCommentStatus($comment_status) {
		$this->properties->set('comment_status', $comment_status);
		return $this;
	}


	/**
	 * Get the ping_status
	 *
	 * @return ping_status the ping_status value
	 */
	public function getPingStatus() {
		return $this->properties->get('ping_status');
	}

	/**
	 * Set the ping_status
	 *
	 * @param ping_status the ping_status value
	 *
	 * @return BasePosts
	 */
	public function setPingStatus($ping_status) {
		$this->properties->set('ping_status', $ping_status);
		return $this;
	}


	/**
	 * Get the post_password
	 *
	 * @return post_password the post_password value
	 */
	public function getPostPassword() {
		return $this->properties->get('post_password');
	}

	/**
	 * Set the post_password
	 *
	 * @param post_password the post_password value
	 *
	 * @return BasePosts
	 */
	public function setPostPassword($post_password) {
		$this->properties->set('post_password', $post_password);
		return $this;
	}


	/**
	 * Get the post_name
	 *
	 * @return post_name the post_name value
	 */
	public function getPostName() {
		return $this->properties->get('post_name');
	}

	/**
	 * Set the post_name
	 *
	 * @param post_name the post_name value
	 *
	 * @return BasePosts
	 */
	public function setPostName($post_name) {
		$this->properties->set('post_name', $post_name);
		return $this;
	}


	/**
	 * Get the to_ping
	 *
	 * @return to_ping the to_ping value
	 */
	public function getToPing() {
		return $this->properties->get('to_ping');
	}

	/**
	 * Set the to_ping
	 *
	 * @param to_ping the to_ping value
	 *
	 * @return BasePosts
	 */
	public function setToPing($to_ping) {
		$this->properties->set('to_ping', $to_ping);
		return $this;
	}


	/**
	 * Get the pinged
	 *
	 * @return pinged the pinged value
	 */
	public function getPinged() {
		return $this->properties->get('pinged');
	}

	/**
	 * Set the pinged
	 *
	 * @param pinged the pinged value
	 *
	 * @return BasePosts
	 */
	public function setPinged($pinged) {
		$this->properties->set('pinged', $pinged);
		return $this;
	}


	/**
	 * Get the post_modified
	 *
	 * @return post_modified the post_modified value
	 */
	public function getPostModified() {
		return $this->properties->get('post_modified');
	}

	/**
	 * Set the post_modified
	 *
	 * @param post_modified the post_modified value
	 *
	 * @return BasePosts
	 */
	public function setPostModified($post_modified) {
		$this->properties->set('post_modified', $post_modified);
		return $this;
	}


	/**
	 * Get the post_modified_gmt
	 *
	 * @return post_modified_gmt the post_modified_gmt value
	 */
	public function getPostModifiedGmt() {
		return $this->properties->get('post_modified_gmt');
	}

	/**
	 * Set the post_modified_gmt
	 *
	 * @param post_modified_gmt the post_modified_gmt value
	 *
	 * @return BasePosts
	 */
	public function setPostModifiedGmt($post_modified_gmt) {
		$this->properties->set('post_modified_gmt', $post_modified_gmt);
		return $this;
	}


	/**
	 * Get the post_content_filtered
	 *
	 * @return post_content_filtered the post_content_filtered value
	 */
	public function getPostContentFiltered() {
		return $this->properties->get('post_content_filtered');
	}

	/**
	 * Set the post_content_filtered
	 *
	 * @param post_content_filtered the post_content_filtered value
	 *
	 * @return BasePosts
	 */
	public function setPostContentFiltered($post_content_filtered) {
		$this->properties->set('post_content_filtered', $post_content_filtered);
		return $this;
	}


	/**
	 * Get the post_parent
	 *
	 * @return post_parent the post_parent value
	 */
	public function getPostParent() {
		return $this->properties->get('post_parent');
	}

	/**
	 * Set the post_parent
	 *
	 * @param post_parent the post_parent value
	 *
	 * @return BasePosts
	 */
	public function setPostParent($post_parent) {
		$this->properties->set('post_parent', $post_parent);
		return $this;
	}


	/**
	 * Get the guid
	 *
	 * @return guid the guid value
	 */
	public function getGuid() {
		return $this->properties->get('guid');
	}

	/**
	 * Set the guid
	 *
	 * @param guid the guid value
	 *
	 * @return BasePosts
	 */
	public function setGuid($guid) {
		$this->properties->set('guid', $guid);
		return $this;
	}


	/**
	 * Get the menu_order
	 *
	 * @return menu_order the menu_order value
	 */
	public function getMenuOrder() {
		return $this->properties->get('menu_order');
	}

	/**
	 * Set the menu_order
	 *
	 * @param menu_order the menu_order value
	 *
	 * @return BasePosts
	 */
	public function setMenuOrder($menu_order) {
		$this->properties->set('menu_order', $menu_order);
		return $this;
	}


	/**
	 * Get the post_type
	 *
	 * @return post_type the post_type value
	 */
	public function getPostType() {
		return $this->properties->get('post_type');
	}

	/**
	 * Set the post_type
	 *
	 * @param post_type the post_type value
	 *
	 * @return BasePosts
	 */
	public function setPostType($post_type) {
		$this->properties->set('post_type', $post_type);
		return $this;
	}


	/**
	 * Get the post_mime_type
	 *
	 * @return post_mime_type the post_mime_type value
	 */
	public function getPostMimeType() {
		return $this->properties->get('post_mime_type');
	}

	/**
	 * Set the post_mime_type
	 *
	 * @param post_mime_type the post_mime_type value
	 *
	 * @return BasePosts
	 */
	public function setPostMimeType($post_mime_type) {
		$this->properties->set('post_mime_type', $post_mime_type);
		return $this;
	}


	/**
	 * Get the comment_count
	 *
	 * @return comment_count the comment_count value
	 */
	public function getCommentCount() {
		return $this->properties->get('comment_count');
	}

	/**
	 * Set the comment_count
	 *
	 * @param comment_count the comment_count value
	 *
	 * @return BasePosts
	 */
	public function setCommentCount($comment_count) {
		$this->properties->set('comment_count', $comment_count);
		return $this;
	}

}
