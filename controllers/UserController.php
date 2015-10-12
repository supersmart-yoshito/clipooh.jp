<?php


class UserController extends AbstractController {


	/**
	 * TOPページ
	 * @param integer $userId
	 * @return string template path
	 */
	public function indexAction() {

		return $this->render('user/index.tpl', array(
			'user' => $this->mapper['Users']->getUser()
		)) ;
	}

	/**
	 * 会員ページ
	 * @param integer $userId
	 * @return string template path
	 */
	public function mypageAction($userId) {

		// ログインチェック
		if (!$this->mapper['Users']->isLoggedIn()) {
			$this->redirect('/user/login') ;
		}

		$my = $this->mapper['Users']->getUser() ;
		$user = $this->mapper['Users']->findById($userId) ;

		if (empty($user) || ($my->getId() !== $user->getId() && !$user->getPublish())) {
			return $this->render('user/nonpublish_page.tpl') ;
		} else if ($my->getId() === $user->getId()) {
			return $this->render('user/mypage.tpl', array('user' => $my)) ;
		} else {
			return $this->render('user/userpage.tpl', array('user' => $user)) ;
		}
	}

	/**
	 * 入会ページ
	 * @return string template path
	 */
	public function joinAction() {

		// ログインチェック
		if ($this->mapper['Users']->isLoggedIn()) {
			$this->redirect('/user') ;
		}

		// 直接遷移
		if ($this->event->isGet()) {
			return $this->render('user/join.tpl') ;
		}

		// 登録済みチェック
		$userId = $this->event->getParams('user_id') ;
		if ($this->mapper['Users']->isJoined($userId)) {

			return $this->render('user/join.tpl', array_merge(
				array('error' => 1),
				$this->event->post
			)) ;
		}

		// 確認前
		$confirm = $this->event->getParams('confirm') ;
		if ($confirm != 1) {
			return $this->render('user/join_confirm.tpl', $this->event->post) ;
		}

		// 会員登録
		$userPass = $this->event->getParams('user_pass') ;
		if (!($id = $this->mapper['Users']->join($userId, $userPass))) {

			return $this->render('user/join.tpl', array_merge(
				array('error' => 1),
				$this->event->post
			)) ;
		}

		// ログイン
		$this->mapper['Users']->login($userId, $userPass) ;

		return $this->render('user/join_complete.tpl', array('id' => $id)) ;
	}

	/**
	 * 退会ページ
	 * @param integer $userId
	 * @return string template path
	 */
	public function leaveAction($userId) {

		// ログインチェック
		if (!$this->mapper['Users']->isLoggedIn()) {
			$this->redirect('/user/'.$userId) ;
		}

		// 直接遷移
		if ($this->event->isGet()) {
			return $this->render('user/leave.tpl', array(
				'id' => $userId,
			)) ;
		}

		// 登録済みチェック
		$userId = $this->event->getParams('id') ;
		if (!$this->mapper['Users']->findById($userId)) {
			$this->redirect('/user') ;
		}

		// 確認前
		$confirm = $this->event->getParams('confirm') ;
		if ($confirm != 1) {
			return $this->render('user/leave_confirm.tpl', $this->event->post) ;
		}

		// 会員解除
		if (!$this->mapper['Users']->leave($userId)) {

			return $this->render('user/leave.tpl', array_merge(
				array('error' => 1),
				$this->event->post
			)) ;
		}

		// ログイン
		$this->mapper['Users']->logout() ;

		return $this->render('user/leave_complete.tpl') ;
	}

	/**
	 * ログインページ
	 * @return string template path
	 */
	public function loginAction() {

		// ログインチェック
		if ($this->mapper['Users']->isLoggedIn()) {
			$this->redirect('/user/'.$this->mapper['Users']->getUser()->getId()) ;
		}

		// 直接遷移
		if ($this->event->isGet()) {
			return $this->render('user/login.tpl', array(
				'r' => $this->event->getParams('r')
			)) ;
		}

		// 登録済みチェック
		$userId = $this->event->getParams('user_id') ;
		$userPass = $this->event->getParams('user_pass') ;
		if (!$this->mapper['Users']->isJoined($userId)) {

			return $this->render('user/login.tpl', array_merge(
				array('error' => 1),
				$this->event->post
			)) ;
		}

		// ログイン
		$user = $this->mapper['Users']->login($userId, $userPass) ;

		if ($this->event->getParams('r')) {
			return $this->redirect(urldecode($this->event->getParams('r'))) ;
		}

		return $this->redirect('/user/'.$user->getId()) ;
	}

	/**
	 * ログアウトページ
	 * @return string template path
	 */
	public function logoutAction() {

		$this->mapper['Users']->logout() ;
		return $this->redirect('/user') ;
	}

}


