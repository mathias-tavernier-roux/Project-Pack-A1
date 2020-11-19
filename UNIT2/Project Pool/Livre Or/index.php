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
		<?php
            if($_SESSION['username'] == "Anonymous")
                {
            echo "<p>Vous Pouvez Lire Le Livre d'Or Mais Vous Ne Pouvez Pas Poster de Commentaire (Il Faut Etre Authentifié pour Cela)</p>";
                }
            else
                {
			echo "<p>Vous Pouvez Maintenant Accéder au Livre D'Or et a La Gestion de Votre Profil</p>";
                }
            ?>
            <a href="livre-or.php" class="C-Button">Acceder Au Livre d'Or</a>
            <?php
            if($_SESSION['username'] == "Anonymous")
                {
            echo "<a href='login.php' class='DC-Button'>Se Connecter</a>";
            echo "<a href='register.php' class='DC-Button'>S'Inscrire</a>";
                }
            else
                {
            echo "<a href='profil.php' class='DC-Button'>Modifier Son Mot de Passe</a>";
            echo "<a href='logout.php' class='DC-Button'>Se Deconnecter</a>";
                }
            ?>
		</div>
	</body>
</html>