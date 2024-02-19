<?php
$matches = [[
    'home_team' => 'Virtus Bologna',
    'away_team' => 'Dinamo Sassari',
    'home_points' => rand(40,100),
    'away_points' => rand(40,100),
],
[
    'home_team' => 'Olimpia Milano',
    'away_team' => 'V.L. Pesaro',
    'home_points' => rand(40,100),
    'away_points' => rand(40,100),
],
[
    'home_team' => 'Reyer Venezia',
    'away_team' => 'Fortitudo Bologna',
    'home_points' => rand(40,100),
    'away_points' => rand(40,100),
],
[
    'home_team' => 'Pallacanestro Cantù',
    'away_team' => 'Virtus Roma',
    'home_points' => rand(40,100),
    'away_points' => rand(40,100),
],
];

var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Matches | Form</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>

    <!-- Section Basket Matches -->
    <section id="basket-matches"></section>
    </main>
</body>
</html>