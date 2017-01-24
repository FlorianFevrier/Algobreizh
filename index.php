<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);
require 'Controller/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();
