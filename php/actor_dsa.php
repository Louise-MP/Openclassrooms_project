<?php

session_start();






?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/actor_dsa.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>DSA France</title>
</head>

<body>

    <!--  HEADER  -->

    <header>

        <div class="div_logo">
            <a href="../GBAF.php">
                <img src="../images/logo_gbaf.png" alt="GBAF" width="50" height="55"></a>
        </div>

        <div class="block_user">
            <img src="../images/avatar.svg" alt="" class="member_photo" width="30" height="30">
              <p class="hello">
                <?php 
                
                    echo $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
                    
                ?>
            </p>
        </div>
        
         <div>
               <button class="decoBtn">
                <a href="deconnexion.php">Déconnexion</a>
               </button>
            </div>

    </header>

    <!--  MAIN  -->

    <main>
        <!--  FIRST SECTION  -->
        <section class="first_section">

            <div class="img_actor">
                <img src="../images/dsa.png" alt="DSA" width="400" height="200">
            </div>

            <div class="current_actor">
                <h2 class="">DSA France</h2>
                <a href=""></a>
                <p>Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.
                    Nous accompagnons les entreprises dans les étapes clés de leur évolution.
                    Notre philosophie : s’adapter à chaque entreprise.
                    Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises
                </p>
            </div>

        </section>


        <hr class="line">
        <!--  SECOND SECTION  -->

        <section class="comment">

            <div class="comment_top">
                <h2>X commentaires</h2>
                <button class="btn_comment">
                    <img src="../images/chat.svg" alt="">
                    Nouveau Commentaire</button>
                    
                    


                <div class="like_section">
                    <p>5</p>
                    <button class="like"></button>
                    <button class="dislike"></button>
                </div>
            </div>

            <div class="list_comments">

                <div class="first_comment">
                    <ul>
                        <li>nom&amp;prénom</li>
                        <li>date_create</li>
                        <li>texte</li>
                    </ul>
                </div>

                <div class="second_comment">
                    <ul>
                        <li>nom&amp;prénom</li>
                        <li>date_create</li>
                        <li>texte</li>
                    </ul>
                </div>

                <div class="third_comment">
                    <ul>
                        <li>nom&amp;prénom</li>
                        <li>date_create</li>
                        <li>texte</li>
                    </ul>
                </div>

            </div>

        </section>

    </main>

    <footer>

        <div class="footer">

            <p class="mentions_legales">| Mentions légales | Sécurité | GBAF | Cookies</p>

        </div>

    </footer>

</body>

</html>
