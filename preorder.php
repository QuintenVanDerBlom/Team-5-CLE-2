<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/Peitsman-Favicon.png">
    <title>Peitsman - Reserveren</title>
</head>

<body>
    <nav class="navbar">
        <img class="icon-image" src="includes/images/Peitsman_logo.png">
        <a href="producten.php"><span>Producten</span></a>
        <a href="index.php"><span>Home</span></a>
        <a class="current" href="preorder.php"><span>Reserveer</span></a>
        <a href="contact.php"><span>Contact</span></a>
        <a href="login.php"><span>Log in</span></a>
    </nav>

    <div class="profile-container">
        <a class="profile-icon" href="profiel.php">
            <img class="profile-icon" src="includes/images/icon.png">
        </a>
    </div>
    <div class="line"></div>

    <div class="body-content">
        <div class="left-part">
            <h2>Reserveer</h2>
            <div class="producten-lijst">
                <h3 id="winkelwagen">Toegevoegde producten</h3>
                <div class="winkelwagen-container">
                    <!-- Hier is waar je de toegevoegde producten terug moet kunnen vinden. -->
                </div>
            </div>
            <h3>Plek van bezorging</h3>
            <div class="plekbezorging">
                <div class="invullen row">
                    <div class="invullen column">
                        <input type="text" id="adres" name="adres" placeholder="Adres" required>
                    </div>
                    <div class="invullen column">
                        <input type="text" id="postcode" name="postcode" placeholder="Postcode" required>
                    </div>
                </div>
            </div>
            <h3>Tijd</h3>
            <div class="tijd">
                <div class="invullen row">
                    <div class="invullen column">
                        <input type="time" id="start-tijd" name="start-tijd" required>
                    </div>
                    <div class="invullen column_midden">
                        <p>tot</p>
                    </div>
                    <div class="invullen column">
                        <input type="time" id="eind-tijd" name="eind-tijd" required>
                    </div>
                </div>
            </div>
            <div class="bestelknop">
                <button class="order_button" type="submit">Bestel</button>
            </div>
        </div>

        <div class="right-part">
            <div class="meer-reserveren">
                <h2>Meer reserveren?</h2>
                <p><a class="more-products-link" href="products.php">Bekijk producten</a></p>
            </div>
            
            
            <h2>Kalender</h2>
            <div class="kalender">
                <h3>hier komt de kalender ben er nog mee bezig</h3>
            </div>
            <div class="kalender-buttons">
                <button class="arrow-button" id="left-arrow">&#8592;</button>
                <button class="arrow-button" id="right-arrow">&#8594;</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="belangrijk">
            <p>&copy; 2024 Peitsman.com | alle rechten voorbehouden</p>
        </div>
        <div class="meuk">
            <p><a href="Cookiebeleid.html">Cookiebeleid</a> | <a href="Algemene_voorwaarden.html">Algemene voorwaarden</a></p>
        </div>
    </footer>
</body>

</html>