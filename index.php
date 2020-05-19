<?php

declare(strict_types=1);

namespace App;

// Zakomentować ten plik debug.php jak pójdzie już projekt na proda
require_once("src/Utils/debug.php");
require_once("src/Controller.php");

$configuration = require_once("config/config.php");

dump($configuration);

// Jak już projekt poleci na produkcję to wyłącz pokazywanie błędów:
// error_reporting(0);
// ini_set("display_errors", "0");

$request = [
    'get' => $_GET,
    'post' => $_POST
];

Controller::initConfiguration($configuration);
(new Controller($request))->run();
