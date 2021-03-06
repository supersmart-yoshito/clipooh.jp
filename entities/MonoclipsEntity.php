<?php 
class MonoclipsEntity {
	public $id ;
	public $category_id ;
	public $type ;
	public $user_id ;
	public $title ;
	public $publish ;
	public $created ;
	public $updated ;
	public $deleted ;

	public function setId($id) {
		$this->id = $id ;
		return $this ;
	}

	public function setCategoryId($category_id) {
		$this->category_id = $category_id ;
		return $this ;
	}

	public function setType($type) {
		$this->type = $type ;
		return $this ;
	}

	public function setUserId($user_id) {
		$this->user_id = $user_id ;
		return $this ;
	}

	public function setTitle($title) {
		$this->title = $title ;
		return $this ;
	}

	public function setPublish($publish) {
		$this->publish = $publish ;
		return $this ;
	}

	public function setCreated($created) {
		$this->created = $created ;
		return $this ;
	}

	public function setUpdated($updated) {
		$this->updated = $updated ;
		return $this ;
	}

	public function setDeleted($deleted) {
		$this->deleted = $deleted ;
		return $this ;
	}


	public function getId() {
		return $this->id ;
	}

	public function getCategoryId() {
		return $this->category_id ;
	}

	public function getType() {
		return $this->type ;
	}

	public function getUserId() {
		return $this->user_id ;
	}

	public function getTitle() {
		return $this->title ;
	}

	public function getPublish() {
		return $this->publish ;
	}

	public function getCreated() {
		return $this->created ;
	}

	public function getUpdated() {
		return $this->updated ;
	}

	public function getDeleted() {
		return $this->deleted ;
	}


} 
