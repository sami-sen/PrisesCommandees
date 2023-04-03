<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement mot de passe</title>
    <link rel="shortcut icon" href="/prises.png">
    <link rel="stylesheet" href="password.css">
</head>

<body>
    <div>Mot de passe oublié</div>
    <div>saisir l'ancien mot de passe</div>
    <input type="password">
    <div>Saisir votre nouveau mot de passe</div>
    <input type="password">
    <div>Re-saisir votre nouveau mot de passe</div>
    <input type="password">
    <button>Enregistrer</button>
    <a href="/index.php">
        revenir à a page de connexion
    </a>
</body>
</html>

<?php
// Connexion à la base de données
$servername = "nom_du_serveur";
$username = "nom_utilisateur";
$password = "mot_de_passe";
$dbname = "nom_de_la_base_de_donnees";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connexion échouée: " . mysqli_connect_error());
}

// Récupération des données du formulaire
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];

// Vérification de l'ancien mot de passe
$sql = "SELECT password FROM utilisateurs WHERE id_utilisateur = '1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$stored_password = $row['password'];

if (password_verify($old_password, $stored_password)) {
  // Si l'ancien mot de passe est correct, on met à jour le nouveau mot de passe dans la base de données
  $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
  $sql = "UPDATE utilisateurs SET password = '$hashed_password' WHERE id_utilisateur = '1'";
  if (mysqli_query($conn, $sql)) {
    echo "Le mot de passe a été changé avec succès.";
  } else {
    echo "Erreur lors du changement de mot de passe: " . mysqli_error($conn);
  }
} else {
  // Si l'ancien mot de passe est incorrect, on affiche un message d'erreur
  echo "Le mot de passe actuel est incorrect.";
}

mysqli_close($conn);
?>
