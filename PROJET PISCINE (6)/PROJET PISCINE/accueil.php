<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Introduction au Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="accueil.css" rel="stylesheet" type="text/css" />

    

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


            <div class="container">
                <p style="color:white"> <b>ECE Ln </b>est un site web social media professionnel pour la communauté ECE Paris. Ce site web sera un réseau social mais avec des <b>objectifs professionnels</b>. </p>
                <p></p>
                <p style="color:white">
                    Que vous soyez étudiant/e de licence, master ou doctorat, ou étudiant/e apprenti dans un entreprise, ou étudiant/e qui cherche un <b>stage dans une entreprise </b>ou peut-être un/e enseignant/e ou employé de l’Ecole qui cherche des <b>partenaires pour votre projet de recherche ou autre</b>, ce site web s'adresse à toutes et à tous qui souhaitent prendre leur vie professionnelle au sérieux, trouver de nouvelles opportunités pour développer leur carrière et se connecter avec d'autres personnes pour des buts professionnels.
                </p>
                <p></p>
                <center><h2 style="color:white"><b> EVENEMENT DE LA SEMAINE</b></h2></center> 


                <div id="myCarousel" class="carousel-slide" data-ride="carousel" data-interval="1000">
                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                   </ol>
                   <!-- Wrapper pour les images -->

                   <div class="carousel-inner">
                       <div class="item active">
                        <img src="img1.png" alt="Paris" style="width:80px height: 300px;">
                        <div class="carousel-caption">
                           <h3>ECE</h3>
                           <p>Paris</p>
                       </div>
                   </div>

                   <div class="item">
                       <img src="img2.png" alt="Berlin" style="width:100px height: 200px;">
                       <div class="carousel-caption">
                           <h3>Journee porte ouverte</h3>
                           <p>28/05</p>
                       </div>
                   </div>

                   <div class="item">
                       <img src="img3.png" alt="Rome" style="width:200px height: 300px;">
                       <div class="carousel-caption">
                           <h3>Matières</h3>
                           <p>Electronique / Informatique</p>
                       </div>
                   </div>

               </div>

           </div>

           <div class="section" >
            <center><h3><b>Journée porte ouverte à l'ECE</b></h3></center>
            <p>Vous souhaitez découvrir les locaux, visiter les laboratoires, rencontrer des élèves, les enseignements et la direction ? Les Portes Ouvertes sont un incontournable pour mieux connaître l’école. <b>Rencontrez les élèves </b>et échangez sur les séjours à l’international. Posez vos questions aux enseignants et aux diplomés de l’école. Venez nous rencontrer au <b>10 rue sextius michel</b>, Paris, le <b>28/05 </b>!</p>
        </div>

        <div class="webinaire">
           <img src="webinaire.png" > 
       </div>

       <div class="section2" >
        <center><h3><b>Webinaire MSc SAP</b></h3></center>
        <p>Vous souhaitez vous former sur un sujet à forte employabilité, en lien avec la transformation digitale dans la logistique et la finance ? Rejoignez en septembre 2023, la première promotion Sopra Steria x SAP du MSc « Consultant SAP Augmenté » au sein de l’école d’ingénieurs ECE Paris. Afin de découvrir cette formation en avant-première, nous vous invitions à un Webinaire dédié, ce mardi 23 mai à partir de 18h sur Teams. Voici le lien d'inscription : <a style="color : grey;" href="https://www.ece.fr/inseecu/conference/6699">https://www.ece.fr/inseecu/conference/6699</a></p>
    </div>

    <div class="evenement">
       <img src="evenement.png" > 
   </div>

   <div class="section3" >
    <center><h3><b>Découvrez le métier Développeur Full Stack !</b></h3></center>
    <p>Le métier de Développeur Full Stack se développe sur le marché du travail !
        Ce métier a vu ses offres augmentées de 36% par rapport à 2020.
        Découvrez le Bachelor Numérique avec l'option d'approfondissement Full Stack de l'ECE. Il vous permet de répondre aux besoins des entreprises dans un environnement en constante innovation ! Voici le lien si vous avez des questions : <a style="color : grey;"  href="https://www.ece.fr/program/option-frontend-backend-fullstack/"> https://www.ece.fr/program/option-frontend-backend-fullstack/</a></p>
    </div>




    <center><h1 style="color:white"><b>TOUTES LES ACTIVITES</b></h1></center>


    <div class="votrePublication" >

        <img src="stelly.png" class="img-circle" id="imageProfil">
        <a href="publicationVideo.php"><input type="submit" id="bouton"name="button1" value="Commencer un post"> </a>

    </div>

    <div class="publication1">
        <div class="post">
        <?php

 //identifier le nom de base de données 
        $database = "site";

//connectez-vous dans votre BDD 
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien) 
        $db_handle = mysqli_connect('localhost', 'root', '' ); 
        $db_found = mysqli_select_db($db_handle, $database);

//saisir les données du formulaire
        $lieu = isset($_POST["lieu"]) ? $_POST["lieu"] : "";
        $date = isset($_POST["date"]) ? $_POST["date"] : "";
        $photo = isset($_POST["photo"]) ? $_POST["photo"] : "";
        $ressentis = isset($_POST["texte"]) ? $_POST["texte"] : "";


         if ($db_found) {
            $sql = "SELECT * FROM publication ORDER BY date DESC";
            $result = mysqli_query($db_handle, $sql);

            if (mysqli_num_rows($result) == 0) {
                echo "<p>User not found.</p>";
            } else {
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<table border='1'>";

                    echo "<br"."<tr>";

                    echo "<td>";
                    $image = $data['photo'];
                    echo "<center>"."<img src='$image' style='height: 400px; width: 400px;'><br><br><br>"."</center>";
                    echo "</td>";

                    echo "<td >";
                    echo "<b>"."<p style='font-size: 18px;'>Lieu: "."</b>".  $data['lieu'] ."</p>" ;
                    echo "<b>"."<p style='font-size: 18px;'>Date: " ."</b>". $data['date'] . "</p>" ;
                    echo "<b>"."<p style='font-size: 18px;'>Ressentis: " ."</b>". $data['texte'] . "</p>";
                     echo "</td>";
                    
                    echo "</tr>";
                }echo "</table>"."<br>";

            }
        } else {
            echo "<p>Database not found.</p>";
        }
        ?>
    </div>
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
</html>