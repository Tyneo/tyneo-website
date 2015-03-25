<?php

namespace modules\blog;

class BlogComponent extends \framework\module\AbstractComponent {

	public function executeShowBlogMessages() {
		$postsManager = new \model\PostsManager();
		$messages = $postsManager->getLimitedPosts(10);
		$this->getComponent()->set('messages', $messages);
	}

}