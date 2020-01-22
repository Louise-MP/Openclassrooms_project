<?php

session_start();

?>



<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>GBAF</title>
    <link rel="stylesheet" href="css/GBAF.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


</head>

<body>



    <header>

        <div class="menu">
            <div class="div_logo">
                <img class="logo" src="images/logo_gbaf.png" alt="Logo GBAF">
            </div>

           
            
            <p class="hello">
                <?php 
                
                    echo 'Bonjour ' . $_SESSION['prenom'] . '  ' . $_SESSION['nom'] . ' !';
                    
                ?>
            </p>
            
             <div class="contener_btn">
               <button class="decoBtn">
                <a href="php/deconnexion.php">Déconnexion</a>
               </button>
            </div>
            
        </div>

    </header>


    <section class="section_1">

        <div>
            <h1 class="h1_gbaf">
                Le Groupement Banque Assurance Français
            </h1>
        </div>

        <div>

            <p></p>

        </div>

        <div class="image_bg">

        </div>

    </section>


    <section>

        <div class="h2_acteurs_partenaires">
            <h2>Acteurs et partenaires</h2>
        </div>

        <div class="h2st_acteurs_partenaires">
            <p>Retrouvez toutes les informations sur les partenaires du <span>GBAF</span>.</p>
        </div>

    </section>


    <section class="acteurs">

        <div class="dsa">

            <div>
                <a href="php/actor_dsa.php"><img class="logo_dsa" src="../projet3/images/dsa.png" alt="logo dsa"></a>
            </div>

            <div class="description_dsa">
                <h3>DSA France</h3>
                <br>
                <p>DSA France vous accompagne dans l'évolution de votre entreprise.<br>
                </p>
            </div>

            <div class="bouton_dsa">
                <a href="../projet3/php/actor_dsa.php">Lire la suite</a>
            </div>

        </div>


        <div class="formation">

            <div class="div_logo_formation">
                <a href="php/actor_formation.php"><img class="logo_formation" src="../projet3/images/formation.png" alt="logo formation"></a>
            </div>

            <div class="description_formation">
                <h3>Formation&amp;Co</h3>
                <br>
                <p>Devenez entrepreneur avec l'association Formation&amp;Co. <br>
                </p>
            </div>

            <div class="bouton_formation">
                <a href="../projet3/php/actor_formation.php">Lire la suite</a>
            </div>

       
        </div>


        <div class="protect_people">

            <div class="div_logo_protect">
                <a href="php/actor_protect.php"><img class="logo_protect_people" src="images/protectp.png" alt="logo protect people"></a>
            </div>

            <div class="description_protect_people">
                <h3>ProtectPeople</h3>
                <br>
                <p>Permettre à chacun de bénéficier d'une protection sociale.<br>
                </p>
            </div>

            <div class="bouton_protect_people">
                <a href="../projet3/php/actor_protect.php">Lire la suite</a>
            </div>

        </div>


        <div class="cde">

            <div>
                <a href="php/actor_cde.php"><img class="logo_cde" src="images/cde.png" alt="logo cde"></a>
            </div>

            <div class="description_cde">
                <h3>CDE</h3>
                <br>
                <p>La CDE vous aide à démarcher pour vous former.<br>
                </p>
            </div>

            <div class="bouton_cde">
                <a href="../projet3/php/actor_cde.php">Lire la suite</a>
            </div>
            
        </div>

    </section>


    <footer>

        <div class="footer">
            <p class="mentions_legales">| Mentions légales | Sécurité | GBAF | Cookies</p>
        </div>

    </footer>


</body>
</html>
