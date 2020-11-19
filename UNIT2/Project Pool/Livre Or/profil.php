<?php
session_start()
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
    $username = $_SESSION['username'];
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $password = hash('sha256', $password);
	//requéte SQL + mot de passe crypté
    $query = "UPDATE `utilisateurs` SET `password`='$password' WHERE `login`='$username'";
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
    <h1 class="box-title">Modifier Son Mot de Passe</h1>
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="Modifier" class="box-button" />
</form>
<?php } ?>
</body>
</html>