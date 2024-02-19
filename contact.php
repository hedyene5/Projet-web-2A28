<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informations reçues</title>
   
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Récupérer les valeurs du formulaire
    $nom = $_GET["nom"];
    $prenom = $_GET["fn"];
    $email = $_GET["email"];
    $tel = $_GET["tel"];
    $bdate = $_GET["bdate"];
    $password = $_GET["Password"];
    $code_postal = $_GET["code_postal"];

    // Afficher les valeurs dans un tableau
    echo "<h2>Informations reçues :</h2>";
    echo "<table>";
    echo "<tr><th>Nom</th><td>$nom</td></tr>";
    echo "<tr><th>Prénom</th><td>$prenom</td></tr>";
    echo "<tr><th>Email</th><td>$email</td></tr>";
    echo "<tr><th>Tel</th><td>$tel</td></tr>";
    echo "<tr><th>Date de naissance</th><td>$bdate</td></tr>";
    echo "<tr><th>Mot de passe</th><td>$password</td></tr>";
    echo "<tr><th>Code postal</th><td>$code_postal</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
