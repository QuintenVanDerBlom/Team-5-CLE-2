<?php

//Define DB credentials
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'pietman_cle';

//Paths
const BASE_PATH = '/Team-5-CLE-2/';
const INCLUDES_PATH = __DIR__ . '/';

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(/**
 * @throws ErrorException
 */ function ($severity, $message, $file, $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});