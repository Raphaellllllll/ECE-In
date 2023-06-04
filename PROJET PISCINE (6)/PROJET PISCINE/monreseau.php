<?php 

session_start(); 

error_reporting(E_ALL);
ini_set('display_errors', 1);
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
    <link href="monreseau.css" rel="stylesheet" type="text/css" />

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
				<a href="vous.php" ><img src="Vous.png" width="107" height="55px" id="bouton3"></a>
				<a href="notifications.html"><img src="Notifications.png" width="120px" height="60px" id="bouton4"></a>
				<a href="messagerie.html"><img src="Messagerie.png" width="107" height="60px" id="bouton5"></a>
				<a href="emplois.html"><img src="Emplois.png" width="107" height="60px" id="bouton6"></a>

			</div>

			<div class="toutreseau">

				<div class="reseau">
					<?php 



					$database = "site";

					$db_handle = mysqli_connect('localhost', 'root', '' ); 
					$db_found = mysqli_select_db($db_handle, $database);


					if($db_found)
					{

						$sql = "SELECT * FROM numero"; 
						$result = mysqli_query($db_handle, $sql); //exécuter une requete sql

						if($result && mysqli_num_rows($result) != 0)
						{
							$data = mysqli_fetch_assoc($result);

							$numero = $data['id'] ;
						}

						echo "<table border='1'>"; 
						echo "<tr>"; 
						echo "<th >" . "Photo" . "</th>"; 
						echo "<th >" . "Nom" . "</th>"; 
						echo "<th >" . "Pseudo" . "</th>"; 
						echo "<th >" . "Description" . "</th>";
						echo "</tr>"; 

						for ($i=1; $i<10; $i++){

							$sql = "SELECT * FROM utilisateurs WHERE ID = $numero"; 
							$result = mysqli_query($db_handle, $sql); //exécuter une requete sql
							$data = mysqli_fetch_assoc($result);

							if($result && mysqli_num_rows($result) != 0)
									{
								$ami = $data['amis'] ;
								if(strpos(strval($ami), strval($i)) !== false){
									$sql = "SELECT * FROM utilisateurs WHERE ID = $i"; 
									$result = mysqli_query($db_handle, $sql); //exécuter une requete sql

									while ($data = mysqli_fetch_assoc($result)) { 
										 
										echo "<tr >"; 
										$image = $data['photo']; 
										echo "<td>" . "<a href='pageami.php?id=$i'> <img src='$image' style='height: 100px; width: 100px;'> </a>" . "</td>"; 
										echo "<td >" . $data['nom'] . "</td>"; 
										echo "<td >" . $data['pseudo'] . "</td>"; 
										echo "<td >" . $data['description'] . "</td>"; 
										echo "</tr>"; 
									} 
							
									}

							}	
						}
					}echo "</table>";
				?>

		</div>
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




	</div>
</div>
</body>
</body>
</html>

<?php
	//fermer la connection 
mysqli_close($db_handle); 
?>