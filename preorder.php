<?php
if(isset($_POST['submit'])) {
    /** @var mysqli $db */
    require_once "includes/database.php";

    // Get form data
    $errors = array();
    $errorMessage = 'oeps er is iets fout gegaan.';

    $user_id = 1;
    $user_name = 'test';
    //Datum en Tijd Variabelen om ze te combineren voor de database
    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    //Combineer bijde datum en tijd
    $date = date('Y-m-d H:i:s', strtotime("$datum $tijd"));
    $category_id = 1;
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];

    // Server-side validation
    if($user_id === '') {
        $errors['user_id'] = $errorMessage;
    }if($user_name === '') {
        $errors['user_name'] = $errorMessage;
    }if($datum === '') {
        $errors['datum'] = $errorMessage;
    }if($tijd === '') {
        $errors['tijd'] = $errorMessage;
    }if($category_id === '') {
        $errors['category_id'] = $errorMessage;
    }if($adres === '') {
        $errors['adres'] = $errorMessage;
    }if($postcode === '') {
        $errors['postcode'] = $errorMessage;
    }

    if (empty($errors)) {
        // store the new appointment in the database.
        $query = "INSERT INTO `appointments`(`user_id`, `user_name`, `date`, `category_id`, `adres`, `postcode`) 
                  VALUES ('$user_id','$user_name','$date','$category_id','$adres','$postcode')";

        $db->query($query);
        header('Location: preorder.php');
    }
}
?>

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
            <form  action="" method="post">
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
                <h3>Datum en Tijd</h3>
                <div class="tijd">
                    <div class="invullen row">
                        <div class="invullen column">
                            <input type="date" id="datum" name="datum" required>
                        </div>
                        <div class="invullen column">
                            <input type="time" id="tijd" name="tijd" required>
                        </div>
                    </div>
                </div>
                <div class="bestelknop">
                    <button class="order_button" type="submit" name="submit">Bestel</button>
                </div>
                </div>
             </form>


        <div class="right-part">
            <div class="Meer">
                <div class="invullen column">
                        <h2>Meer bestellen?</h2>
                    </div>
                    <div class="invullen column">
                        <a class="more-products-link">Bekijk</a>
                    </div>
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