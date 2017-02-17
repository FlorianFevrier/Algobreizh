<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://localhost/Algobreizh/css/main.css" />
        <title><?= $title ?></title>
    </head>
    </style>
       <header id="header">
                <a href="<?= site_url("site"); ?>" class="logo"><strong>AlgoBreizh</strong>&nbsp;<?php echo $_SESSION['statut']; ?></a>
                <nav>
					<a href="#menu">Menu</a>
				</nav>
            <nav id="menu">
				<ul class="links">
					<li><a href="<?= site_url("commercial"); ?>">Home</a></li>
                    <li><a href="<?= site_url("commercial/visite"); ?>">Visite</a></li>
					<li><a href="<?= site_url("commercial/avis"); ?>">Avis</a></li>                                        
					<li><a href="<?= site_url("site"); ?>">Déonnexion</a></li>
				</ul>
			</nav>
        </header>