<?php

declare(strict_types=1);

namespace App;

require_once("Exception/StorageException.php");

use App\Exception\ConfigurationException;
use App\Exception\StorageException;
use PDO;
use PDOException;
use Throwable;

class Database
{

  private PDO $conn;

  public function __construct(array $config)
  {

    try {
      $this->validateConfig($config);
      $this->createConnection($config);
    } catch (PDOException $e) {
      throw new StorageException("Connection error");
    }
  }


  public function createNote(array $data): void
  {
    try {
      echo "Tworzymy notatkę";
      dump($data);
    } catch (Throwable $e) {
      dump($e);
    };
  }

  private function createConnection(array $config): void
  {
    $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
    $this->conn = new PDO(
      $dsn,
      $config['user'],
      $config['password']
    );
  }

  private function validateConfig(array $config): void
  {
    if (
      empty($config['database'])
      || empty($config['host'])
      || empty($config['user'])
      || empty($config['password'])
    ) {
      throw new ConfigurationException('Storage configuration error');
    }
  }
}
