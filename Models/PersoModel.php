<?php

class Perso
{
	//Le perso prend de base les valeur récup par hydrate
	function __construct(argument)
	{
		$this -> hydrate($donnes);
	}

	//Implémente le constructeur en lui donnant des valeurs
	public function hydrate(){

	}

}

//Gère le personnage
class PersoManager extends UserController
{
	
	//Le perso prend de base les valeur récup par hydrate
	function __construct(argument)
	{
		$this -> hydrate($donnes);
	}

	//Implémente le constructeur en lui donnant des valeurs
	public function hydrate(){

	}

	//Crée un perso
	public function createPerso(){

	}

	//Modifie un perso
	public function modifyPerso(){

	}

	//Supprimer un perso
	public function deletePerso(){
		
	}
}


?>