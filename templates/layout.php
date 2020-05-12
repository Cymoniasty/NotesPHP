<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NotatnikPHP</title>
  <script src="https://kit.fontawesome.com/891c3de228.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/public/style.css">
</head>

<body class="body">
  <div class="wrapper">

    <!-- Główny widok -->
    <div class="header">
      <h1><i class="far fa-clipboard"></i>Moje notatki</h1>
    </div>

    <div class="container">
      <div class="menu">
        <ul>
          <li><a href="/">Lista notatek</a></li>
          <li><a href="/?action=create">Nowa notatka</a></li>
        </ul>
      </div>

      <!-- Renderowanie odpowiedniego widoku -->
      <div class="page">
        <?php require_once("templates/pages/$page.php"); ?>
      </div>
    </div>

    <div class="footer">
      <p>Notatki - projekt w kursie PHP</p>
    </div>
  </div>
</body>

</html>