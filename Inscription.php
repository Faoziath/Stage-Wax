<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription</title>
</head>
<body>

<form action="Inscrit.php" method="post">

 <h2>INSCRIPTIONS</h2>

<label for="nom">Entrer votre nom</label> <br><br>
<input type="text" id="nom"  name="nom"> <br><br>

<label for="prenom">Entrer votre prenom</label><br><br>
<input type="text" id="prenom" name="prenom"> <br><br>

<label for="email">Entrer votre email</label><br><br>
<input type="text" id="email"  name="email"> <br><br>

<label for="contact">Entrer votre contact</label><br><br>
<input type="text"  id="contact" name="contact"> <br><br>

<label for="pass">Entrer votre mot de passe</label><br><br>
<input type="text"  id="passworde" name="passworde"> <br><br>



<input type="submit" id="OK" value="M'inscrire" name="OK" >
</form>
	
</body>
</html>