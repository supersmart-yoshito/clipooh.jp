<?php

class TopController extends AbstractController {


	public function indexAction() {

		$list = $this->mapper['Sessions']->find()->limit(10)->result()->getAll() ;
		$count= $this->mapper['Sessions']->count() ;
		$this->render('index.tpl', array(
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


