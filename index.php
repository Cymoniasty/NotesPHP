<?php

declare(strict_types=1);

namespace App;

// Zakomentować ten plik debug.php jak pójdzie już projekt na proda
require_once("src/Utils/debug.php");
require_once("src/Controller.php");

// Jak już projekt poleci na produkcję to wyłącz pokazywanie błędów:
// error_reporting(0);
// ini_set("display_errors", "0");

const DEFAULT_ACTION = "list";

$action = $_GET['action'] ?? DEFAULT_ACTION;

$controller = new Controller($_POST);

$controller->run($action);
