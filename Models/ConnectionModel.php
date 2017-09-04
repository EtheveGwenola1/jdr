<?php

class ConnectionModel
{
	
	public function connection(){
		//Connection utilisateurs FONCTIONNEL + SECU (06/06/2017)------------------------------------------------------------------------
		if(isset($_POST['formconnexion'])){

			$pseudoconnect=htmlspecialchars($_POST['pseudoconnect']);
			$mdpconnect=sha1($_POST['mdpconnect']);

			$instance= DB::getInstance();
			$user= $instance-> bdd->prepare("SELECT * FROM utilisateurs WHERE pseudo_utilisateurs=? AND mdp_utilisateurs=? ");
			$user->execute(array($pseudoconnect, $mdpconnect));
			$userexist = $user->rowCount();

			if($userexist == 1){
				
				$user= $instance-> bdd->prepare("SELECT * FROM utilisateurs WHERE pseudo_utilisateurs=? AND mdp_utilisateurs=? ");
				$user->execute(array($pseudoconnect, $mdpconnect));
				$userexist = $user->rowCount();
				$userinfo = $user->fetch();
				$_SESSION['id_utilisateurs'] = $userinfo['id_utilisateurs'];
				$_SESSION['pseudo_utilisateurs'] = $userinfo['pseudo_utilisateurs'];
				$_SESSION['mdp_utilisateurs'] = $userinfo['mdp_utilisateurs'];
				header("Location: index.php?action=membre&id=".$_SESSION['id_utilisateurs']);
			}
		}
	}

	public function deconnection(){

		session_start();
		$_SESSION = array();
		session_destroy();
		header("Location: index.php?action=accueil");
	}
}


?>