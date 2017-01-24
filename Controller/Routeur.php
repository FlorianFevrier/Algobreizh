<?php

require_once 'Controller/ControlerFrontPage.php';
require_once 'View/View.php';

class Routeur {

	private $ctrlFront;

	public function __construct() {
		$this->ctrlFront = new ControlerFrontPage();
	}

	// Route une requête entrante : exécution l'action associée
	public function routerRequete() {
		try {
			if (isset($_GET['action'])) {
				if ($_GET['action'] == 'login') {
					$mail = $this->getParametre($_POST, 'mail');
					$password = $this->getParametre($_POST, 'password');
					$this->ctrlFront->login($mail, $password);

				} else {
					throw new Exception("Action non valide");
				}

			} else {
				// aucune action définie : affichage de l'accueil
				$this->ctrlFront->accueil();
			}
		} catch (Exception $e) {
			$this->erreur($e->getMessage());
		}
	}

	// Affiche une erreur
	private function erreur($msgErreur) {
		$vue = new View("error_log(message)");
		$vue->generer(array('msgErreur' => $msgErreur));
	}

	// Recherche un paramètre dans un tableau
	private function getParametre($tableau, $nom) {
		if (isset($tableau[$nom])) {
			return $tableau[$nom];
		} else {
			throw new Exception("Paramètre '$nom' absent");
		}

	}

}
