<?php

//Require needed files
require_once 'settings.php';



//Always start our session (always place AFTER require of classes to avoid http://stackoverflow.com/a/9443818)
$session = new \includes\required\Session();

//Set variable for errors
$errors = [];