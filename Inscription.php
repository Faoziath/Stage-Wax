<?php
$servername = "localhost";
$dbname = "Inscrit";
$user = "root";
$password = "";

try {
    $conn = new PDO ("mysql:host=$servername; dbname=$Inscrit; charset=utf8", "$users", "$password");
} catch (Exception $e) {
    echo "Erreur : ".$e->getmessage();
}

if (isset($_POST['ok'])) {
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars($_POST['email']);
  $contact = htmlspecialchars($_POST['contact']);
  $password = htmlspecialchars($_POST['password']);
  
  if (isset($nom, $prenom,$email,$contact,$password) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['contact']) and !empty($_POST['password'])) {

    // VERIFIONS SI L'ARTICLE EXISTE DEJA
    $reqSelect = $conn->prepare('SELECT count(*) as count FROM users WHERE email = ?');
    $reqSelect->execute(array($nom));
    $resultat = $reqSelect->fetch();

    if ($resultat['count'] > 0) {
      echo "Se email existe";
    } else {

            $sql = "INSERT INTO users(nom,prenom,email,contact,password) VALUES (?,?,?,?,?)";
            $req = $conn->prepare($sql);
            $req->execute(array($nom, $prenom, $email,$contact,$password));
            echo ' Article publié !';
    }

  } else {
    echo "Remplissez tout les champs.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ok</title>
</head>
<body>

  <form method="post">
    <label>Nom</label>
    <input type="text" name="nom"><br><br>
    <label>Prenom</label>
    <input type="text" name="prenom"><br><br>
    <label>email</label>
    <input type="email" name="email"><br><br>
    <label>contact</label>
    <input type="text" name="contact"><br><br>
    <label>Mot de passe</label>
    <input type="password" name="password"><br><br>
    <input type="submit" name="ok">
  </form>
</body>
</html>