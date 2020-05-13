<?php

declare(strict_types=1);

namespace App;

require_once("src/view.php");

class Controller
{
    private const DEFAULT_ACTION = "list";

    private array $getData;
    private array $postData;

    public function __construct(array $getData, array $postData)
    {
        $this->getData = $getData;
        $this->postData = $postData;
    }

    public function run()
    {
        $action = $this->getData['action'] ?? self::DEFAULT_ACTION; // self to wskazanie na klasę, w której się znajduje stała

        $view = new View();
        $viewParams = [];

        switch ($action) {
            case 'create':
                $page = 'create';
                $created = false;

                if (!empty($this->postData)) {
                    $created = true;
                    $viewParams = [
                        'title' =>  $this->postData['title'],
                        'description' =>  $this->postData['description']
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
