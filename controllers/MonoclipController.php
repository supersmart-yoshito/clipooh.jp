<?php

class MonoclipController extends AbstractController {

	const CLIP_LISTING = 10 ;
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
		$authPages = array('open', 'close', 'post') ;

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
		$shareclips = array() ;
		$monoclips = array() ;

		if (!$userId && !$this->_user) {
			return $this->render('monoclip/index.tpl', array(
				'monoclips' => $monoclips,
			)) ;
		}


		// 共有クリップ
		$shareclipImages = $this->mapper['MonoclipImages']->findLatestClips() ;
		foreach ($shareclipImages as $index => $image) {
			$shareclips[$image->getClipId()] = $this->mapper['Monoclips']
				->findById($image->getClipId()) ;
		}


		// ユーザクリップ
		if ($userId) {

			$imageclips = $this->mapper['Monoclips']->findByUserIdAndType(
				$userId,
				MonoclipsModel::CLIP_TYPE_IMAGES,
				self::CLIP_LISTING
			) ;

			$memoclips = $this->mapper['Monoclips']->findByUserIdAndType(
				$userId,
				MonoclipsModel::CLIP_TYPE_MEMOS,
				self::CLIP_LISTING
			) ;
		} else if ($this->_user) {

			$imageclips = $this->mapper['Monoclips']->findByUserIdAndType(
				$this->_user->getId(),
				MonoclipsModel::CLIP_TYPE_IMAGES,
				self::CLIP_LISTING
			) ;

			$memoclips = $this->mapper['Monoclips']->findByUserIdAndType(
				$this->_user->getId(),
				MonoclipsModel::CLIP_TYPE_MEMOS,
				self::CLIP_LISTING
			) ;
		}


		foreach ($imageclips as $index => $clip) {
			$imageclipImages[$clip->getId()] = $this->mapper['MonoclipImages']
				->findLatestByClipId($clip->getId()) ;
		}
		foreach ($memoclips as $index => $clip) {
			$memoclipMemos[$clip->getId()] = $this->mapper['MonoclipMemos']
				->findLatestByClipId($clip->getId()) ;
		}

		return $this->render('monoclip/index.tpl', array(
			'isMyClip' => $userId == $this->_user->getId(),
			'shareclips' => $shareclips,
			'shareclipImages' => $shareclipImages,
			'imageclips' => $imageclips,
			'imageclipImages' => $imageclipImages,
			'memoclips' => $memoclips,
			'memoclipMemos' => $memoclipMemos
		)) ;
	}


	/**
	 * リストページ
	 * @param integer $userId ユーザID
	 * @return 
	 */
	public function listAction($type, $userId) {
		$shareclips = array() ;
		$monoclips = array() ;

		if (!$userId && !$this->_user) {
			return $this->render('monoclip/index.tpl', array(
				'monoclips' => $monoclips,
			)) ;
		}


		// 共有クリップ
		$shareclipImages = $this->mapper['MonoclipImages']->findLatestClips() ;
		foreach ($shareclipImages as $index => $image) {
			$shareclips[$image->getClipId()] = $this->mapper['Monoclips']
				->findById($image->getClipId()) ;
		}


		// ユーザクリップ
		if ($userId) {

			$monoclips = $this->mapper['Monoclips']->findByUserId($userId, self::CLIP_LISTING) ;

		} else if ($this->_user) {

			$monoclips = $this->mapper['Monoclips']->findByUserId($this->_user->getId(), self::CLIP_LISTING) ;
		}


		foreach ($monoclips as $index => $clip) {
			$monoclipImages[$clip->getId()] = $this->mapper['MonoclipImages']
				->findLatestByClipId($clip->getId()) ;
		}

		return $this->render('monoclip/index.tpl', array(
			'isMyClip' => $userId == $this->_user->getId(),
			'shareclips' => $shareclips,
			'shareclipImages' => $shareclipImages,
			'monoclips' => $monoclips,
			'monoclipImages' => $monoclipImages
		)) ;
	}


	/**
	 *
	 *
	 *
	 */
	public function clipAction($clipId) {

		if (!$clipId) {
		}

		$monoclip = $this->mapper['Monoclips']->findById($clipId) ;
		if (!$monoclip) {
		}


		switch ($monoclip->getType()) {
		case MonoclipsModel::CLIP_TYPE_IMAGES :
			$clips = $this->mapper['MonoclipImages']->findByClipId($clipId) ;
			break ;
		case MonoclipsModel::CLIP_TYPE_VIDEOS :
			break ;
		case MonoclipsModel::CLIP_TYPE_MUSICS :
			break ;
		case MonoclipsModel::CLIP_TYPE_MEMOS :
			break ;
		default :
			$clips = $this->mapper['MonoclipImages']->findByClipId($clipId) ;
			break ;
		}

		return $this->render('monoclip/clip.tpl', array(
			'monoclip' => $monoclip,
			'clips' => $clips,
		)) ;
	}


	/**
	 *
	 *
	 *
	 */
	public function openAction() {

		// 直接遷移
		if (!$this->event->isPost()) {
			return $this->render('monoclip/open.tpl') ;
		}

		// キャンセル
		if ($this->event->getParams('cancel')) {
			return $this->render('monoclip/open.tpl', $this->event->post) ;
		}

		// 確認前
		if(!$this->event->getParams('confirm')) {
			return $this->render('monoclip/open_confirm.tpl', $this->event->post) ;
		}

		// データ投入
		$clipId = $this->mapper['Monoclips']->open(
			$this->_user->getId(),
			$this->event->getParams('title'),
			$this->event->getParams('publish'),
			$this->event->getParams('type')
		) ;

		return $this->render('monoclip/open_complete.tpl') ;
	}


	/**
	 *
	 *
	 *
	 */
	public function postApiAction() {

		// 直接遷移
		if (!$this->event->isPost()) {
			return $this->renderJson(-1) ;
		}

		// データ投入
		$clipId = $this->mapper['Monoclips']->open(
			$this->_user->getId(),
			$this->event->getParams('title'),
			$this->event->getParams('publish'),
			$this->event->getParams('type')
		) ;

		return $this->renderJson(0, array(
			'clip_id'=>$clipId,
			'type'=>$this->event->getParams('type'),
			'title'=>$this->event->getParams('title')
		)) ;
	}


	/**
	 *
	 * @param integer $clipId クリップID
	 * @return 
	 */
	public function updateApiAction($clipId) {

		// 直接遷移
		if (!$this->event->isPost()) {
			return $this->renderJson(1) ;
		}

		$monoclip = $this->mapper['Monoclips']->findById($clipId) ;
		if (!$monoclip || $monoclip->getUserId() != $this->_user->getId()) {
			return $this->renderJson(2) ;
		}

		switch ($monoclip->getType()) {
		case MonoclipsModel::CLIP_TYPE_IMAGES :
			return $this->clipImages($clipId) ;
		case MonoclipsModel::CLIP_TYPE_MEMOS :
			return $this->clipMemos($clipId) ;
		default :
			return $this->clipImages($clipId) ;
		}
	}


	/**
	 * 画像取得API
	 * @param integer $imageId 画像ID
	 * @return 
	 */
	public function imageApiAction($imageId) {

		// 画像の有無チェック
		$image = $this->mapper['MonoclipImages']->findById($imageId) ;
		if ($image) {
			$clip = $this->mapper['Monoclips']->findById($image->getClipId()) ;
		}

		// TODO: アクセス可否チェック

		header('Content-type: image/jpeg');
		readfile('data/user/'.$image->getUserId().'/'.$image->getName()) ;
		exit ;
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

