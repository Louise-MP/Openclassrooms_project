<?php

session_start();





require_once('dbConnect.php');


if (isset($_POST['submit']))
{
	$nom_utilisateur = $_POST['nom_utilisateur'];
	$reponse = $_POST['reponse']; 
	$mdp = $_POST['new_mdp'];
    
if ($nom_utilisateur&&$reponse)  
{
    $sql = "SELECT * FROM membres WHERE pseudo = ?";
    $dbprepare=$connexion->prepare($sql);
    $result=$dbprepare->execute(array($nom_utilisateur));
	$test =$dbprepare->fetch();
	
    if ($test['reponse'] === $reponse)
    {
        $mdpsecure = password_hash($mdp,PASSWORD_DEFAULT);
        $update='UPDATE `membres` SET `mdp`=? WHERE id=?';
        $updateprepare=$connexion->prepare($update);
        $resultupdate=$updateprepare->execute(array($mdpsecure, $test['id']));
        
        header('location: connexion.php');
}
        
    
else
{
	echo 'Il y a une erreur';
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
                <h2>Mot de passe oublié</h2>
            
            </div>

            <!--  FORMULAIRE  -->

            <div class="formulaire">
               
                <form action="" method="post">

                    <input type="text" name="nom_utilisateur" id="nom_utilisateur" placeholder="Pseudo">


                    <input type="text" name="reponse" placeholder="Réponse à la question secrète">

                  <input type="password" name="new_mdp" placeholder="Nouveau mot de passe">
                   
                    <div class="submitBtn">

                        <input type="submit" name="submit" value="Se connecter">
                    
                    <a href="inscription.php">Créer un compte</a>
                    </div>

                </form>

            </div>

        </div>

    </section>

</body>
</html>
