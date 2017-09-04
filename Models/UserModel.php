<?php

class UserModel
{
	
	public function user(){

		if (isset($_GET['id']) AND $_GET['id'] > 0) {
			
			$getId = intval($_GET['id']);
			$instance = DB::getInstance();
			$select = $instance -> bdd -> prepare("SELECT * FROM utilisateurs WHERE id_utilisateurs = ?");
			$select -> execute(array($getId));
			$userInfo = $select->fetch();

			include("Views\user\user.php");
		}
	}
}
?>