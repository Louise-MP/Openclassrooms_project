<?php

require_once('dbConnect.php');

if (isset($_POST['forminscription']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['question']) && !empty($_POST['reponse']))
{
	
	
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mdpsecure = password_hash($mdp,PASSWORD_DEFAULT);
	$question = $_POST['question'];
	$reponse = htmlspecialchars($_POST['reponse']);
    // var_dump($mdpsecure); die; 
    
    $sql = "INSERT INTO membres(nom,prenom,pseudo,email,mdp,question,reponse) VALUES(?, ?, ?, ?, ?,?,?)"; /* créer la requete */
    $dbprepare=$connexion->prepare($sql); /* prepare la bdd a recevoir la requete */
    $result=$dbprepare->execute([$nom,$prenom,$pseudo,$email,$mdpsecure,$question,$reponse]); /* execute la requete d'envoie dans la bdd */
    
    if ($result)
    {
//        require('connexion.php');
        header('location: connexion.php');
    }
    else
    {
        echo 'Il y a une erreur';
    }
  
} 
             
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/inscription.css">
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
                <h2>Inscription</h2>
                <br>
                <br> <br>
                





            </div>

            <!--  FORMULAIRE  -->

            <div class="formulaire">

                <form action="" method="POST">

                    <input type="text" name="nom" placeholder="Nom">                 
                   
                    <input type="text" name="prenom" placeholder="Prénom">
                    
                    <input type="text" name="pseudo" placeholder="Pseudo">                 

                    <input type="email" name="email" placeholder="Email" >

                    <input type="password" name="mdp" placeholder="Mot de Passe">
                    
					<label class="question_select" for="question_select">Veuillez choisir une question secrète</label>

					<select name="question" id="question">
						<option value="select">Sélectionner une réponse</option>
					    <option value="pet">Quel est le nom de votre animal de compagnie ?</option>
					    <option value="mothername">Quel est le prénom de votre mère ?</option>
					    <option value="color">Quelle est votre couleur favorite ?</option>
					</select>
                    
                    
                    <input type="text" name="reponse" placeholder="Réponse à la question secrète">


                    <div class="submitBtn">

                        <input type="submit" name="forminscription" value="S'inscrire">
                        
                         <a href="connexion.php">Déjà inscrit ?</a>
                
                         <a href="oublie_mdp.php">Mot de passe oublié ?</a>

                    </div>
                    
                    

                </form>


            </div>

        </div>

    </section>

</body>

</html>
