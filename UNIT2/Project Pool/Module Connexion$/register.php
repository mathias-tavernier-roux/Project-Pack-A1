<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['Nom'], $_REQUEST['Prenom'], $_REQUEST['password']) && $_REQUEST['username'] !== "Admin" && $_REQUEST['username'] !== "admin"){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    // Ajout des Noms Et Prenoms de L'Utilisateur
    $nom = stripslashes($_REQUEST['Nom']);
    $prenom = stripslashes($_REQUEST['Prenom']);
	//requéte SQL + mot de passe crypté
    $query = "INSERT into `utilisateurs` (login, password, nom, prenom) VALUES ('$username','".hash('sha256', $password)."','$nom','$prenom')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
    $message = "Ce Nom D'Utilisateur N'est Pas Utilisable";
?>
<form class="box" action="" method="post">
    <h1 class="box-title">Créer Un Compte</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="Nom" placeholder="Nom" required />
    <input type="text" class="box-input" name="Prenom" placeholder="Prenom" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
    <?php if (! empty($message)) 
    { ?>
    <p class="errorMessage"><?php echo $message; }?></p>
</form>
<?php } ?>
</body>
</html>