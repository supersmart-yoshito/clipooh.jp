<?php 
class MonoclipImagesEntity {
	public $id ;
	public $clip_id ;
	public $user_id ;
	public $name ;
	public $image ;
	public $created ;
	public $updated ;
	public $deleted ;

	public function setId($id) {
		$this->id = $id ;
		return $this ;
	}

	public function setClipId($clip_id) {
		$this->clip_id = $clip_id ;
		return $this ;
	}

	public function setUserId($user_id) {
		$this->user_id = $user_id ;
		return $this ;
	}

	public function setName($name) {
		$this->name = $name ;
		return $this ;
	}

	public function setImage($image) {
		$this->image = $image ;
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

	public function getClipId() {
		return $this->clip_id ;
	}

	public function getUserId() {
		return $this->user_id ;
	}

	public function getName() {
		return $this->name ;
	}

	public function getImage() {
		return $this->image ;
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
