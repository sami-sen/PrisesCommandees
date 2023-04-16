<?php
if(isset($_POST['email']) && isset($_POST['mdp'])){

  $email = $_POST["email"];
  $mdp = $_POST["mdp"];
  $nom_serveur = "localhost";
  $utilisateur = "root";
  $mot_de_passe = "root";
  $nom_base_de_donnée = "utilisateurs";
  $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_de_donnée);
  
  
  $req = mysqli_query($con, "SELECT * FROM utilisateurs WHERE email='$email' AND mdp='$mdp'");

  $num_ligne = mysqli_num_rows($req);
  if(num_ligne > 1);
else {
  echo"veuillez remplir le formulaire";
} 
}
?>