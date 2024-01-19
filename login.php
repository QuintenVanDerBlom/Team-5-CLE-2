<?php
/** @var mysqli $db */

if(isset($_POST['submit'])) {
    require_once "includes/database.php";

    // Get form data
    $errors = array();
    $errorMessage = 'oeps er is iets fout gegaan.';
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // If data valid
    if (empty($errors)) {
        // SELECT the user from the database, based on the email address.
        $loginQuery = "SELECT * FROM users where mail_adres = '$email'";
        $result = mysqli_query($db, $loginQuery) or die('error: ' . mysqli_error($db));

        // check if the user exists
        if (mysqli_num_rows($result) != 1) {
            header('Location: register.php');
            exit;
        }

        // Get user data from result
        $user = mysqli_fetch_assoc($result);

        // Check if the provided password matches the stored password in the database
        if (password_verify($password, $user['password'])) {
            // Password is correct

            // Store the user in the session
            $_SESSION['user'] = $user; // Assuming user details are stored in session
            $_SESSION['loggedin'] = true;

            // Redirect to secure page
            header('Location: index.php');
            exit;
        } else {
            // Password is incorrect

            //error incorrect log in
            $errors['loginFailed'] = "Incorrect login credentials";
        }
    }

// User doesn't exist

//error incorrect log in
    // Server-side validation
    if ($email === '') {
        $errors['email'] = $errorMessage;
    }
    if ($password === '') {
        $errors['password'] = $errorMessage;
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
    <link rel="stylesheet" href="css/register.css">
    <title>Login</title>
</head>
<body>
    <section id="formContainer">
        <h2 class="title">Login</h2>
        <form  action="" method="post">

            <!-- Email -->
            <section class="formItem" id="email-Section">
                <label for="email">Email</label>
                <input class="form-input" id="email" type="text" name="email" value="<?= $email ?? ''?>" />

                <div id="errorEmail">
                    <p> <?= $errors['email'] ?? ''?> </p>
                </div>
            </section>

            <!-- Password -->
            <section class="formItem" id="password-Section">
                <label for="password">Password</label>
                <input class="form-input" id="password" type="password" name="password"/>

                <div id="errorPassword">
                    <p> <?= $errors['password'] ?? ''?> </p>
                </div>
            </section>
            <a class="registerLink" href="register.php">Ik heb nog geen account</a>

            <!-- Submit -->
            <section id="submit">
                <button id="submitButton" type="submit" name="submit">Login</button>
            </section>

        </form>
    </section>
</body>
</html>
