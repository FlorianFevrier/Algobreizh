<?php

class Inscription extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url', 'string'));
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('registration_model');
	}

	public function index() {
		$this->registration();
	}

	public function registration() {
		$data['title'] = "Algobreizh - Inscription";

		//Demande le code client a 6 chiffres et verifie qu'il n'existe pas dans la table client
		$this->form_validation->set_rules('codeclient', 'Code Client', 'required|exact_length[6]|is_unique[client.codeClient]', array('is_unique' => 'Ce Code client existe déja'));
		//verifie si email est valide et qu'il n'existe pas dans la table utilisateur
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[utilisateur.mail]', array('is_unique' => 'Cet adresse Mail existe déja'));

		$this->form_validation->set_rules('adresse', 'Adresse', 'required');

		$this->form_validation->set_rules('nom', 'Nom', 'required');

		$this->form_validation->set_rules('tel', 'Tel', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('common/header', $data);
			$this->load->view('site/registration');
			$this->load->view('common/footer');
		} else {
			//array qui va etre utilise pour l'insertion dans la table utilisateur
			$dataUser = array(
				'mail' => $this->input->post('email'),
				'statut' => 'client',
				'mdp' => $this->generatePassword(),
			);

			//Recupere les coordonées gps en fonction de l'adresse rentrée
			$adresse = $this->input->post('adresse');
			$coord = $this->getCoord($adresse);
			$lat = $coord['Lat'];
			$lng = $coord['Lng'];

			//array qui va etre utilise pour l'insertion dans la table cliebt
			$dataClient = array(
				'codeClient' => $this->input->post('codeclient'),
				'adresse' => $this->input->post('adresse'),
				'nom' => $this->input->post('nom'),
				'num_tel' => $this->input->post('tel'),
				'mail' => $this->input->post('email'),
				'latitude' => $lat,
				'longitude' => $lng,
			);

			if ($this->registration_model->registrationUser($dataUser) and $this->registration_model->registrationClient($dataClient)) {

				// On envoie un email si on a réussi a enregistrer l'user dans la database

			} else {
				echo "Erreur";
				// error
				$this->load->view('errors/registration_error');
			}
		}
	}

//Genere un mot de passe aleatoire cryptée en md5
	public function generatePassword() {
		$mdp = random_string('alpha', 8);
		var_dump($mdp);
		$hash = md5($mdp);
		var_dump($hash);
		return $hash;
	}

//permet d'obtenir la longitude et l'attitude d'une adresse passe en param en utilisant l'api google maps
	public function getCoord($adresse) {
		$geocoder = "http://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false";
		$query = sprintf($geocoder, urlencode($adresse));

		$result = json_decode(file_get_contents($query));
		$json = $result->results[0];

		$Lat = (string) $json->geometry->location->lat;
		$Lng = (string) $json->geometry->location->lng;
		$coord = array(
			"Lat" => $Lat,
			"Lng" => $Lng,
		);

		return $coord;
	}
}