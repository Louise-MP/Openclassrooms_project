<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/actor_protect.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Protect people</title>
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
                <img src="../images/protectp.png" alt="Protectpeople" width="500" height="200">
            </div>

            <div class="current_actor">
                <h2 class="">Protect people</h2>
                <a href=""></a>
                <p>Protectpeople finance la solidarité nationale.
Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.
<br><br>
Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.
Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.
<br><br>
Nous garantissons un accès aux soins et une retraite.
Chaque année, nous collectons et répartissons 300 milliards d’euros.
Notre mission est double : <br><br>
sociale : nous garantissons la fiabilité des données sociales.
<br><br>
économique : nous apportons une contribution aux activités économiques.

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
