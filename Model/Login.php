<?php

require_once 'Model/Model.php';

class Login extends Model {

	public function getLogin($Mail, $Password) {
		$sql = 'SELECT idClient FROM client WHERE mail =? AND mdp =?';
		$login = $this->executerRequete($sql, array($Mail, $Password));
		if (!$login) {
			throw new Exception("Mauvais identifiant ou mot de passe");
		}
		// Accès à la première ligne de résultat
		else {
			return $login->fetch();
		}

	}

}