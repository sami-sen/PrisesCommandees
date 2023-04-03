<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du mode</title>
    <link rel="shortcut icon" href="/prises.png">
    <link rel="stylesheet" href="choixMode.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
    <div>
        <div>
            <a href="/PrisesCommandees-1/index.php">
            <div class="disconnect">
                <p>Se déconnecter</p>
                <span class="material-symbols-outlined">door_open</span>
            </div>
            </a>
            <h1 class="title">
                Quel mode veux tu utiliser
            </h1>
        </div>
        <div class="container">
            <div class="wrap">
                <h3>
                    Mode manuel
                </h3>
                <a href="../../../PrisesCommandees-1/modes/manuel/manuel.php">
                    <img class="img" src="/modes/Images/power.jpeg">
                </a>
            </div>
            <div class="wrap">
                <h3>
                    Programmation quotidienne
                </h3>
                <a href="../../../PrisesCommandees-1/modes/auto/auto.php">
                    <img class="img" src="/modes/Images/auto.jpeg">
                </a>
            </div>
            <div class="wrap">    
                <h3>
                    Création de scénarios pré-enregitrés
                </h3>
                <a href="../../PrisesCommandees-1/modes/scenarios/scenarios.php">
                    <img class="img" src="/modes/Images/Capture d’écran 2023-03-30 à 14.03.29.png">
                </a>
            </div>
        </div>
        <div>
            <a href="../../index.php">
                <div>Revenir a la page d'accueil</div>
            </a>
        </div>
    </div>
</body>
</html>