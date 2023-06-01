<?php
$fichierCSS = "PROJET PISCINE/fichierAdmin.css"; 
echo "<link rel='stylesheet' type='text/css' href='$fichierCSS'>"; 

// Identifier le nom de la base de données 
$database = "site";

// Connectez-vous à votre BDD 
// Rappel : votre serveur = localhost | votre login = root | votre mot de passe = '' (rien) 
$db_handle = mysqli_connect('localhost', 'root', '' ); 
$db_found = mysqli_select_db($db_handle, $database);

// Saisir les données du formulaire
$photo = isset($_FILES["photo"]["name"]) ? $_FILES["photo"]["name"] : "";

// Si le bouton "Submit" est cliqué
if (isset($_POST["button1"])) {
    if ($db_found) { 
        $sql = "SELECT * FROM publication"; 
        $result = mysqli_query($db_handle, $sql); 

        $Lieu = isset($_POST["lieu"])? $_POST["lieu"] : "";
        $Date = isset($_POST["date"])? $_POST["date"] : "";
        $Ressentis = isset($_POST["ressentis"])? $_POST["ressentis"] : "";
          # Déplacer le fichier vers un répertoire de destination

        $temp_name = $_FILES["photo"]["tmp_name"];
        move_uploaded_file($temp_name, './upload/' . $photo);
        

        //INSERER

            // Déplacer le fichier vers un répertoire de destination

        $temp_name = $_FILES["photo"]["tmp_name"];
        move_uploaded_file($temp_name, './upload/' . $photo);

            // Insérer le chemin de la photo dans la base de données
        $sql = "INSERT INTO publication(lieu, date, texte, photo) 
        VALUES('$Lieu','$Date', '$Ressentis', './upload/$photo')" ;   
        $result = mysqli_query($db_handle, $sql); 
        echo "<p>Add successful.</p>"; 

            // Afficher le nouveau user ajouté
        
        $sql = "SELECT * FROM publication"; 
        if ($photo != "") { 
            $sql .= " WHERE photo LIKE '%$photo%'"; 
        } 
        $result = mysqli_query($db_handle, $sql); 
        echo "<h2>" . "Informations sur le nouveau User ajouté:" . "</h2>"; 

        echo "<br>Lieu: " . $Lieu; 
        echo "<br>Date: " . $Date; 
        echo "<br>Ressentis: " . $Ressentis; 
        echo "<tr>"; 
        echo "<th>" . "<br>Photo" . "</th>";

            // Afficher le résultat
        while ($data = mysqli_fetch_assoc($result)) { 
            echo "<tr>"; 

            $image = $data['photo']; 
            echo "<td>" . "<img src='$image' height='120' width='120'>" . "</td>"; 

            echo "</tr>"; 
            

        }
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
        <title></title>
    </head>
    <body>
        <form action="publicationVersionF.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Image:</td>
                    <td><input type="file" name="photo"></td>
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
                </table>
            </form>
        </body>
        </html>