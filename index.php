<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/login/login.css">
    <link rel="shortcut icon" href="/prises.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,400&display=swap"
        rel="stylesheet">
</head>

<body>
    <a href="/login/login.php">
        <div>
            Cliquer ici pour vous connecter
        </div>
    </a>
</body>

</html>

<?php
/*
$DBuser = 'root';
$DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
$pdo = new PDO('mysql:host=database:3306,;dbname=domo', $DBuser, $DBpass);
$rqt_test = "SELECT * FROM prises WHERE ID!=2";
$data_test = $pdo->query($rqt_test);
$test_usr = $_POST['usr'];
foreach($data_test as $value)
{
$test_usr = $value['user'];
$test_mdp = $value['pswd'];
if(($test_usr == $usr) and ($test_mdp == $mdp))
{
$erreur = 0;
header('Location: index.php');
}
}
*/
?>