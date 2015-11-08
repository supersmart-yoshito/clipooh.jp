<?php

class EventController extends BaseController {


	/**
	 * トップページ
	 * @param integer $userId ユーザID
	 * @return 
	 */
	public function indexAction($userId) {
		return $this->render('event/index.tpl', array()) ;
	}


	/**
	 * リストページ
	 * @param integer $userId ユーザID
	 * @return 
	 */
	public function listAction($type, $userId) {

		return $this->render('event/list.tpl', array()) ;
	}


	/**
	 *
	 * @return 
	 */
	public function detailAction() {
	}

	/**
	 *
	 * @return 
	 */
	public function openAction() {
		$categories = $this->mapper['Categories']->findActive()->result()->getAll() ;

		return $this->render('event/open.tpl', array(
			'categories' => $categories,
		)) ;
	}

	/**
	 *
	 * @return 
	 */
	public function closeAction() {
	}

}

