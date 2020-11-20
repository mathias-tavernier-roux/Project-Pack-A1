<?php
session_start();
$onom = $_SESSION['nom'];
$oprenom = $_SESSION['prenom'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username']))
{
    $username = $_REQUEST['username'];
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $nom = stripslashes($_REQUEST['nom']);
    $prenom = stripslashes($_REQUEST['prenom']);
    if (isset($_REQUEST['password']))
    {
	$password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $password = hash('sha256', $password);
	//requéte SQL + mot de passe crypté
    $query = "UPDATE `utilisateurs` SET `password`='$password', `nom`='$nom', `prenom`='$prenom' WHERE `login`='$username'";
    }
    else
    {
    $query = "UPDATE `utilisateurs` SET `nom`='$nom', `prenom`='$prenom' WHERE `login`='$username'";
    }
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res)
    {
       echo "<div class='sucess'>
             <h3>Les Informations de L'Utilisateur Selectionné Ont été Modifié avec succés</h3>
             <h3>Vous devez recharger la page pour voir les resultats dans l'espace administrateur</h3>
             <p>Cliquez ici pour vous <a href='profilA.php'>Relancer L'ID Changer</a></p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">
    <h1 class="box-title">ID Changer</h1>
    <input type="text" class="box-input" name="username" placeholder="Nom d'Utilisateur" required />
    <input type="text" class="box-input" name="nom" placeholder="Nom" required />
    <input type="text" class="box-input" name="prenom" placeholder="Prenom" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" />
    <input type="submit" name="submit" value="Modifier" class="box-button" />
</form>
<?php } ?>
</body>
</html>