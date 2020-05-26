<?php

declare(strict_types=1);

namespace App;

use App\Exception\AppException;
use App\Exception\ConfigurationException;
use Throwable;

// Zakomentować ten plik debug.php jak pójdzie już projekt na proda
require_once("src/Utils/debug.php");
require_once("src/Controller.php");

$configuration = require_once("config/config.php");

// Jak już projekt poleci na produkcję to wyłącz pokazywanie błędów:
// error_reporting(0);
// ini_set("display_errors", "0");

$request = [
  'get' => $_GET,
  'post' => $_POST
];

try {
  // $controller = new Controller($request);
  // $controller->run();

  Controller::initConfiguration($configuration);
  (new Controller($request))->run();
} catch (ConfigurationException $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
  echo 'Proszę skonatkować się z administratorem';
} catch (AppException $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
} catch (Throwable $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
}
