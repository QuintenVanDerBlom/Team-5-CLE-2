<?php
// if ($_SESSION["loggedin"] == false){
//     header(location:login.php);
// }

if(isset($_POST['submit'])) {
    /** @var mysqli $db */
    require_once "includes/database.php";

    // Get form data
    $errors = array();
    $errorMessage = 'oeps er is iets fout gegaan.';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dateOfBirth = $_POST['DoB'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];


    // Server-side validation
    if($firstName === '') {
        $errors['firstName'] = $errorMessage;
    }if($lastName === '') {
        $errors['lastName'] = $errorMessage;
    }if($dateOfBirth === '') {
        $errors['DoB'] = $errorMessage;
    }if($email === '') {
        $errors['email'] = $errorMessage;
    }if($number === '') {
        $errors['number'] = $errorMessage;
    }if($password === '') {
        $errors['password'] = $errorMessage;
    }if($adres === '') {
        $errors['adres'] = $errorMessage;
    }if($postcode === '') {
        $errors['postcode'] = $errorMessage;
    }

    // create a secure password, with the PHP function password_hash()
    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // store the new user in the database.
        $query = "INSERT INTO `users`(`id`, `first_name`, `last_name`,`date_of_birth`, `mail_adres`, `phone_number`, `password`, `adres`,`postcode`) 
                  VALUES ('','$firstName','$lastName','$dateOfBirth','$email','$number','$hashedPassword','$adres','$postcode')";

        $db->query($query);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/Peitsman-Favicon.png">
    <title>Profiel</title>
</head>
<body>

    <nav class="navbar">
        <img class="icon-image" src="includes/images/Peitsman_logo.png">
        <a href="producten.php"><span>Producten</span></a>
        <a href="index.php"><span>Home</span></a>
        <a href="preorder.php"><span>Reserveer</span></a>
        <a href="contact.php"><span>Contact</span></a>
        <a href="login.php"><span>Log in</span></a>
    </nav>

    <div class="profile-container">
        <a class="profile-icon" href="profiel.php">
            <img class="profile-icon" src="includes/images/icon.png">
        </a>
    </div>

     <div class="line"></div>

    <section class="profileFlex">

        

        <div class="body-content">
            <div class="left-part-2">
                <h3>Mijn profiel</h3>
                <div class="profiel">

                    <div class="invullen row">

                        <!-- hier staat nu voornaam -->
                        <div class="invullen column">
                            <section class="formItem" id="firstName-Section">
                                <input class="form-input-2" type="text" id="firstName" name="firstName" placeholder="Voornaam" value=" <?= $firstName ?? ''?>" required>
                                <div>
                                    <p> <?= $errors['firstName'] ?? ''?> </p>
                                </div>
                            </section>
                        </div>

                        <!-- hier staat nu achternaam -->
                        <div class="invullen column">
                            <section class="formItem" id="lastName-Section">
                                <input class="form-input-2" type="text" id="lastName" name="lastName" placeholder="Achternaam" value=" <?= $lastName ?? ''?>" required>
                                <div id="errorLastName">
                                    <p> <?= $errors['lastName'] ?? ''?> </p>
                                </div>
                            </section>
                        </div>
                    </div>

                    <!-- hier staat nu E-mail -->
                    <div class="invullen column">
                        <section class="formItem" id="email-Section">
                            <input class="form-input-2" type="text" id="email" name="email" placeholder="E-mail" value="<?= $email ?? ''?>" required>
                            <div id="errorEmail">
                                <p> <?= $errors['email'] ?? ''?> </p>
                            </div>
                        </section>
                    </div>

                    <!-- hier staat nu adres -->
                    <div class="invullen column">
                        <section class="formItem" id="adres-Section">
                            <input class="form-input-2" type="text" id="adres" name="adres" placeholder="Adres" value="<?= $adres ?? ''?>" required>
                            <div id="errorAdres">
                                <p> <?= $errors['adres'] ?? ''?> </p>
                            </div>
                        </section>
                    </div>

                        <!-- hier staat nu postcode -->
                    <div class="invullen column">
                        <section class="formItem" id="postcode-Section">
                            <input class="form-input-2" type="text" id="postcode" name="postcode" placeholder="Postcode" value="<?= $postcode ?? ''?>" required>
                            <div id="errorPostcode">
                                <p> <?= $errors['postcode'] ?? ''?> </p>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- Er komt nog een uitlog knop, ik had er geen zin meer in -->
                <div class="bevestigknop">
                    <button class="confirm_button" type="submit">Wijzigingen opslaan</button>
                </div>
            </div>

            <div class="right-part-2">
                <a class="profile-icon-3" href="profiel.php">
                    <img class="profile-icon-3" src="includes/images/icon.png">
                </a>
                <h2>Welkom</h2>
            </div>
        </div>
    </section>

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