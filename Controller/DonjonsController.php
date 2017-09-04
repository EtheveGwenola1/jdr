<?php

class DonjonsController
{
	
	public function donjons(){

		session_start();
		
		require_once("Views\layout.php");
		require_once("Views\donjon\donjon.php");
	}

	public function detail(){
		session_start();
		require_once("Views\layout.php");

		switch ($_GET['action']) {
			case '1':
				require_once("Views\donjon\D1.php");
				require_once("Models\DonjonsModel.php");
				$donjon = new DonjonsModel;
				$level = $donjon -> D1();
				break;

			case '2':
				require_once("Model\DonjonsModel.php");
				$donjon = new DonjonsModel;
				$level = $donjon -> D2();
				break;

			case '3':
				require_once("Model\DonjonsModel.php");
				$donjon = new DonjonsModel;
				$level = $donjon -> D3();
				break;

			case '4':
				require_once("Model\DonjonsModel.php");
				$donjon = new DonjonsModel;
				$level = $donjon -> D4();
				break;
			
			default:
				# code...
				break;
		}
	}
}
?>