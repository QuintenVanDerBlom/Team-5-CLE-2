<?php
if(isset($_POST['submit'])) {
    /** @var mysqli $db */
    require_once "includes/database.php";

    // Get form data
    $errors = array();
    $errorMessage = 'oeps er is iets fout gegaan.';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    // Server-side validation
    if($firstName === '') {
        $errors['firstName'] = $errorMessage;
    }if($lastName === '') {
        $errors['lastName'] = $errorMessage;
    }if($email === '') {
        $errors['email'] = $errorMessage;
    }if($number === '') {
        $errors['number'] = $errorMessage;
    }if($password === '') {
        $errors['password'] = $errorMessage;
    }

    // create a secure password, with the PHP function password_hash()
    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // store the new user in the database.
        $query = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `mail_adres`, `phone_number`, `password`) 
                  VALUES ('','$firstName','$lastName','$email','$number','$hashedPassword')";

        $db->query($query);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiel</title>
</head>
<body>
<section>

    <h2 class="title">Mijn profiel</h2>
        <form  action="" method="post">

            <!-- First name -->
            <section id="firstName-Section">
                <label for="firstName">First name</label>
                <input id="firstName" type="text" name="firstName" value=" <?= $firstName ?? ''?>" />

                <div>
                    <p> <?= $errors['firstName'] ?? ''?> </p>
                </div>
            </section>

            <!-- Last name -->
            <section id="lastName-Section">
                <label for="lastName">Last name</label>
                <input id="lastName" type="text" name="lastName" value="<?= $lastName ?? ''?>" />

                <div id="errorLastName">
                    <p> <?= $errors['lastName'] ?? ''?> </p>
                </div>
            </section>

            <!-- Adres -->
            <section id="adres-Section">
                <label for="adres">adres</label>
                <input id="adres" type="text" name="adres" value="<?= $adres ?? ''?>" />

                <div id="erroradres">
                    <p> <?= $errors['adres'] ?? ''?> </p>
                </div>
            </section>

            <!-- Email -->
            <section id="email-Section">
                <label for="email">Email</label>
                <input id="email" type="text" name="email" value="<?= $email ?? ''?>" />

                <div id="errorEmail">
                    <p> <?= $errors['email'] ?? ''?> </p>
                </div>
            </section>

            <!-- Number -->
            <section id="number-Section">
                <label class="label" for="number">Number</label>
                <input class="input" id="number" type="number" name="number" value="<?= $number ?? ''?>" />

                <div id="errorNumber">
                    <p class="help is-danger"> <?= $errors['number'] ?? ''?> </p>
                </div>
            </section>

                <!-- Password -->
            <section id="password-Section">
                <label for="password">Password</label>
                <input id="password" type="password" name="password"/>

                <div id="errorPassword">
                    <p> <?= $errors['password'] ?? ''?> </p>
                </div>
            </section>

            <!-- Submit -->
            <section id="submit">
                    <button type="submit" name="submit">Register</button>
            </section>

        </form>
    </section>
</body>
</html>
