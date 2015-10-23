<?php

class TopController extends AbstractController {

	private $_user ;

	/**
	 * コントローラ初期化
	 */
	public function initController() {
		$this->registerPrefilter($this, 'authenticator');
	}

	/**
	 * ユーザ認証
	 */
	public function authenticator() {

		// ログインユーザ取得
		if ($this->mapper['Users']->isLoggedIn()) {
			$this->_user = $this->mapper['Users']->getUser() ;
			$this->assign('user', $this->_user) ;
		}

		return true ;
	}

	public function indexAction() {

		return $this->render('index.tpl', array(
			'list' => $list
		)) ;
	}


	public function test2Action() {
echo __METHOD__ ;
	}

	public function test3Action($aaa,$params) {
echo __METHOD__ ;
	}
}


