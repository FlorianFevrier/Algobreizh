<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Registration_model extends CI_Model {

	public function registrationUser($dataUser) {
		if ($this->db->insert('utilisateur', $dataUser)) {
			return true;
		}
	}

	public function registrationClient($dataClient) {
		if ($this->db->insert('client', $dataClient)) {
			return true;
		}
	}

}