<?php 

declare(strict_types = 1);

namespace App;

require_once ("src/Utils/debug.php");


$action = $_GET['action'] ?? null;

?>  

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NotatnikPHP</title>
</head>
<body>
  
  <div class="header">
    <h1>Moje notatki</h1>
  </div>

  <div class="container">
    <div class="menu">
      <ul>
        <li><a href="/">Lista notatek</a></li>
        <li><a href="/?action=create">Nowa notatka</a></li>
      </ul>
    </div>
  </div>

  <div>
    <?php if ($action === 'create'): ?>
      <h3>Nowa notatka</h3>
      <?php echo htmlentities($action) ?>
    <?php else: ?>
      <h4>Lista notatek</h4>
      <?php echo htmlentities($action ?? '') ?>
    <?php endif; ?>
  </div>

  <div class="footer"></div>
</body>
</html>