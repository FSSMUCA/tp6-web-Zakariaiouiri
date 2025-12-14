<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Informations PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f8;
      padding: 20px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      max-width: 500px;
      margin: auto;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  <div class="card">
    <?php
    $etablissement = "Institut de Technologie";
    $module = "Développement Web";
    $annee = 2025;

    $a = 10;
    $b = 5;

    $addition = $a + $b;
    $multiplication = $a * $b;

    echo "<h2>$etablissement</h2>";
    echo "<p>Module : $module</p>";
    echo "<p>Année : $annee</p>";
    echo "<p>a = $a, b = $b</p>";
    echo "<p>Addition : $addition</p>";
    echo "<p>Multiplication : $multiplication</p>";
    ?>
  </div>

</body>

</html>