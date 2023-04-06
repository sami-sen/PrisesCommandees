<!DOCTYPE html>
<html>
<head>
	<title>Mode automatique</title>

    <link rel="shortcut icon" href="/prises.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="auto.css">
</head>
<body>
    <div class="title">
        <h2>Clique sur chaque heure pour activer / desactiver la prise</h2>
        </div>
    <select class="select">
            <option>Choisir la prise</option>
            <option>Prise 1</option>
            <option>Prise 2</option>
            <option>Prise 3</option>
        </select>
    <div class="container">
        <div class="containerHour">
            <div class="ligne">
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 00h')"></div>
                    <div class="time"> 00h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 01h')"></div>
                    <div class="time">1h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 02h')"></div>
                    <div class="time">2h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 03h')"></div>
                    <div class="time">3h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 04h')"></div>
                    <div class="time">4h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 05h')"></div>
                    <div class="time">5h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 06h')"></div>
                    <div class="time">6h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 07h')"></div>
                    <div class="time">7h</div>
                </div>
            </div>
            <div class="ligne">
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 08h')"></div>
                    <div class="time">8h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 09h')"></div>
                    <div class="time">9h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 10h')"></div>
                    <div class="time">10h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 11h')"></div>
                    <div class="time">11h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 12h')"></div>
                    <div class="time">12h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 13h')"></div>
                    <div class="time">13h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 14h')"></div>
                    <div class="time">14h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 15h')"></div>
                    <div class="time">15h</div>
                </div>
            </div>

            <div class="ligne">
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 16h')"></div>
                    <div class="time">16h</div>
                </div>
                <div>
                <div class="hour" onclick="alert('Vous avez cliqué sur 17h')"></div>
                    <div class="time">17h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 18h')"></div>
                    <div class="time">18h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 19h')"></div>
                    <div class="time">19h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 20h')"></div>
                    <div class="time">20h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 21h')"></div>
                    <div class="time">21h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 22h')"></div>
                    <div class="time">22h</div>
                </div>
                <div>
                    <div class="hour" onclick="alert('Vous avez cliqué sur 23h')"></div>
                    <div class="time">23h</div>
                </div>
            </div>
        </div>
        <div class="containerButton">
            <button class="btn">Enregistrer</button>
        </div>
        <div>
            <a href="../../choixMode/choixMode.php">
                <h3>Revenir au choix des modes</h3>
            </a>
        </div>
    </div> 
    </body>
</html>
