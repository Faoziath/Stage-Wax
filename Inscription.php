<?php
// Vérification si les données sont envoyées via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $Prenom = htmlspecialchars($_POST["Prenom"]);
    $sexe = htmlspecialchars($_POST["sexe"]);
    $email = htmlspecialchars($_POST["email"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]);
    $confirme= htmlspecialchars($_POST["ConfirmerLeMotDePasse"]);
    

    // Relier à la base de données
    $conn = new mysqli($nom,$Prenom,$sexe,$email,$contact,$mot_de_pass,$confirme);


    // Affichage des données récupérées (à des fins de démonstration)
    echo "Nom: " . $nom . "<br>";
    echo "Penom: " . $Prenom . "<br>";
    echo "E-mail: " . $sexe . "<br>";
    echo "sexe: " . $email . "<br>";
    echo "E-mail: " . $contact . "<br>";
    echo "contact: " . $contact . "<br>";
    // Ne jamais afficher le mot de passe en clair, ceci est à des fins de démonstration uniquement
    echo "Mot de passe: " . $mot_de_passe . "<br>";
    echo "Confirme: " . $confirme . "<br>";
    
    // Ajouter ici le code pour insérer les données dans une base de données ou effectuer d'autres actions nécessaires
    // Assurez-vous de sécuriser le stockage du mot de passe en utilisant des techniques telles que le hachage.
}
?>
