<?php

session_start();





require_once('dbConnect.php');


if (isset($_POST['submit']))
{
	$nom_utilisateur = $_POST['nom_utilisateur'];
	$motdepasse = $_POST['motdepasse']; 
	
if ($nom_utilisateur&&$motdepasse)  
{
    $sql = "SELECT * FROM membres WHERE pseudo = ?";
    $dbprepare=$connexion->prepare($sql);
    $result=$dbprepare->execute(array($nom_utilisateur));
	$test =$dbprepare->fetch();
	
	if(password_verify($motdepasse,$test['mdp']))
	{
		$_SESSION['pseudo']=$test['pseudo'];
		$_SESSION['nom']=$test['nom'];
		$_SESSION['prenom']=$test['prenom'];

       
        header('location: ../GBAF.php');
        
	}
	else
    {
        echo 'Pseudo ou mot de passe inscorrect';
    }
}


}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
       <title>Connexion</title>
       <link rel="stylesheet" href="../css/connexion.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

    <!--  SECTION PRINCIPALE  -->

    <section class="section_principale">

        <!--  SECTION FORMULAIRE  -->

        <div class="section_formulaire">
           
            <div>
                <img class="logo_gbaf" src="../images/logo_gbaf.png" alt="logo gbaf">
            </div>

            <div class="connexion">
                <h2>Connexion</h2>
                <br>
                <p>Accédez à vos services</p>
            </div>

            <!--  FORMULAIRE  -->

            <div class="formulaire">
               
                <form action="" method="post">

                    <input type="text" name="nom_utilisateur" id="nom_utilisateur" placeholder="Pseudo">

                    <input type="password" name="motdepasse" placeholder="Mot de Passe">


                    <div class="submitBtn">

                        <input type="submit" name="submit" value="Se connecter">
                                            
                        <a href="oublie_mdp.php">Mot de passe oublié ?</a>

                        

                    </div>

                </form>

            </div>

        </div>

    </section>

</body>
</html>
