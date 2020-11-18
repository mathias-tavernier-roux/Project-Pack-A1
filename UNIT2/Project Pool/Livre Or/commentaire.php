<?php
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if($_SESSION["username"] == "Anonymous"){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Poster Un Commentaire</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Poster Un Commentaire</a></h1>
		<form id="avis" class="forms"  method="post" action="send.php">
					<div class="form_description">
			<h2>Poster Un Commentaire</h2>
			<p>Donnez Votre Avis Sur L'Un De Mes Projet</p>
		</div>						
			<ul >
                <li id="li_1" >
		<label class="description" for="projet">Projet Concerné </label>
		<div>
			<input id="projet" name="projet" class="element text medium" type="text" maxlength="20" value=""/>
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="avis">Votre Avis (Attention : Eviter D'Utiliser Les Apostrophes (' et ") il font planter la requete  </label>
		<div>
			<textarea id="avis" name="avis" class="element textarea small"></textarea>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="forms value="..." />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>