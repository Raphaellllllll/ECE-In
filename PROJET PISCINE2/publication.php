<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=upload_file', 'root', ""); // Connexion à la base de données
} catch(PDOException $e) {
    die('Erreur connexion : '.$e->getMessage());
}
//si le bouton est cliqué
if (isset($_POST["button1"])) {
//montant à payer
	$Lieu = isset($_POST["lieu"])? $_POST["lieu"] : "";
	if (empty($Lieu)) {
		$Lieu = 0.0;
	}
	echo "<br>Lieu: " . $Lieu; 

	$Date = isset($_POST["date"])? $_POST["date"] : "";
	if (empty($Date)) {
		$Date = 0.0;
	}
	echo "<br>Date: " . $Date; 

	$Heure = isset($_POST["heure"])? $_POST["heure"] : "";
	if (empty($Heure)) {
		$Heure = 0.0;
	}
	echo "<br>Heure: " . $Heure; 

	$Ressentis = isset($_POST["ressentis"])? $_POST["ressentis"] : "";
	if (empty($Ressentis)) {
		$Ressentis = 0.0;
	}
	echo "<br>Ressentis: " . $Ressentis; 


	/*$Image = isset($_POST["image"])? $_POST["image"] : "";
	echo "<br>Image: " . "<img src='$Image' height='200px' width='400px'>";*/ 
	/*if (isset($_FILES['image']['tmp_name'])) {
        $retour = copy($_FILES['image']['tmp_name'], $_FILES['image']['name']);
        if($retour) {
            echo '<p>La photo a bien été envoyée.</p>';
            echo '<img src="' . $_FILES['image']['name'] . '">';
        }*/

    if(isset($_FILES['file'])){
	$tmpName = $_FILES['file']['tmp_name'];
	$name = $_FILES['file']['name'];
	$size = $_FILES['file']['size'];
	$error = $_FILES['file']['error'];


	//On ne veut que des images

	$tabExtension = explode('.', $name);
	$extension = strtolower(end($tabExtension));


//Tableau des extensions que l'on accepte
	$extensions = ['jpg', 'png', 'jpeg', 'gif'];
	//Taille max que l'on accepte
	$maxSize = 400000;


	if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){

		$uniqueName = uniqid('', true);
    //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
		$file = $uniqueName.".".$extension;
		move_uploaded_file($tmpName, './upload/'.$file);
		$req = $db->prepare('INSERT INTO file (name) VALUES (?)');
		$req->execute([$file]);

	}
	else{
		echo "Mauvaise extension ou taille trop grande";
	}
    $req = $db->query('SELECT name FROM file ORDER BY id DESC LIMIT 1'); // Récupérer le nom de la dernière image insérée
$data = $req->fetch();
if ($data) {
	echo"<br>Image : ";
    echo "<img src='./upload/".$data['name']."' height='100px' width='80px'><br>"; // Afficher la dernière image à partir du dossier d'upload
}
}



}
?>