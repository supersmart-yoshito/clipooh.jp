<?php

class EventController extends AbstractController {

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
		$authPages = array() ;

		// ログインユーザ取得
		$this->_user = $this->getUser() ;
		$this->assign('user', $this->_user) ;

		// 認証が必要なページ以外
		if (!in_array($this->action, $authPages)) {
			return true ;
		}

		// 認証が必要なページ
		if (!$this->_user) {
			$this->redirect(
				'/user/login?r='.urlencode($this->event->getRequestUri())
			) ;
			exit ;
		}

		return true ;
	}

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
	 * 登録ページ
	 * @return 
	 */
	public function registAction() {
		return $this->render('event/regist_complete.tpl', array()) ;
	}


	/**
	 * ユーザ情報
	 * @return mixed 
	 */
	private function getUser() {
		$user = null ;
		if ($this->mapper['Users']->isLoggedIn()) {
			$user = $this->mapper['Users']->getUser() ;
		}

		return $user ;
	}


	/**
	 *
	 *
	 *
	 */
	private function makeDirectory($dirname) {

		if (is_dir($dirname)) {
			return true ;
		}

		mkdir($dirname) ;
		return true ;
	}

	/**
	 * 画像クリップ処理
	 * @param integer $clipId クリップID
	 * @return string テンプレート名
	 */
	private function clipImages($clipId) {

		if (!$this->event->files || !empty($this->event->files['clip']['error'])) {
			return $this->render('api/response.tpl', array(
				'apiResponse' => json_encode(array('status' => 3)),
			)) ; 
		}

		$tmpName = $this->event->files['clip']['tmp_name'] ;
		$name = $this->event->files['clip']['name'] ;

		$this->makeDirectory(STORAGE_DIR.'/user/'.$this->_user->getId()) ;
		if (!move_uploaded_file($tmpName, STORAGE_DIR.'/user/'.$this->_user->getId().'/'.$name)) {
			return $this->render('api/response.tpl', array(
				'apiResponse' => json_encode(array('status' => 4)),
			)) ; 
		}

		// データ投入
		$clipImagesId = $this->mapper['MonoclipImages']->post(
			$clipId,
			$this->_user->getId(),
			$name
		) ;

		return $this->renderJson(0, array(
			'clip_id' => $clipId,
			'image_id' => $clipImagesId
		)) ; 
	}

	/**
	 * メモクリップ処理
	 * @param integer $clipId クリップID
	 * @return string テンプレート名
	 */
	private function clipMemos($clipId) {


		$text = $this->event->getParams('text') ;

		// データ投入
		$clipMemosId = $this->mapper['MonoclipMemos']->post(
			$clipId,
			$this->_user->getId(),
			$text
		) ;

		return $this->renderJson(0, array(
			'clip_id' => $clipId,
			'memo_id' => $clipMemosId
		)) ; 
	}


	private function renderJson($status, $data=array()) {

		return $this->render('api/response.tpl', array(
			'apiResponse' => json_encode(array_merge(array('status' => 1), $data)),
		)) ; 
	}
}

