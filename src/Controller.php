<?php

declare(strict_types=1);

namespace App;

class Controller
{
    public function run(string $action)
    {
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
    }
}
