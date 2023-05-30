<!DOCTYPE html>
<html>
<head>
	<title>Verifier utilisateur et son mot de passe</title>
	<meta charset="utf-8">
	<style type="text/css">

		.connexion img{
			height: 800px;
			width: 1000px;
			position: relative;

		}
		.connexion form{
			text-align: center;
			position: absolute;
			margin: auto;
			top: 300px;
			bottom: 0px;
			right: 0;
			left: 1200px;
		}

		.connexion table {
			width: 400px;
		}
	</style>

	<?php

	$database = "projet";
	//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	$login = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
	$pass = isset($_POST["email"]) ? $_POST["email"] : "";

	if($db_found){
		
	}

// Vérifier si l'utilisateur est présent dans le tableau
	$found = false;
	foreach ($users as $user => $password) {
		if ($user == $login) {
			$found = true;
			break;
		}
	}

// Vérifier si l'utilisateur et le mot de passe correspondent
	$connexion = false;
	if ($found) {
		if ($users[$login] == $pass) {
			$connexion = true;
		}
	}

// Afficher le message correspondant
	if (!$found) {
		echo "Connexion refusée. Utilisateur inconnu.";
	} else {
		if ($connexion) {
			if ($login == "Stelly") {
				echo "Bienvenue, vous êtes un élève.";
			} elseif ($login == "Hina") {
				echo "Bienvenue, vous êtes un professeur.";
			}
		} else {
			echo "Connexion refusée. Mot de passe invalide.";
		}
	}
	?>

</head>


<body>
	<div class="connexion" >

		<img src="img1.png">

		<form action="connexion.php" method="post" >
			<table border="2">
				<tr>
					<td>Identifiant:</td>
					<td><input type="text" name="identifiant"></td>
				</tr>
				<tr>
					<td>Mot de passe:</td>
					<td><input type="password" name="passw"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="Soumettre">
					</td>
				</tr>
			</table>
		</form>

	</div>
</body>





</html>