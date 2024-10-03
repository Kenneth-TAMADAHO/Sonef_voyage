<?php
     if (isset ($_POST["submit"])) {
        $Vdepart= $_POST["Vdepart"];
        $Varriver= $_POST["Varriver"];
        $Ddepart= $_POST["Ddepart"];
        $Hdepart= $_POST["Hdepart"];
        $Npassager= $_POST["Npassager"];
        $data= [$Vdepart,$Varriver,$Ddepart,$Hdepart,$Npassager];
        $pdo= new PDO("mysql:host=localhost;dbname=sonef","root","");
        $request=$pdo->prepare("insert into users (Vdepart,Varriver,Ddepart,Hdepart,Npassager) values(?,?,?,?,?)");
        $request->execute($data);
        echo( '<script>alert("Vous etes bien enregistrer")</script>');
    }
    

    // $table= [];
    // echo file_get_contents("demo.json");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sonef.css">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <div class="en-tete">
                <img src="assets/Logo Officielle SONEF Redesign_Originale 1.png" alt="" class="logo">
                <nav class="navbar removeNav">
                <code>X</code>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Destinations</a></li>
                        <li><a href="#">Agences</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Connexion</a></li>
                    </ul>
                </nav>
                <img src="assets/menu-btn.png" alt="Menu hamburger" class="menu-hamburger">
            </div>
        </header>

        <section id="main_contener">
            <h1>Réservez votre  <br> billet de voyage</h1>

            <div class="formulaire">
                <form action="" method="post">
                    <input type="text" name="Vdepart" id="ville_de_depart" value="" placeholder="Ville de départ"> 
                    <input type="text" name="Varriver" id="ville_darriver" value="" placeholder="Ville d'arrivée"> <br>

                    <div class="d-flex">
                        <div>
                            <p id="label_for_inputDate">Date de départ</p> 
                            <input type="date" name="Ddepart" id="date_de_départ" value="" placeholder="Date de départ"> 
                        </div>

                        <div>
                            <p id="label_for_inputName">Heure de départ</p>  <br>
                            <input type="time" class="inpuHeure" name="Hdepart" id="heure_de_départ" value="" placeholder="Heure de départ">  <br>
                        </div>
                    </div>

                    <input type="number" name="Npassager" id="nombre_de_passager" value="" placeholder="Nombre de passager"> <br>
                    <input type="submit" value="RESERVER" id="submit" name="submit">
                </form>
            </div>
        </section>

        <!-- <footer>
            <img src="assets/Send.png" alt="" class="pied-page">
        </footer> -->
    </main>   
     <script>
        var menuHamburger = document.querySelector(".menu-hamburger");
     
        var navbar = document.querySelector("nav");
        var code = document.querySelector("code");
        menuHamburger.addEventListener('click',()=>{
            var navbar = document.querySelector("nav");

            if(navbar.style.display=="none"){
                navbar.style.display="block"
            }else{
                navbar.style.display="none"
            }
            
            code.addEventListener('click',()=>{
                    if(navbar.style.display=="block"){
                         navbar.style.display="none"
                    }else{
                         navbar.style.display="none"
                    }
            })
         
            
          
    });



    </script>
</body>
</html>