<?php


class MonoclipsModel extends BaseModel {

	const CLIP_TYPE_IMAGES = 0 ;
	const CLIP_TYPE_VIDEOS = 1 ;
	const CLIP_TYPE_MUSICS = 2 ;
	const CLIP_TYPE_MEMOS  = 3 ;

	/**
	 *
	 *
	 *
	 */
	public function open($userId, $title, $publish, $type = self::CLIP_TYPE_IMAGES, $categoryId = null) {

		try {
			$entity = new MonoclipsEntity() ;
			$entity->setUserId($userId) ;
			$entity->setTitle($title) ;
			$entity->setPublish($publish) ;
			if ($categoryid) {
				$entity->setCategoryId($categoryId) ;
			}
			$entity->setType($type) ;
			$entity->setCreated(date('Y-m-d H:i:s')) ;
			$entity->setUpdated(date('Y-m-d H:i:s')) ;

			$this->save($entity) ;
			return $entity->getId() ;

		} catch (Exception $e) {

			return false ;
		}
	}


	/**
	 * ユーザIDを元にMono-Clipを取得
	 * @param integer $userid ユーザID
	 * @param integer $limit リミット
	 * @return array MonoclipsEntity
	 */
	public function findByUserId($userId, $limit = null) {

		$this->findActive()->where('user_id', $userId) ;
		if ($limit) {
			$this->limit($limit) ;
		}
		return $this->result()->getAll() ;
	}


	/**
	 * ユーザIDを元にMono-Clip（タイプ指定）を取得
	 * @param integer $userid ユーザID
	 * @param integer $type 種別
	 * @param integer $limit リミット
	 * @return array MonoclipsEntity
	 */
	public function findByUserIdAndType($userId, $type, $limit = null) {

		$this->findActive()->where('user_id', $userId)->where('type', $type) ;
		if ($limit) {
			$this->limit($limit) ;
		}
		$this->order('created desc') ;
		return $this->result()->getAll() ;
	}
}

