<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div align="center" class="container">
	<p>Nom : <?php echo $userInfo['pseudo_utilisateurs']; ?></p>
	<p>Mail : <?php echo $userInfo['mail_utilisateurs']; ?></p>
	<br>
	<a href="?action=perso&id=<?php echo $userInfo['id_utilisateurs']; ?>"><input type="button" class="btn btn-success" name="modifier" value="Créer un perso"></a>
	<a href="?action=modifier"><input type="button" class="btn btn-success" name="modifier" value="modifier"></a>
	<a href="?action=deconnection"><input type="button" class="btn btn-success" name="modifier" value="deconnection"></a>

</div>
	


</body>
</html>