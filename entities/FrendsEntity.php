<?php 
class FrendsEntity {
	public $id ;
	public $user_id ;
	public $frend_id ;
	public $created ;
	public $updated ;
	public $deleted ;

	public function setId($id) {
		$this->id = $id ;
		return $this ;
	}

	public function setUserId($user_id) {
		$this->user_id = $user_id ;
		return $this ;
	}

	public function setFrendId($frend_id) {
		$this->frend_id = $frend_id ;
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

	public function getUserId() {
		return $this->user_id ;
	}

	public function getFrendId() {
		return $this->frend_id ;
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
