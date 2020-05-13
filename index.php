<?php

declare(strict_types=1);

namespace App;

// Zakomentować ten plik debug.php jak pójdzie już projekt na proda
require_once("src/Utils/debug.php");
require_once("src/view.php");

// Jak już projekt poleci na produkcję to wyłącz pokazywanie błędów:
// error_reporting(0);
// ini_set("display_errors", "0");

const DEFAULT_ACTION = "list";

$action = $_GET['action'] ?? DEFAULT_ACTION;

$view = new View();

$viewParams = [];

switch ($action) {
    case 'create':
        $page = 'create';
        $created = false;

        if (!empty($_POST)) {
            $created = true;
            $viewParams = [
                'title' => $_POST['title'],
                'description' => $_POST['description']
            ];
        }
        $viewParams['created'] = $created;
        break;
    case 'show':
        $viewParams = [
            'title' => 'Moja notatka',
            'description' => 'Opis'
        ];
        break;
    default:
        $page = 'list';
        $viewParams['resultList'] = "Wyświetlamy notatki";
        break;
}

$view->render($page, $viewParams);
