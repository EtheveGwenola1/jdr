<?php
require("C:\wamp64\www\POO\jdr\bdd\db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Views\layout.css">
</head>
<body>

<div align="center" class="container-fluid">
	<h1>Kapoé!</h1>
</div>
<div class="container" align="center">
	<table>
		<tr>
			<th>
				<?php
					if(isset($_SESSION['id_utilisateurs'])){
						?>
						<a href="?action=membre&id=<?php echo $_SESSION['id_utilisateurs'];?>" type="button" class="btn btn-primary">Mon compte</a>
			
						<a href="?action=donjons&id=<?php echo $_SESSION['id_utilisateurs'];?>" type="button" class="btn btn-primary">Donjons</a>

						<a href="?action=deconnection" type="button" class="btn btn-primary">Déconnection</a>
						<?php
					}else{
						?>
						<a href="?action=connection" type="button" class="btn btn-primary">Connection</a>
			
						<a href="?action=inscription" type="button" class="btn btn-primary">Inscription</a>

						<a href="?action=contact" type="button" class="btn btn-primary">Contact</a>
						<?php
					}
					?>
			</th>
		</tr>

	</table>
</div>
<br><br>
</body>
</html>