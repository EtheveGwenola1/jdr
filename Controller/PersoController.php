<?php

class PersoController
{
	
	public function createPerso()
	{
		session_start();
		
		require("Views\layout.php");
		require("Views\Perso\createPerso.php");
	}
}

?>