<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://localhost/Algobreizh/css/main.css" />
        <title><?= $title ?></title>
    </head>
       <header id="header">
                <span class="logo"><strong>AlgoBreizh</strong>&nbsp;<?php echo $_SESSION['statut']; ?></span>
                <nav id="desktop">
                    <a href="<?= site_url("Commercial"); ?>">Home</a>
                    <a href="<?= site_url("Commercial/visite"); ?>">Visite</a>
                    <a href="<?= site_url("Commercial/avis"); ?>">Avis</a>
                    <a href="<?= site_url("Site"); ?>">Déconnexion</a>
                </nav>
                <nav id="mobile">
					<a href="#menu">Menu</a>
				</nav>
            <nav id="menu">
				<ul class="links">
					<li><a href="<?= site_url("Commercial"); ?>">Home</a></li>
                    <li><a href="<?= site_url("Commercial/visite"); ?>">Visite</a></li>
					<li><a href="<?= site_url("Commercial/avis"); ?>">Avis</a></li>                                        
					<li><a href="<?= site_url("Site"); ?>">Déconnexion</a></li>
				</ul>
			</nav>
        </header>