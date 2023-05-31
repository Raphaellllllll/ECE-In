<?php 




$fichierCSS = "PROJET PISCINE/fichierAdmin.css"; 
echo "<link rel='stylesheet' type='text/css' href='$fichierCSS'>"; 

 //identifier le nom de base de données 
$database = "site";

//connectez-vous dans votre BDD 
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien) 
$db_handle = mysqli_connect('localhost', 'root', '' ); 
$db_found = mysqli_select_db($db_handle, $database);

//saisir les données du formulaire
$pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$photo = isset($_POST["photo"]) ? $_POST["photo"] : "";
$nom = isset($_POST["nom"]) ? $_POST["nom"] : "";








 //************************************* 
 // si bouton1 (Rechercher) est cliqué 
if (isset($_POST["button1"])){ 
	if ($db_found) { 
 //commencer le query 
		$sql = "SELECT * FROM utilisateurs"; 
		if ($pseudo != "") { 
 //on recherche le livre par son pseudo 
			$sql .= " WHERE pseudo LIKE '%$pseudo%'"; 
 //on cherche ce livre par son email aussi 
			if ($email != "") { 
				$sql .= " AND email LIKE '%$email%'"; 
			} 
		} 
		$result = mysqli_query($db_handle, $sql); 
  //regarder s'il y a des resultats 
		if (mysqli_num_rows($result) == 0) { 
			echo "<p>User not found.</p>"; 
		} else { 
 //on trouve le livre 
			echo "<table border='1'>"; 
			echo "<tr>"; 
			echo "<th>" . "ID" . "</th>"; 
			echo "<th>" . "Pseudo" . "</th>"; 
			echo "<th>" . "Email" . "</th>"; 
			echo "<th>" . "Nom" . "</th>";
			echo "<th>" . "Photo" . "</th>";

 //afficher le resultat 
			while ($data = mysqli_fetch_assoc($result)) { 
				echo "<tr>"; 
				echo "<td>" . $data['ID'] . "</td>"; 
				echo "<td>" . $data['pseudo'] . "</td>"; 
				echo "<td>" . $data['email'] . "</td>"; 
				echo "<td>" . $data['nom'] . "</td>"; 

				$image = $data['photo']; 
				echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>"; 
				echo "</tr>"; 
			} 
			echo "</table>"; 
		} 
	} else { 
		echo "<p>Database not found.</p>"; 
	} 
 } //end Rechercher 
 //*********************************** 
 //si le bouton2 (Ajouter) est cliqué 
 if (isset($_POST["button2"])) { 
 	if ($db_found) { 
 //on cherche le livre 
 		$sql = "SELECT * FROM utilisateurs"; 
 //avec son pseudo et email 
 		if ($pseudo != "") { 
 			$sql .= " WHERE pseudo LIKE '%$pseudo%'"; 
 			if ($email != "") { 
 				$sql .= " AND email LIKE '%$email%'"; 
 			} 
 		} 
 		$result = mysqli_query($db_handle, $sql); 
 //regarder s'il y a de resultat 
 		if (mysqli_num_rows($result) != 0) { 
 			echo "<p>User already exists. Duplicates not allowed.</p>"; 
 		} else { 
 //on ajoute ce livre 
 			$sql = "INSERT INTO utilisateurs(email, pseudo, nom, photo) 
 			VALUES('$email','$pseudo', '$nom', '$photo')"; 
 			$result =mysqli_query($db_handle, $sql); 
 			echo "<p>Add successful.</p>"; 
 //on affiche le nouveau livre ajouté 
 			$sql = "SELECT * FROM utilisateurs"; 
 			if ($pseudo != "") { 
 //on recherche le user par son pseudo 
 				$sql .= " WHERE pseudo LIKE '%$pseudo%'"; 
 //on cherche ce user par son email aussi 
 				if ($email != "") { 
 					$sql .= " AND email LIKE '%$email%'"; 
 				} 
 			} 
 			$result = mysqli_query($db_handle, $sql); 
 			echo "<h2>" . "Informations sur le nouveau User ajouté:" . "</h2>"; 
 			echo "<table border='1'>"; 
 			echo "<tr>"; 
 			echo "<th>" . "ID" . "</th>"; 
 			echo "<th>" . "Pseudo" . "</th>"; 
 			echo "<th>" . "Email" . "</th>"; 
 			echo "<th>" . "Nom" . "</th>";
 			echo "<th>" . "Photo" . "</th>";

 //afficher le resultat 
 			while ($data = mysqli_fetch_assoc($result)) { 
 				echo "<tr>"; 
 				echo "<td>" . $data['ID'] . "</td>"; 
 				echo "<td>" . $data['pseudo'] . "</td>"; 
 				echo "<td>" . $data['email'] . "</td>"; 
 				echo "<td>" . $data['nom'] . "</td>"; 

 				$image = $data['photo']; 
 				echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>"; 
 				echo "</tr>"; 
 			} 
 			echo "</table>"; 
 		} 



 	} else { 
 		echo "<p>Database not found.</p>"; 
 	} 
 } 
  //************************************* 
 //si le bouton3 (Supprimer) est cliqué 
 if (isset($_POST["button3"])) { 
 	if ($db_found) { 
 //on cherche le user 
 		$sql = "SELECT * FROM utilisateurs"; 

 //avec son pseudo et email 
 		if ($pseudo != "") { 
 			$sql .= " WHERE pseudo LIKE '%$pseudo%'"; 
 			if ($email != "") { 
 				$sql .= " AND email LIKE '%$email%'"; 
 			} 
 		} 


 		$result = mysqli_query($db_handle, $sql);

 //regarder s'il y a de resultat 
 		if (mysqli_num_rows($result) == 0) { 
 //ce user n'existe pas 
 			echo "<p>Cannot delete. User not found.</p>"; 
 		} 



 		else { 
 //on supprime ce user
 			while ($data = mysqli_fetch_assoc($result)) { 
 				$id = $data['ID']; 

 			} 
 			if($id==1)
 			{
 				echo "<p>INTERDIT: Vous ne pouvez pas supprimer l'administrateur.</p>"; 
 			}
 			else
 			{
 //on supprime ce user à l'aide de son ID
 				$sql = "DELETE FROM utilisateurs WHERE ID = $id AND ID !=1"; 
 				$result =mysqli_query($db_handle, $sql); 
 				echo "<p>Delete successful.</p>"; 
 			}




 //on affiche le reste des users dans notre BDD 
 			$sql = "SELECT * FROM utilisateurs"; 
 			$result = mysqli_query($db_handle, $sql); 
 			echo "<h2>" . "Les users restants dans ECE In sont:" . "</h2>"; 
 			echo "<table border='1'>"; 
 			echo "<tr>"; 
 			echo "<th>" . "ID" . "</th>"; 
 			echo "<th>" . "Pseudo" . "</th>"; 
 			echo "<th>" . "Email" . "</th>"; 
 			echo "<th>" . "Nom" . "</th>";

 			echo "<th>" . "Photo" . "</th>"; 

 //afficher le resultat 
 			while ($data = mysqli_fetch_assoc($result)) { 
 				echo "<tr>"; 
 				echo "<td>" . $data['ID'] . "</td>"; 
 				echo "<td>" . $data['pseudo'] . "</td>"; 
 				echo "<td>" . $data['email'] . "</td>"; 
 				echo "<td>" . $data['nom'] . "</td>"; 
 				$image = $data['photo']; 
 				echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>"; 
 				echo "</tr>"; 
 			} 
 			echo "</table>"; 
 		} 



 	} else { 
 		echo "<p>Database not found.</p>"; 
 	} 
 } 
 

 

 //fermer la connexion 
 mysqli_close($db_handle); 

 ?> 







 <!DOCTYPE html> 
 <html> 
 <head> 
 	<title>Espace adminstrateur</title> 
 	<meta charset="utf-8"> 
 	<style type="text/css"> 
 		body { 
 			background-color: #eeeeee;
 			font-family: Helvetica, sans-serif;
 			text-align: center;
 			padding: 20px;
 			margin: 0 auto 20px auto;  
 		} 
 		h2 { 
 			text-align: center; 
 			color: white; 
 			background-color: #04048f; 
 			padding: 20px; 
 			width: 600px; 
 			margin: 0 auto 20px auto; 
 			border-radius: 5px; 
 		} 
 		table { 
 			width: 660px; 
 			margin: auto; 
 			background-color: #9999EE; 
 		} 
 		input { 
 			background-color: #6699EE; 
 		} 
 		
 	</style> 
 </head> 
 <body> 
 	<h2>Espace administrateur</h2> 
 	<form action="" method="post"> 

 		<br> Entrez les données utilisateurs, et choisissez l'opération à effectuer:</br>
 		<form action="" method="post"> 
 			<table border="1"> 
 				<tr> 
 					<td size="20">Pseudo</td> 
 					<td><input type="text" name="pseudo" size="70"></td> 
 				</tr> 
 				<tr> 
 					<td>Mail</td> 
 					<td><input type="text" name="email" size="70"></td> 
 				</tr> 
 				<tr>
 					<tr> 
 						<td colspan="2" align="center"> 
 							<input type="submit" name="button1" value="Rechercher"> 
 							<input type="submit" name="button2" value="Ajouter"> 
 							<input type="submit" name="button3" value="Supprimer"> 
 						</td> 
 					</tr> 
 				</table> 

 			</form> 
 		</body> 
 		</html> 


