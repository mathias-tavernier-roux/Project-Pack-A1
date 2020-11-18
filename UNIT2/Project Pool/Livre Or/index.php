<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
        $_SESSION['username'] = "Anonymous";
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>Vous Pouvez Maintenant Accéder au Livre D'Or et a La Gestion de Votre Profil</p>
            <a href="livre-or.php" class="LO-Button">Acceder Au Livre d'Or</a>
            <?php
            if($_SESSION['username'] == "Anonymous")
                {
            echo "<a href='login.php' class='C-Button'>Se Connecter</a>";
            echo "<a href='register.php' class='C-Button'>S'Inscrire</a>";
                }
            else
                {
            echo "<a href='logout.php' class='DC-Button'>Se Deconnecter</a>";
                }
            ?>
		</div>
	</body>
</html>