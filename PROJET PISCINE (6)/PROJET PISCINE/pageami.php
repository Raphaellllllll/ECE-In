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


if($db_found)
{

	if (isset($_GET['id'])) {
		$numAmi = $_GET['id'];
		echo "Votre ami : $numAmi";
	}

	//il faut donc afficher toutes les données de numAmi (comme dans la page VOUS) qui correspond à l'ID de l'ami


	//ça c'estt juste pour afficher le tableau d'ami de cet ami

	echo "<table border='1'>"; 
	echo "<tr>"; 
	echo "<th>" . "Photo" . "</th>"; 
	echo "<th>" . "Nom" . "</th>"; 
	echo "<th>" . "Pseudo" . "</th>"; 
	echo "<th>" . "Description" . "</th>";
	echo "</table>"; 

	for ($i=1; $i<10; $i++){

		$sql = "SELECT * FROM utilisateurs WHERE ID = $numAmi"; 
		$result = mysqli_query($db_handle, $sql); //exécuter une requete sql
		$data = mysqli_fetch_assoc($result);

		if($result && mysqli_num_rows($result) != 0)
		{
			$ami = $data['amis'] ;
			if(strpos(strval($ami), strval($i)) !== false){
				$sql = "SELECT * FROM utilisateurs WHERE ID = $i"; 
				$result = mysqli_query($db_handle, $sql); //exécuter une requete sql

				while ($data = mysqli_fetch_assoc($result)) { 
					echo "<table border='1'>"; 
					echo "<tr>"; 
					$image = $data['photo']; 
					echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>"; 
					echo "<td>" . $data['nom'] . "</td>"; 
					echo "<td>" . $data['pseudo'] . "</td>"; 
					echo "<td>" . $data['description'] . "</td>"; 
					echo "</tr>"; 
					echo "</table>";
				} 
				
			}

		}	
	}


}
//fermer la connection 
mysqli_close($db_handle); 
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Introduction au Bootstrap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.wrapper{
			background-color:  #194B8F;
			position: relative;
			height: 3000px;
			width: 1650px;
		}
		.header{
			background-color: white;
			border: 1px solid grey;
			border-color: black;
			height: 80px;
			width: 1650px;
			position: absolute;
			margin: auto;
			top: 0px;
			bottom: 2920px;
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
			width: 1650px;
			position: absolute;
			margin: auto;
			top: 0px;
			bottom:2770px;
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




.footer{
	background-color: white;
	border: 1px solid grey;
	border-color: black;
	position: absolute;
	height: 200px;
	width: 1650px;
	margin:auto;
	top: 2700px;
	bottom: 0;
	right: 800px;
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
	right: 600px;
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
	position: absolute;
	margin: auto;
	top: 75px;
	bottom: 0px;
	right: 1100px;
	left: 50px;
}
.footer #texte2{
	position: absolute;
	margin: auto;
	top: 30px;
	bottom: 0px;
	right: 0px;
	left: 50px;
}

.footer #texte3{
	position: absolute;
	margin: auto;
	top: 88px;
	bottom: 0px;
	right: 0px;
	left: 80px;
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
<body>
	<div class="wrapper" >

		<div class="header">
			<h2 style="color: #194B8F;"><center>    Social Media Professionnel de l'ECE Paris</h2><center>
				<img src="logopro.png" height="70px" width="90px" id="imagelogo">

			</div>
			<div class="navigation">


				<a href="accueil.php"><img src="Accueil.png" width="107" height="60px" id="bouton1"></a>
				<a href="monreseau.php"><img src="Reseau.png" width="120px" height="60px" id="bouton2"></a>
				<a href="vous.html" ><img src="Vous.png" width="107" height="55px" id="bouton3"></a>
				<a href="notifications.html"><img src="Notifications.png" width="120px" height="60px" id="bouton4"></a>
				<a href="messagerie.html"><img src="Messagerie.png" width="107" height="60px" id="bouton5"></a>
				<a href="emplois.html"><img src="Emplois.png" width="107" height="60px" id="bouton6"></a>

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
						<p id="texte5"><a href="accueil.html">Accueil</a></p>
						<p id="texte6"><a href="monreseau.php">Mon Reseau</a></p>
						<p id="texte7"><a href="vous.html" >Vous</a></p>
						<p id="texte8"><a href="notifications.html">Notifications</a></p>
						<p id="texte9"><a href="messagerie.html">Messagerie</a></p>
						<p id="texte10"><a href="emplois.html">Emplois</a></p>


						<small>Copyright &copy; 2023, ECE ln, Social Media Professionnel de l'ECE Paris</small>
					</div>




				</div>
			</div>
		</body>
	</body>
	</html>