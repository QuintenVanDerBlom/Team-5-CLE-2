<?php

    $loggedin = true;

    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
        $_SESSION['loggedin'] = false;
    } else {
        $loggedin = $_SESSION['loggedin'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/Peitsman-Favicon.png">
    <title>Home</title>
</head>
<body>

    <?php if ($loggedin){?>
    <nav class="navbar">
        <img class="icon-image" src="includes/images/Peitsman_logo.png">
        <a href="producten.php"><span>Producten</span></a>
        <a class="current" href="index.php"><span>Home</span></a>
        <a href="preorder.php"><span>Reserveer</span></a>
        <a href="contact.php"><span>Contact</span></a>
        <a href="login.php"><span>Log in</span></a>
    </nav>
    <?php } else { ?>
        <nav class="navbar">
            <img class="icon-image" src="includes/images/Peitsman_logo.png">
            <a href="producten.php"><span>Producten</span></a>
            <a class="current" href="index.php"><span>Home</span></a>
            <a href="preorder.php"><span>Reserveer</span></a>
            <a href="contact.php"><span>Contact</span></a>
            <a href="login.php"><span>Log in</span></a>
            <img class="profile-icon" src="includes/images/icon.png">
        </nav>
    <?php }  ?>

    <div class="profile-container">
        <a class="profile-icon" href="profiel.php">
            <img class="profile-icon" src="includes/images/icon.png">
        </a>
    </div>


     <div class="line"></div>

    <header>

        <h1>Welkom bij Peitsman</h1>

            <p>
                Wij zijn Peitsman, gevestigd in Rotterdam, Utrecht en Zwolle.
                Wij houden van beeld, licht en geluid en we willen graag laten zien welke fantastische dingen
                je ermee kunt doen. Wij denken mee en bieden creatieve oplossingen op het gebied van
                audiovisuele techniek. Voor organisatoren en producenten van (bedrijfs)evenementen
                maar ook in vaste installaties en theatertours.
            </p>

    </header>

    </div>

        <div class="line"></div>

        <div class="center-container">

            <section>

                <main id="producten">

                    <h2>Onze producten</h2>

                    <div id="cards">

                        <div class="card-contents">
                            <div class="card-contents-img"><img src="includes/images/licht.png"></div>
                            <div class="card-contents-txt">
                                <h3>Licht</h3>
                                    <p>Alles wat je nodig hebt voor een ideale belichting</p>
                                    <button class="link_button">
                                        <a href="Producten">Bestellen</a>
                                    </button>
                            </div>
                        </div>

                        <div class="card-contents">
                            <div class="card-contents-img"><img src="includes/images/beeld.png"></div>
                            <div class="card-contents-txt">
                                <h3>Beeld</h3>

                                    <p>Hier vind je de beste schermen van Nederland </p>
                                    <button class="link_button">
                                        <a href="producten">Bestellen</a>
                                    </button>
                            </div>
                        </div>

                        <div class="card-contents">
                            <div class="card-contents-img"><img src="includes/images/geluid.png"></div>
                            <div class="card-contents-txt">
                                <h3>Geluid</h3>

                                <p>Alle producten die je nodig hebt voor jouw ideale geluid</p>

                                <button class="link_button">
                                    <a href="producten">Bestellen</a>
                                </button>
                            </div>
                        </div>

                    </div>

                </main>

            </section>

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