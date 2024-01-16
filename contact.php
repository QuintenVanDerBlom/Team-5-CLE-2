<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/Peitsman-Favicon.png">
    <title>Peitsman - Contact</title>
</head>

<body class="contactforum">
    <nav class="navbar">
    <img class="icon-image" src="includes/images/Peitsman_logo.png"><a href="#products"><span>Producten</span></a><a href="index.php"><span>Home</span></a><a href="#preorder"><span>Reserveer</span></a><a class="current" href="contact.php"><span>Contact</span></a><a href="#login"><span>Log in</span></a><img class="profile-icon" src="includes/images/icon.png">
    </nav>
    <div class="line"></div>
    <div id="page-container">
        <div id="content-wrap">
            <div class="das_forum" id="forum">
                <div class="form_stuff">
                    <h2>Neem Contact op</h2>
                    <form action="contact_bedankt.html">
                        <div class="invullen row">
                            <div class="invullen column">
                                <label for="voornaam">Voornaam <span style="color: rgb(255, 0, 0)">*</span></label>
                                <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" required>
                            </div>
                            <div class="invullen column">
                                <label for="achternaam">Achternaam <span style="color: rgb(255, 0, 0)">*</span></label>
                                <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam" required>
                            </div>
                        </div>
                        <div class="invullen">
                            <label for="email">Uw e-mail adres <span style="color: rgb(255, 0, 0)">*</span></label>
                            <input type="email" id="email" name="email" placeholder="E-mail" required>
                        </div>
                        <div class="invullen bericht">
                            <label for="bericht">Bericht <span style="color: rgb(255, 0, 0)">*</span></label>
                            <textarea id="bericht" name="bericht" rows="10"></textarea>
                        </div>
                        <button class="submit_button" type="submit">Verstuur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<footer>
    <div class="belangrijk">
        <p>&copy; 2024 Peitsman.com | alle rechten voorbehouden</p>
    </div>
    <div class="meuk">
        <p><a href="Cookiebeleid.html">Cookiebeleid</a> | <a href="Algemene_voorwaarden.html">Algemene voorwaarden</a></p>
    </div>
</footer>