<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom= htmlspecialchars($_POST["prenom"]);
    $sexe = htmlspecialchars($_POST["sexe"]);
    $email = htmlspecialchars($_POST["email"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $motDePasse = password_hash($_POST["motDePasse"], PASSWORD_DEFAULT);
    $confirmerLeMotDePasse= htmlspecialchars($_POST["confirmerLeMotDePasse"]); // Hashage du mot de passe

    // Connexion à la base de données (remplacer les valeurs selon votre configuration)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inscription";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué: " . $conn->connect_error);
    }
    else {
        echo "okkk";
    }

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO utilisateurs (nom, prenom,sexe,email,contact,motDePasse,confirmerLeMotDePasse) 
    VALUES ('$nom','$prenom','$sexe','$email','$contact','$motDePasse','$confirmerLeMotDePasse')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie";
    } else {
        echo "Erreur lors de l'inscription: " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
}
?>
