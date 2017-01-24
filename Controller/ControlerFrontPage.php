<?php

require_once 'Model/Login.php';
require_once 'View/View.php';

class ControlerFrontPage {

	private $login;

	public function __construct() {
		$this->login = new Login();
	}

// Affiche le menu de connection
	public function accueil() {
		$vue = new View("FrontPage");
		$vue->generer(array('accueil' => "bienvenue sur la page d'accueil"));
	}

}
