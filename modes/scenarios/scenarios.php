<!DOCTYPE html>
<html>
<head>
	<title>Création de scénarios</title>
    <link rel="stylesheet" href="scenarios.css">
    <link rel="shortcut icon" href="/prises.png">
</head>
<body>
    <div class="header">
        <a href="/PrisesCommandees-1/choixMode/choixMode.php"><div class="choixMode">Revenir au choix des modes</div></a>
        <a href="/PrisesCommandees-1/choixMode/choixMode.php"><div class="disconnect">Se déconnecter</div></a>
    </div>
	<div class="container">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i=0; $i<24; $i++) {
                    echo "<tr>";
                    if ($i==0) {
                        echo "<td>00:00</td>";
                    } else {
                        echo "<td>".$i.":00</td>";
                    }
                    for ($j=0; $j<7; $j++) {
                        echo "<td><button onclick=\"alert('Jour ".($j+1).", heure ".str_pad($i, 2, "0", STR_PAD_LEFT).":00')\"></button></td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
