<?php

class UserController
{

	public function inscription(){

		require_once("Views\layout.php");

		require_once("Models\InscriptionModel.php");
		$home = new InscriptionModel;
		$accueil = $home -> inscription();

		require_once("Views\inscription\inscription.php");
	}

	public function connection(){

		require_once("Views\layout.php");

		require_once("Views\connection\connection.php");

		require_once("Models\ConnectionModel.php");
		$home = new ConnectionModel;
		$accueil = $home -> connection();

		
	}

	public function user(){

		session_start();
		require_once("Views\layout.php");

		require_once("Models\UserModel.php");
		$home = new UserModel;
		$accueil = $home -> user();
	}

	public function deconnection(){

		require_once("Views\layout.php");

		require_once("Models\ConnectionModel.php");
		$home = new ConnectionModel;
		$accueil = $home -> connection();
	}

}



?>