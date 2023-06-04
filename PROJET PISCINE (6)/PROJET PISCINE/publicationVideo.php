
<?php


// Identifier le nom de la base de données 
$database = "site";

// Connectez-vous à votre BDD 
// Rappel : votre serveur = localhost | votre login = root | votre mot de passe = '' (rien) 
$db_handle = mysqli_connect('localhost', 'root', '' ); 
$db_found = mysqli_select_db($db_handle, $database);

// Saisir les données du formulaire
$photo = isset($_FILES["video"]["name"]) ? $_FILES["video"]["name"] : "";

// Si le bouton "Submit" est cliqué
if (isset($_POST["button1"])) {
    if ($db_found) { 
        $sql = "SELECT * FROM publication"; 
        $result = mysqli_query($db_handle, $sql); 

        $Lieu = isset($_POST["lieu"])? $_POST["lieu"] : "";
        $Date = isset($_POST["date"])? $_POST["date"] : "";
        $Ressentis = isset($_POST["ressentis"])? $_POST["ressentis"] : "";
          # Déplacer le fichier vers un répertoire de destination

        //INSERER

            // Déplacer le fichier vers un répertoire de destination

        $temp_name = $_FILES["photo"]["tmp_name"];
        move_uploaded_file($temp_name, './upload/' . $photo);

            // Insérer le chemin de la photo dans la base de données
        $sql = "INSERT INTO publication(lieu, date, texte, video) 
        VALUES('$Lieu','$Date', '$Ressentis', './upload/$photo')" ;   
        $result = mysqli_query($db_handle, $sql); 
        //echo "<p>Add successful.</p>"; 

            // Afficher le nouveau user ajouté
        
        $sql = "SELECT * FROM publication"; 
        if ($photo != "") { 
            $sql .= " WHERE photo LIKE '%$photo%'"; 
        } 
        $result = mysqli_query($db_handle, $sql); 

        echo '<script>window.location.href = "accueil.php";</script>';
        
     
    } else { 
        echo "<p>Database not found.</p>"; 
    } 
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="publication.css" rel="stylesheet" type="text/css" />
    <title></title>

</head>
<body>
    <div class="wrapper">

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

            <h1 id="publier">PUBLIER UNE PHOTO</h1>

            <form action="publicationVersionF.php" method="post" enctype="multipart/form-data">
                <center><table border="1px white" style="color: white;">
                    <tr>
                        <td>Image:</td>
                        <td><input type="file" name="photo"></td>
                         <img id="preview" src="#" alt="Aperçu de l'image" height="120" width="120" style="display: none;">
                    </tr>
                    <tr>
                        <td>Lieu:</td>
                        <td><input type="text" step="0.01" name="lieu" value="Ajouter"></td>
                    </tr>
                    <tr>
                        <td>Date :</td>
                        <td><input type="date" step="0.01" name="date" value="Ajouter"></td>
                    </tr>

                    <tr>
                        <td>Les ressentis et faits :</td>
                        <td><input type="text" step="0.01" name="ressentis" value="Ajouter"></td>
                    </tr>
                    <tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="button1" value="Submit">
                            </td>
                        </tr>
                    </table></center>
                </form>
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
                </body>
                </html>