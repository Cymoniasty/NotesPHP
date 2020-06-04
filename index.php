<?php

declare(strict_types=1);

spl_autoload_register(function (string $classNamespace) {
  $path = str_replace(['\\', 'App/'], ['/', ''], $classNamespace);
  $path = "src/$path.php";
  require_once($path);
});

// Zakomentować ten plik debug.php jak pójdzie już projekt na proda
require_once("src/Utils/debug.php");
$configuration = require_once("config/config.php");

use App\Controller\AbstractController;
use App\Controller\NoteController;
use App\Request;
use App\Exception\AppException;
use App\Exception\ConfigurationException;

// Jak już projekt poleci na produkcję to wyłącz pokazywanie błędów:
// error_reporting(0);
// ini_set("display_errors", "0");


$request = new Request($_GET, $_POST);

try {
  // $controller = new Controller($request);
  // $controller->run();

  AbstractController::initConfiguration($configuration);
  (new NoteController($request))->run();
} catch (ConfigurationException $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
  echo 'Proszę skonatkować się z administratorem';
} catch (AppException $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
} catch (\Throwable $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
}
