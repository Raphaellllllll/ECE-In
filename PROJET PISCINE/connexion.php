<?php 

session_start(); 

error_reporting(E_ALL);
ini_set('display_errors', 1);

//identifier le nom de base de données 
$database = "site";

//connectez-vous dans votre BDD 
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien) 
$db_handle = mysqli_connect('localhost', 'root', '' ); 
$db_found = mysqli_select_db($db_handle, $database);

//saisir les données du formulaire
$pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";

if(isset($_POST["Soumettre"]))
{
	if($db_found)
	{
		if(!empty($pseudo))
		{
			$sql = "SELECT * FROM utilisateurs WHERE pseudo LIKE '%$pseudo%'"; 
			$result = mysqli_query($db_handle, $sql); //exécuter une requete sql

			if($result && mysqli_num_rows($result) != 0)
			{
				$_SESSION['pseudo'] = $_POST['pseudo'];
				$_SESSION['email'] = mysqli_fetch_assoc($result)['email'];
				if ($_SESSION['pseudo'] == 'admin' && $_SESSION['email'] == 'admin@edu.ece.fr') {
        // Afficher la page d'administration
					echo '<script>window.location.href = "administrateur.php";</script>';


					
				}

			}
			else
			{
				echo "Aucun utilisateur trouvé";
			}
		}
		else
		{
			echo "Veuillez saisir un pseudo";
		}
	}
	else
	{
		echo "Database not found";
	}
}

//fermer la connection 
mysqli_close($db_handle); 
?>







<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8"> <!-- Encodage de la page -->
	<style type="text/css">
		.connexion {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.connexion form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.connexion table {
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div class="connexion">
		<form action="connexion.php" method="POST">
			<table>
				<tr>
					<td>Pseudo:</td>
					<td><input type="text" name="pseudo"></td>
				</tr>
				<tr>
					<td>E-mail:</td>
					<td><input type="text" name="email"></td>
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