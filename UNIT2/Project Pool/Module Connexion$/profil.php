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
if (isset($_SESSION['username'], $_REQUEST['password']))
{
    // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
    $nom = stripslashes($_REQUEST['nom']);
    $prenom = stripslashes($_REQUEST['prenom']);
	$password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $password = hash('sha256', $password);
	//requéte SQL + mot de passe crypté
    $query = "UPDATE `utilisateurs` SET `password`='$password', `nom`='$nom', `prenom`='$prenom' WHERE `login`='$username'";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res)
    {
       echo "<div class='sucess'>
             <h3>Votre Mot de Passe A été Modifié Avec Succés</h3>
             <p>Cliquez ici pour vous <a href='login.php'>Reconnecter</a></p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">
    <h1 class="box-title">Modifier Ses Informations</h1>
    <input type="text" class="box-input" name="nom" placeholder="Nom" value="<?php echo $onom?>" required />
    <input type="text" class="box-input" name="prenom" placeholder="Prenom" value="<?php echo $oprenom?>" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="Modifier" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>