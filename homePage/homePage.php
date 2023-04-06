<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'acceuil</title>
    <link rel="stylesheet" href="homePage.css">
    <link rel="shortcut icon" href="/prises.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container">
        <div class="containerBonjour">
            <h1 class="bonjour">Bonjour <span class="user"> <?php echo"utilisateur"?>
                <span class="material-symbols-outlined">edit</span></span>
            </h1>
        </div>
        <div class="input">
            <a href="/index.php">
            <div>se déconnecter</div>
            </a>
            <a href="../password/password.php">
                <div class="password">
                    Changer de mot de passe
                </div>
            </a>
            </div>
    </div>
    <div class="containerAccess">
        <a href="/PrisesCommandees-1/choixMode/choixMode.php">
        <h2 class="access">Accèder au systeme</h2>
        </a>
    </div>
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