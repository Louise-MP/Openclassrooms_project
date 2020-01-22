<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/actor_formation.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Formation&amp;Co</title>
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
                <img src="../images/formation.png" alt="Formation" width="500" height="150">
            </div>

            <div class="current_actor">
                <h2 class="">Formation&amp;Co</h2>
                <a href=""></a>
                <p>

Formation&amp;co est une association française présente sur tout le territoire. <br> <br>

Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé. <br>
Notre proposition : <br><br>
un financement jusqu’à 30 000€. <br><br>
un suivi personnalisé et gratuit. <br><br>
une lutte acharnée contre les freins sociétaux et les stéréotypes. <br><br>
Le financement est possible, peu importe le métier : <br> coiffeur, banquier, éleveur de chèvres…
<br><br> Nous collaborons avec des personnes talentueuses et motivées. <br><br>
Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.
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
                    Nouveau Commentaire
                </button>
                
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
