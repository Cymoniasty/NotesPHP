<?php

declare(strict_types=1);

namespace App;

use App\Exception\ConfigurationException;

require_once("Database.php");
require_once("View.php");

class Controller
{
  private const DEFAULT_ACTION = "list";

  private static array $configuration = [];

  private Database $database;
  private array $request;
  private View $view;

  public static function initConfiguration(array $configuration): void
  {
    self::$configuration = $configuration;
  }

  public function __construct(array $request)
  {
    if (empty(self::$configuration['db'])) {
      throw new ConfigurationException("Configuration error");
    }
    $this->database = new Database(self::$configuration['db']);

    $this->request = $request;
    $this->view = new View();
  }

  public function run(): void
  {
    $viewParams = [];

    switch ($this->action()) {
      case 'create':
        $page = 'create';
        $created = false;

        $data = $this->getRequestPost();
        if (!empty($data)) {
          $created = true;
          $this->database->createNote($data); // tworzymy tutaj notatkę
          header('Location /'); // po utworzeniu notatki przenosi nas do strony głównej

          //na wszelki wypadek go tu zostawie, jak się nie pojawi dalej w kursie to do wyjebania xD
          // $viewParams = [
          //   'title' =>  $data['title'],
          //   'description' =>  $data['description']
          // ];
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
    $this->view->render($page, $viewParams);
  }

  private function action(): string
  {
    $data = $this->getRequestGet();
    return $data['action'] ?? self::DEFAULT_ACTION; // self to wskazanie na klasę, w której się znajduje stała
  }

  private function getRequestGet(): array
  {
    return $this->request['get'] ?? [];
  }

  private function getRequestPost(): array
  {
    return $this->request['post'] ?? [];
  }
}
