<?php
    $firstname = $_GET['firstname'] ?? ''; // Shortcut of: $firstname = isset($_GET['firstname']) ? $_GET['firstname'] : '';
    $mail = $_GET['mail'] ?? '';
    $age = $_GET['age'] ?? '';

    $posAt = strpos($mail, '@');
    $posDot = strpos($mail, '.', $pos_at);

    if (strlen($firstname) > 3 && is_numeric($age) && $posAt !== false && $posDot !== false) {
        $message = 'Accesso riuscito';
    } else {
        $message = 'Accesso negato';
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Snack 2</title>
</head>
<body>
    <form action="" method="get">
        <label for="firstname">Firstname: </label>
        <input type="text" name="firstname" id="firstname" value=<?= $firstname; ?>>

        <label for="mail">Email: </label>
        <input type="text" name="mail" id="mail" value=<?= $mail; ?>>

        <label for="age">Age: </label>
        <input type="text" name="age" id="age" value=<?= $age; ?>>
        <button>SEND</button>
    </form>
    <h3><?= $message; ?></h3>
</body>
</html>