<?php

declare(strict_types=1);

namespace App;

use Collator;

// Zakomentować ten plik debug.php jak pójdzie już projekt na proda
require_once("src/Utils/debug.php");
require_once("src/Controller.php");

// Jak już projekt poleci na produkcję to wyłącz pokazywanie błędów:
// error_reporting(0);
// ini_set("display_errors", "0");

$request = [
    'get' => $_GET,
    'post' => $_POST
];

(new Controller($request))->run();
