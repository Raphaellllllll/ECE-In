<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Identifier le nom de la base de données
$database = "site";

// Connectez-vous à votre base de données
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

// Saisir les données du formulaire
$projet = isset($_POST["projet"]) ? $_POST["projet"] : "";
$date_proj = isset($_POST["date_proj"]) ? $_POST["date_proj"] : "";
$date_fin_proj = isset($_POST["date_fin_proj"]) ? $_POST["date_fin_proj"] : "";
$description_proj = isset($_POST["description_proj"]) ? $_POST["description_proj"] : "";
$formation = isset($_POST["formation"]) ? $_POST["formation"] : "";
$date_for = isset($_POST["date_for"]) ? $_POST["date_for"] : "";
$description_for = isset($_POST["description_for"]) ? $_POST["description_for"] : "";

$photo = isset($_FILES["photo"]["name"]) ? $_FILES["photo"]["name"] : "";


$nom=isset($_POST["nom"]) ? $_POST["nom"] : "";








// Fermer la connexion

?>




<!DOCTYPE html><!--version 5*-->
<html>
<head>
	<meta charset="utf-8">
	<!--configuration ensemble caractère appartient à utf-8-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--adaptable à la machine utilisée, taille depend de notre machine-->
	<title>Modifier mes informations</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/tuto.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<style type="text/css">
		

		* {
			font-family: "Roboto", sans-serif;
		}



		.wrapper{
			background-color:  #6da1e8;
			position: relative;
			height: 9000px;
			width: auto;
		}
		.header{
			background-color: white;
			border: 1px solid grey;
			border-color: black;
			height: 80px;
			width: auto;
			position: absolute;
			margin: auto;
			top: 0px;
			bottom: 8920px;
			right: 0;
			left: 0;
		}


		.modification 
		{
			background-color: white;
			border: 1px solid grey;
			border-color: black;
			height: 80px;
			width: auto;
			position: absolute;
			margin: 20px;
			top: 200px;
			bottom: 8920px;
			right: 0;
			left: 0;
		}

		.profilVrai 
		{
			
			height: 80px;
			width: auto;
			position: absolute;
			margin: auto;
			top: 300px;
			bottom: 8920px;
			right: 0;
			left: 0;
		}


		

		/* LES BALISES QUI SE TROUVENT DANS LE HEADER */
		.header h2{
			position: absolute;
			top: 10px;
			bottom: 0;
			right: 0px;
			left: 0px;
			text-decoration-color: blue;
		}

		.header #imagelogo{
			position: absolute;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 650px;
			left: 0px;

		}

		.navigation{
			background-color: white;
			border: 1px solid grey;
			border-color: black;
			height: 80px;
			width: auto;
			position: absolute;
			margin: auto;
			top: 0px;
			bottom:8770px;
			right: 0;
			left: 0;
		}



		/* LES BOUTONS QUI SONT DANS LA NAVIGATION */

		#bouton1{
			position: absolute;
			margin: center;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 750px;
			left: 0px;
		}

		#bouton2{
			position: absolute;
			margin: center;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 450px;
			left: 0px;
		}

		#bouton3{
			position: absolute;
			margin: center;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 150px;
			left: 0px;
		}

		#bouton4{
			position: absolute;
			margin: center;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 0;
			left: 150px;
		}

		#bouton5{
			position: absolute;
			margin: center;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 0;
			left: 450px;
		}

		#bouton6{
			position: absolute;
			margin: center;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 0;
			left: 750px;
		}

		.container{


			height: 1000px;
			width: 1100px;
			position: absolute;
			margin: auto;
			top: 0px;
			bottom:7500px;
			right: 0;
			left: 0;
		}
		.container p{
			text-align: justify;
			text-align: center;
			text-decoration-color: white;
		}

		.container h2{
			position: absolute;
			margin: auto;
			top: 250px;
			bottom:0px;
			right: 0;
			left: 0;
		}

		.container h1{
			position: absolute;
			margin: auto;
			top: 2050px;
			bottom:0px;
			right: 0;
			left: 0;
		}



		.carousel-slide{
			position: absolute;
			margin: auto;
			top: 400px;
			bottom:0px;
			right: 0;
			left: 0;
		}



		.section{
			background-color:#194B8F;
			border: 2px solid grey;
			position: absolute;
			height:400px;
			width: 450px;
			margin: auto;
			top: 250px;
			bottom: 0px;
			right: 0px;
			left: 800px;
		}

		.section h3{
			position: absolute;
			margin: auto;
			color: white;
			top: 50px;
			bottom: 0px;
			right: 0px;
			left: 0px;
		}


		.section p{
			position: absolute;
			margin: auto;
			color: white;
			top: 150px;
			bottom: 0px;
			right: 10px;
			left: 10px;
			text-align: left;
		}

		.webinaire{
			position: absolute;
			margin: auto;
			top: 950px;
			bottom:0px;
			right: 0;
			left: 70px;
		}

		.webinaire img{
			height:500px;
			width: 600px;
		}

		.section2{
			background-color:#194B8F;
			border: 2px solid grey;
			position: absolute;
			height:400px;
			width: 450px;
			margin: auto;
			top: 1200px;
			bottom: 0px;
			right: 0px;
			left: 800px;
		}

		.section2 h3{
			position: absolute;
			margin: auto;
			color: white;
			top: 50px;
			bottom: 0px;
			right: 0px;
			left: 0px;
		}


		.section2 p{
			position: absolute;
			margin: auto;
			color: white;
			top: 150px;
			bottom: 0px;
			right: 10px;
			left: 10px;
			text-align: left;
		}

		.evenement{
			position: absolute;
			margin: auto;
			top: 1500px;
			bottom:0px;
			right: 0;
			left: 70px;
		}

		.evenement img{
			height:500px;
			width: 600px;
		}

		.section3{
			background-color:#194B8F;
			border: 2px solid grey;
			position: absolute;
			height:400px;
			width: 450px;
			margin: auto;
			top: 1750px;
			bottom: 0px;
			right: 0px;
			left: 800px;
		}

		.section3 h3{
			position: absolute;
			margin: auto;
			color: white;
			top: 50px;
			bottom: 0px;
			right: 0px;
			left: 0px;
		}


		.section3 p{
			position: absolute;
			margin: auto;
			color: white;
			top: 150px;
			bottom: 0px;
			right: 10px;
			left: 10px;
			text-align: left;
		}

		.votrePublication{
			background-color: white;
			border: 1px solid grey;
			border-color: black;
			height: 150px;
			width: 800px;
			position: absolute;
			border-radius: 20px;
			margin: auto;
			top: 2200px;
			bottom: 0px;
			right: 0;
			left: 0;
		}


		.votrePublication #imageProfil{
			height: 100px;
			width: 100px;
			position: absolute;
			margin: auto;
			top:0px;
			bottom: 0px;
			right: 650px;
			left: 0;
		}

		.votrePublication #bouton{
			height: 80px;
			width: 600px;
			position: absolute;
			margin: auto;
			top:0px;
			bottom: 0px;
			right: 0px;
			left: 100px;
		}




		.publication1{
			background-color: white;
			border: 1px solid grey;
			border-color: black;
			height: 1300px;
			width: 800px;
			position: absolute;
			margin: auto;
			top: 3000px;
			bottom: 0px;
			right: 0;
			left: 0;
		}

		.publication1 img{
			height: 100px;
			width: 100px;
			position: absolute;
			margin: auto;
			top:0px;
			bottom: 1150px;
			right: 650px;
			left: 0;
		}

		.publication1 h4{
			position: absolute;
			margin: auto;
			top:40px;
			bottom: 0px;
			right: 0px;
			left: 160px;
		}

		.publication1 h6{
			position: absolute;
			margin: auto;
			top:60px;
			bottom: 0px;
			right: 0px;
			left: 160px;
			color: grey;
		}

		.publication2{
			background-color: white;
			border: 1px solid grey;
			border-color: black;
			height: 1300px;
			width: 800px;
			position: absolute;
			margin: auto;
			top: 4500px;
			bottom: 0px;
			right: 0;
			left: 0;
		}

		.texte{
			position: absolute;
			margin: auto;
			top:150px;
			bottom: 0px;
			right: 0px;
			left: 0px;
		}

		.texte p{
			text-align: left;
		}

		.texte #image1{
			height: 400px;
			width: 300px;
			position: absolute;
			margin: auto;
			top:50px;
			bottom: 0px;
			right: 400px;
			left: 0px;
		}
		.texte #image2{
			height: 450px;
			width: auto;
			position: absolute;
			margin: auto;
			top:50px;
			bottom: 0px;
			right: 0px;
			left: 400px;
		}

		.footer{
			background-color: white;
			border: 1px solid grey;
			border-color: black;
			position: absolute;
			height: 200px;
			width: auto;
			margin:auto;
			top: 8900px;
			bottom: 0;
			right: 0px;
			left: 0px;
		}

		.footer a{
			position: absolute;
			margin: auto;
			top: 70px;
			z-index: 2;
			bottom: 0px;
			right: 360px;
			left: 450px;

		}
		.footer #a1{
			position: absolute;
			margin: auto;
			z-index: 3;
			top: 60px;
			bottom: 90px;
			right: 650px;
			left: 690px;

		}
		.footer #imagelogo{
			position: absolute;
			margin: auto;
			top: 0px;
			bottom: 110px;
			right: 1500px;
			left: 0px;

		}
		.footer small{
			position: absolute;
			margin: auto;
			top: 160px;
			bottom: 0px;
			right: 1180px;
			left: 0px;
		}
		.footer h4{
			position: absolute;
			margin: auto;
			top: 30px;
			bottom: 0px;
			right: 1070px;
			left: 0px;
		}
		.footer #texteFooter{
			height: 80px;
			width: 400px;
			position: absolute;
			margin: auto;
			top: 35px;
			bottom: 0px;
			right: 1200px;
			left: 50px;
		}
		.footer #texte2{
			position: absolute;
			margin: auto;
			top: 30px;
			bottom: 0px;
			right: 0px;
			left: 10px;
		}

		.footer #texte3{
			position: absolute;
			margin: auto;
			top: 88px;
			bottom: 0px;
			right: 0px;
			left: 30px;
		}

		.footer #texte4{
			position: absolute;
			margin: auto;
			top: 30px;
			bottom: 0px;
			right: 0px;
			left: 600px;
		}
		.footer #texte5{
			position: absolute;
			margin: auto;
			top: 0px;
			bottom: 200px;
			right: 0px;
			left: 470px;
		}
		.footer #texte6{
			position: absolute;
			margin: auto;
			top: 20px;
			bottom: 0px;
			right: 0px;
			left: 505px;
		}
		.footer #texte7{
			position: absolute;
			margin: auto;
			top: 40px;
			bottom: 0px;
			right: 0px;
			left: 460px;
		}
		.footer #texte8{
			position: absolute;
			margin: auto;
			top: 60px;
			bottom: 0px;
			right: 0px;
			left: 505px;
		}
		.footer #texte9{
			position: absolute;
			margin: auto;
			top: 80px;
			bottom: 0px;
			right: 0px;
			left: 505px;
		}
		.footer #texte10{
			position: absolute;
			margin: auto;
			top: 100px;
			bottom: 0px;
			right: 0px;
			left: 480px;
		}



	</style>
</head>
<body><!--programmation-->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<div class="wrapper" >

		<div class="header">
			<h2 style="color: #194B8F;"><center>    Social Media Professionnel de l'ECE Paris</h2><center>
				<img src="logopro.png" height="70px" width="90px" id="imagelogo">

			</div>
			<div class="navigation">


				<a href="accueil.php"><img src="Accueil.png" width="107" height="60px" id="bouton1"></a>
				<a href="monreseau.php"><img src="Reseau.png" width="120px" height="60px" id="bouton2"></a>
				<a href="vous.php"><img src="Vous.png" width="107" height="55px" id="bouton3"></a>
				<a href="notifications.html"><img src="Notifications.png" width="120px" height="60px" id="bouton4"></a>
				<a href="messagerie.html"><img src="Messagerie.png" width="107" height="60px" id="bouton5"></a>
				<a href="emplois.html"><img src="Emplois.png" width="107" height="60px" id="bouton6"></a>

			</div>


			

			<div class="milieu">
				<div class="row">

					<div class="col-md-12" >

						<div class="modification">





							<h1 align="center"> Votre profil <h1>



								<?php

								if (isset($_POST["button1"])) 
								{
									if ($db_found)
									{





										///PHOTO//////
										$sql = "SELECT * FROM utilisateurs"; 
										$result = mysqli_query($db_handle, $sql); 


										$temp_name = $_FILES["photo"]["name"];
										move_uploaded_file($temp_name, './upload/' . $photo);




        //INSERER

            // Déplacer le fichier vers un répertoire de destination

										$temp_name = $_FILES["photo"]["name"];
										move_uploaded_file($temp_name, './upload/' . $photo);

										if (!empty($temp_name) ) {
											$sql = "UPDATE utilisateurs
											INNER JOIN numero ON utilisateurs.ID = numero.id
											SET utilisateurs.photo = '$temp_name'     
											WHERE utilisateurs.ID = numero.id";

											$result = mysqli_query($db_handle, $sql);



											if ($result) {
												echo "<p>Mise à jour photo réussie..</p>";

            // Afficher les nouvelles informations de l'utilisateur
												$sql = "SELECT * FROM utilisateurs
												INNER JOIN numero ON utilisateurs.ID = numero.id
												WHERE utilisateurs.ID = numero.id";
												$result = mysqli_query($db_handle, $sql);

												if ($result && mysqli_num_rows($result) > 0) {
													echo "<h2 >Votre photo :</h2>";


													while ($data = mysqli_fetch_assoc($result)) {
														$photo = $data['photo'];


														$image = 'upload/' . $photo;
														echo "<td>" . "<img src='$image' height='140' width='120'>" . "</td>"; 

														echo "</tr>"; 
													}


												}
											} 

										}

										else {
											echo "<p> Voici votre photo:</p>";
											$sql = "SELECT * FROM utilisateurs
											INNER JOIN numero ON utilisateurs.ID = numero.id
											WHERE utilisateurs.ID = numero.id";
											$result = mysqli_query($db_handle, $sql);

											if ($result) {

												$sql = "SELECT utilisateurs.photo FROM utilisateurs INNER JOIN numero ON utilisateurs.ID = numero.id";

												$result = mysqli_query($db_handle, $sql);
												if (mysqli_num_rows($result) > 0) {

													while ($data = mysqli_fetch_assoc($result)) {
														$image = $data['photo']; 
														echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>"; 
														echo "</tr>";
														echo "<br>";
													}






												}
											}
										}




////// NOM /////////


										if (!empty($nom)) {
											$sql = "UPDATE utilisateurs
											INNER JOIN numero ON utilisateurs.ID = numero.id
											SET utilisateurs.nom = '$nom'     
											WHERE utilisateurs.ID = numero.id";



											$result = mysqli_query($db_handle, $sql);



											if ($result) 
											{
												echo "<p>Mise à jour nom réussie..</p>";

            // Afficher les nouvelles informations de l'utilisateur
												$sql = "SELECT * FROM utilisateurs
												INNER JOIN numero ON utilisateurs.ID = numero.id
												WHERE utilisateurs.ID = numero.id";
												$result = mysqli_query($db_handle, $sql);

												if ($result && mysqli_num_rows($result) > 0) 
												{
													echo "<h2 >Votre nom :</h2>";


													while ($data = mysqli_fetch_assoc($result)) 
													{
														echo "<td top: 400px;>" . $data['nom'] . "</td>"; 

														echo "</tr>"; 
													}


												}
											} 
										}
										else {
											echo "<p>. Voici le nom:</p>";

											$sql = "SELECT * FROM utilisateurs
											INNER JOIN numero ON utilisateurs.ID = numero.id
											WHERE utilisateurs.ID = numero.id";
											$result = mysqli_query($db_handle, $sql);
											if ($result) {

												$sql = "SELECT utilisateurs.nom FROM utilisateurs INNER JOIN numero ON utilisateurs.ID = numero.id";

												$result = mysqli_query($db_handle, $sql);
												if (mysqli_num_rows($result) > 0) {

													while ($data = mysqli_fetch_assoc($result)) {


														echo "<td>" . $data['nom'] . "</td>";




													}


												}
											}
										}
///// FIN NOM//////



        // FORMATION//////
										if (!empty($formation) && !empty($date_for) && !empty($description_for)) {

											$sql = "INSERT INTO formations (formation, date_for, description_for, ID_utilisateur)
											SELECT '$formation', '$date_for', '$description_for', numero.id
											FROM numero";



											$result = mysqli_query($db_handle, $sql);



											if ($result) {
												echo "<p>Insertion réussie.</p>";

            // Afficher les nouvelles informations de la formation
												$sql = "SELECT * FROM formations
												INNER JOIN numero ON formations.ID_utilisateur = numero.id
												WHERE formations.ID_utilisateur = numero.id";
												$result = mysqli_query($db_handle, $sql);

												if ($result && mysqli_num_rows($result) > 0) {
													echo "<h2>Informations sur la nouvelle formation ajoutée et vos formations :</h2>";
													echo "<table border='1'>";
													echo "<tr>";
													echo "<th>ID_utilisateur</th>";
													echo "<th>Formation</th>";
													echo "<th>Date</th>";
													echo "<th>Description</th>";

													while ($data = mysqli_fetch_assoc($result)) {
														echo "<tr>";
														echo "<td>" . $data['ID_utilisateur'] . "</td>";
														echo "<td>" . $data['formation'] . "</td>";
														echo "<td>" . $data['date_for'] . "</td>";
														echo "<td>" . $data['description_for'] . "</td>";
														echo "</tr>";
													}

													echo "</table>";
												}
											}


										}
										else {
											echo "<p> Voici vos données:.</p>";

											$sql = "SELECT * FROM formations
											INNER JOIN numero ON formations.ID_utilisateur = numero.id
											WHERE formations.ID_utilisateur = numero.id";
											$result = mysqli_query($db_handle, $sql);


											if ($result) {

												$sql = "SELECT * FROM formations WHERE ID_utilisateur = (SELECT id FROM numero)";

												$result = mysqli_query($db_handle, $sql);
												
												echo "<h2>Formations :</h2>";
												while ($data = mysqli_fetch_assoc($result)) {
													echo "<table border='1'>";
													echo "Formation : " . $data["formation"] . "<br>";
													echo "Date : " . $data["date_for"] . "<br>";
													echo "Description : " . $data["description_for"] . "<br>";
													echo "ID utilisateur : " . $data["ID_utilisateur"] . "<br>";
													echo "<br>";
													echo "</table>";
												}
												
											}
										}

//////PROJETS///////
										if (!empty($projet) && !empty($date_proj) && !empty($date_fin_proj) && !empty($description_proj)) {

											$sql = "INSERT INTO projets (ID_utilisateur, projet, date_proj, date_fin_proj, description_proj)
											SELECT numero.id, '$projet', '$date_proj', '$date_fin_proj', '$description_proj'
											FROM numero";

											$result = mysqli_query($db_handle, $sql);



											if ($result) {
												//echo "<p>Insertion réussie.</p>";

            // Afficher les nouvelles informations du projet
												$sql = "SELECT * FROM projets
												INNER JOIN numero ON projets.ID_utilisateur = numero.id
												WHERE projets.ID_utilisateur = numero.id";
												$result = mysqli_query($db_handle, $sql);

												if ($result && mysqli_num_rows($result) > 0) {
													echo '<h2 style="color: white;">Informations sur le nouveau projet ajouté et vos projets:</h2>';

													echo "<table border='1'>";
													echo "<tr>";
													echo "<th>ID</th>";
													echo "<th>Projet</th>";
													echo "<th>Date début</th>";
													echo "<th>Date fin</th>";
													echo "<th>Description</th>";

													while ($data = mysqli_fetch_assoc($result)) {
														echo "<tr>";
														echo "<td>" . $data['ID_utilisateur'] . "</td>";
														echo "<td>" . $data['projet'] . "</td>";
														echo "<td>" . $data['date_proj'] . "</td>";
														echo "<td>" . $data['date_fin_proj'] . "</td>";
														echo "<td>" . $data['description_proj'] . "</td>";

														echo "</tr>";
													}

													echo "</table>";
												}
											}
										}
										else {
											echo "<p> Voici vos données:</p>";

											$sql = "SELECT * FROM formations
											INNER JOIN numero ON formations.ID_utilisateur = numero.id
											WHERE formations.ID_utilisateur = numero.id";
											$result = mysqli_query($db_handle, $sql);

											if ($result) {
												$sql = "SELECT * FROM projets WHERE ID_utilisateur = (SELECT id FROM numero)";

												$result = mysqli_query($db_handle, $sql); 



												if ( mysqli_num_rows($result) > 0) {
													echo "<h2> Projets :</h2>";
													while ($data = mysqli_fetch_assoc($result)) {
														echo "Projet : " . $data["projet"] . "<br>";
														echo "Date : " . $data["date_proj"] . "<br>";
														echo "Description : " . $data["description_proj"] . "<br>";
														echo "ID utilisateur : " . $data["ID_utilisateur"] . "<br>";
														echo "Date fin projet : " . $data["date_fin_proj"] . "<br>";
														echo "<br>"; 

													}
												}

											}
										}








									}





									else {
										echo "<p>Database not found.</p>";
									}

								}
								














								?>

								<h3 style="color: #FFFFFF;">Ajouter une nouvelle formation </h3>
								<form action="" method="POST" enctype="multipart/form-data">

									<table border="1">
										<tr>
											<td style="color: #FFFFFF;">Nom de la formation :</td>

											<td><input type="text"name="formation" style="color: black;"> </td>
										</tr>

										<tr>
											<td style="color: #FFFFFF;">Date :</td>
											<td><input type="date"name="date_for"> </td>
										</tr>
										<tr>
											<td style="color: #FFFFFF;">Informations sur la formation :</td>

											<td><textarea name="description_for" ></textarea></td>
										</tr>

										


									</table>






									<h3 style="color: #FFFFFF;">Ajouter une nouvelle expérience (projets, etc)</h3>

									<!--il faut le mettre parce que sinon, input ne marche pas-->
									
									<tr>
										<td style="color: #FFFFFF;">Expérience (projets):</td>
										<!--input : permet à l'utilisateur de saisir qlq chose/ name : récupérer ce qu'il a tapé, c'est comme une variable/ text : écrire un texte/ password : ce qui est écrit est caché/ submit : pour un bouton/ Value : coontroler le nom du bouton-->
										<td><input type="text"name="projet" style="color: black;"> </td>
									</tr>

									<tr>
										<td style="color: #FFFFFF;">Date :</td>
										<td><input type="date"name="date_proj"> </td>
									</tr>
									<tr>
										<td style="color: #FFFFFF;">Date de fin :</td>
										<td><input type="date"name="date_fin_proj"> </td>
									</tr>
									<tr>
										<td style="color: #FFFFFF;">Informations sur le projet :</td>
										<!--input : permet à l'utilisateur de saisir qlq chose/ name : récupérer ce qu'il a tapé, c'est comme une variable/ text : écrire un texte/ password : ce qui est écrit est caché/ submit : pour un bouton/ Value : coontroler le nom du bouton-->
										<td><textarea name="description_proj" ></textarea></td>
									</tr>
									<!--input: faire un bouton de validation-->
									<!--colspan : combien de colonne il va occuper-->



									







									<h3 id="publier" style="color: #FFFFFF;" >Insérer votre photo de profil</h3>


									
									<tr>
										<td>Image:</td>
										<td><input type="file" name="photo"></td>
										<img id="preview" src="#" alt="Aperçu de l'image" height="120" width="120" style="display: none;">
									</tr>




									





									<h3 style="color: #FFFFFF;">Entrez votre nom complet</h3>
									
									<!--il faut le mettre parce que sinon, input ne marche pas-->

									<tr>
										<td style="color: #FFFFFF;">Nom :</td>
										<!--input : permet à l'utilisateur de saisir qlq chose/ name : récupérer ce qu'il a tapé, c'est comme une variable/ text : écrire un texte/ password : ce qui est écrit est caché/ submit : pour un bouton/ Value : coontroler le nom du bouton-->
										<td><input type="text"name="nom" style="color: black;"> </td>
									</tr>


									<!--input: faire un bouton de validation-->
									<!--colspan : combien de colonne il va occuper-->
									<td colspan="2"align="center">
										<input type="submit"name="button1"value="Valider" style="color:black;">   
									</td>


								</table>

							</form> 
							
							




							<div class="formation">


							</div>
							






							




















							<div class="footer">
								<center><img src="logopro.png" height="50px" width="70px" id="imagelogo"><center>
									<h4 style="color: #194B8F"><center>    Social Media Professionnel de l'ECE Paris</h4><center>
										<div id="texteFooter">
											<p id="texte1" style="text-align: left;" >Notre site est là pour vous aider à trouver un travail qui vous correspond, à rester en contact avec vos amis et des professionnels, et être au courant des dernières informations et évènements à ne pas rater</p>

										</div>

										<p id="texte2" style="color:#194B8F"><b>CONTACT</b></p>
										<p id="texte3" >01 90 78 56 45</p>
										<a id="a1" href="eceln@gmail.com">eceln@gmail.com</a>

										<p id="texte4" style="color:#194B8F"><b>NAVIGATION</b></p>
										<p id="texte5"><a href="accueil.php">Accueil</a></p>
										<p id="texte6"><a href="monreseau.php">Mon Reseau</a></p>
										<p id="texte7"><a href="vous.php" >Vous</a></p>
										<p id="texte8"><a href="notifications.html">Notifications</a></p>
										<p id="texte9"><a href="messagerie.html">Messagerie</a></p>
										<p id="texte10"><a href="emplois.html">Emplois</a></p>


										<small>Copyright &copy; 2023, ECE ln, Social Media Professionnel de l'ECE Paris</small>
									</div>










								</body>

								<?php

								mysqli_close($db_handle); 

								?> 

								</html>







