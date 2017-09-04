<?php 

class InscriptionModel{

	//Permet l'inscription des utilisateurs FONCTIONNEL (06/06/2017)--------------------------------------------------------------
	public function inscription(){
		
		//test l'envois du formulaire
		if(isset($_POST['submit']))
		{
			//Verifie que tout les champs sont bien remplis
			if(!empty($_POST['pseudo'] AND $_POST['mail'] AND $_POST['mail2'] AND $_POST['mdp'] AND $_POST['mdp2']))
			{
				
				//evite les injections de codes
				$pseudo = htmlspecialchars($_POST['pseudo']);
				$mail = htmlspecialchars($_POST['mail']);
				$mail2 = htmlspecialchars($_POST['mail2']);
				//securise l'accès au mot de passse (le hache)//
				$mdp = sha1($_POST['mdp']);
				$mdp2 = sha1($_POST['mdp2']);

				$instance = DB::getInstance();
				$reqpseudo = $instance -> bdd ->prepare("SELECT * FROM utilisateurs WHERE pseudo_utilisateurs=?");
				$reqpseudo->execute(array($pseudo));
				//vérifie que le pseudo n'existe pas déjà
				$pseudoexist = $reqpseudo->rowCount();
				if($pseudoexist == 0)
				{
					//vérifie la taille du pseudo
					$pseudolenght = strlen($pseudo);
					if($pseudolenght<= 255)
					{
						//vérifie la correspondance de l'adresse mail
						if($mail == $mail2)
						{
							//vérifie si c'est bien un mail
							if(filter_var($mail, FILTER_VALIDATE_EMAIL))
							{
								$reqmail =  $instance -> bdd ->prepare("SELECT * FROM utilisateurs WHERE mail_utilisateurs=?");
								$reqmail->execute(array($mail));
								//vérifie que le mail n'existe pas déjà
								$mailexist = $reqmail->rowCount();
								if($mailexist == 0)
								{
									//vérifie la correspondance des mdp
									if($mdp == $mdp2)
									{
										$insertmbr =  $instance -> bdd ->prepare("INSERT INTO utilisateurs (pseudo_utilisateurs, mail_utilisateurs, mdp_utilisateurs) VALUES (?, ?, ?)");
										$insertmbr->execute(array($pseudo, $mail, $mdp));
										

										if($insertmbr){

											echo "votre compte a bien été créer <a href=?action=connecyion> Me connecter";
											
										} 
									}else
									{
										$erreur = "Vos mdp ne sont pas identiques!";
									}
								}else
								{
									$erreur = "adresse mail déjà utilisé";
								}
							}else
							{
								$erreur = "Votre adresse mail n'est pas valide";
							}
						}else
						{
							$erreur = "Vos adresses mail ne correspondent pas";
						}
					}else
					{
						$erreur = "Votre pseudo ne doit pas dépassé 255 caractères";
					}
				}else
				{
					$erreur = "Ce pseudo existe déjà";
				}
			}else
				{
					$erreur = "Tout les champs doivent être complétés";
				}
		}
	}
}
?>