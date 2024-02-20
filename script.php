<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';

$is_name_valid = mb_strlen(trim($name));
$is_email_valid = str_contains($email, '@') && str_contains($email, '.');
$is_age_valid = is_numeric($age) && $age > 0;
$is_form_invalid = !$is_name_valid || !$is_email_valid || !$is_age_valid;

$message = $is_form_invalid ? 'Acesso Negato' : 'Acesso Riuscito';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

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

        <!-- Section Result -->
        <section id="result" class="my-5">
            <div class="container">
                <h1 class="text-center text-uppercase">Risultato del form</h1>
                <p class="text-center"><?= $message ?></p>
            </div>
        </section>
    </main>
</body>
</html>