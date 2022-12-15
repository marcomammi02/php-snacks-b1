<?php
$arrMatch = [
    // match 1
    [
        'home' => [
            'name' => 'Olimpia Milano',
            'score' => 55
        ],
        'guest' => [
            'name' => 'Cantù',
            'score' => 60
        ],
    ],
    // match 2
    [
        'home' => [
            'name' => 'Roma',
            'score' => 70
        ],
        'guest' => [
            'name' => 'Lazio',
            'score' => 45
        ],
    ],
    // match 3
    [
        'home' => [
            'name' => 'Civitavecchia',
            'score' => 80
        ],
        'guest' => [
            'name' => 'Tolfa',
            'score' => 0
        ],
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Snack 1</title>
</head>
<body>
    <h1>Risultati Partite:</h1>
    <ul><?php
        $arrMatchLen = count($arrMatch);
        for ($i = 0; $i < $arrMatchLen; $i++) {
            // var_dump($arrMatch[$i]);
            $match = $arrMatch[$i];
            echo "<li>" . $match['home']['name'] . ' - ' . $match['guest']['name'] . ' | ' . $match['home']['score'] . '-' . $match['guest']['score'] . "</li>";
        }; ?>
    </ul>
</body>
</html>