<?php
class User extends Model {

	public function get() {

		$get = $this->db->prepare('
			SELECT * FROM user
		');

		$get->execute();

		return $get->fetchAll();
	}
}
?>