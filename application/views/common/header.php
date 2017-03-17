<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://localhost/Algobreizh/css/main.css" />
        <title><?=$title?></title>
    </head>
    <body>
        <header id="header">
                <a href="<?=site_url("site");?>" class="logo"><strong>AlgoBreizh</strong></a>
                <nav id="desktop">
                    <a href="<?=site_url("site");?>">Accueil</a>
                    <a href="<?=site_url("form");?>">Connexion</a>
                    <a href="<?=site_url("inscription");?>">Inscription</a>
                </nav>
                <nav id="mobile">
					<a href="#menu">Menu</a>
				</nav>
            <nav id="menu">
				<ul class="links">
					<li><a href="<?=site_url("site");?>">Accueil</a></li>
					<li><a href="<?=site_url("form");?>">Connexion</a></li>
					<li><a href="<?=site_url("inscription");?>">Inscription</a></li>
				</ul>
			</nav>
        </header>



