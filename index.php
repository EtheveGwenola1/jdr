<?php

if(empty($_GET)){

	require_once("Controller/HomeController.php");
	$home = new HomeController;
	$accueil = $home ->home(); 
}


if(isset($_GET['action'])){

	if($_GET['action'] == 'connection'){

		require_once("C:\wamp64\www\POO\jdr\Controller/UserController.php");
		$home = new UserController;
		$accueil = $home ->connection();

	}

	if($_GET['action'] == 'deconnection'){

		require_once("Controller/UserController.php");
		$home = new UserController;
		$accueil = $home ->deconnection();

	}

	//
	if($_GET['action'] == 'inscription'){

		require_once("Controller/UserController.php");
		$home = new UserController;
		$accueil = $home ->inscription();
		
	}

	//Affichage complet
	if($_GET['action'] == 'contact'){

		require_once("Views/layout.php");
		require_once("Views/contact/contact.php");
		
	}

	if($_GET['action'] == 'compte'){

		require_once("Controller/InsciptionController.php");
		$home = new InsciptionController;
		$accueil = $home ->perso();
		
	}

	if($_GET['action'] == 'donjons'){

		require_once("Controller\DonjonsController.php");
		$home = new DonjonsController;
		$accueil = $home ->donjons();
		
	}

	if($_GET['action'] == 'membre'){

		require_once("C:\wamp64\www\POO\jdr\Controller\UserController.php");
		$home = new UserController;
		$accueil = $home ->user();

	}

	if($_GET['action'] == '1'){

		require_once("Controller/DonjonsController.php");
		$home = new DonjonsController;
		$accueil = $home ->detail();
		
	}

	if($_GET['action'] == '2'){

		require_once("Controller/DonjonsController.php");
		$home = new DonjonsController;
		$accueil = $home ->detail();
		
	}

	if($_GET['action'] == '3'){

		require_once("Controller/DonjonsController.php");
		$home = new DonjonsController;
		$accueil = $home ->detail();
		
	}

	if($_GET['action'] == '4'){

		require_once("Controller/DonjonsController.php");
		$home = new DonjonsController;
		$accueil = $home ->detail();
		
	}

	if($_GET['action'] == 'perso'){

		require_once("Controller/PersoController.php");
		$home = new PersoController;
		$accueil = $home ->createPerso();
		
	}

}
 


?>