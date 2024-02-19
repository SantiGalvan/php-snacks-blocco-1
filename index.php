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
</head>
<body>
    <main>

    <!-- Section Basket Matches -->
    <section id="basket-matches"></section>
    </main>
</body>
</html>