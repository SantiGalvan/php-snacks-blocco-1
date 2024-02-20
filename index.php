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
]
];

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
    <section id="basket-matches" class="my-5">
        <div class="container">
            <h1 class="text-center text-uppercase mb-4">Basket Matches</h1>
            <div class="card-container">
                <?php foreach ($matches as $match) : ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Match</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $match['home_team'] ?> - <?= $match['away_team'] ?> | <?= $match['home_points'] ?> - <?= $match['away_points'] ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Section Form -->
    <section id="form">
        <div class="container">
            <h1 class="text-center text-uppercase mb-4">Form</h1>
            <form action="script.php" method="get">
                <div class="mb-3">
                    <label for="input-name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="input-name" name="name" placeholder="Nome">
                </div>
                <div class="mb-3">
                    <label for="input-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="input-email" name="email" placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="input-number" class="form-label">Età</label>
                    <input type="number" class="form-control" id="input-number" name="age" placeholder="name@example.com">
                </div>
                <button class="btn btn-primary">Invia</button>
            </form>
        </div>
    </section>
    </main>
</body>
</html>