<?php
    $nRandoms = 15;
    $min = 10;
    $max = 99;
    $arrRandoms = [];
    while (count($arrRandoms) < $nRandoms) {
        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $arrRandoms)) {
            $arrRandoms[] = $randomNumber;
        };
    };

    var_dump($arrRandoms);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>## Snack 3</title>
</head>
<body>
    
</body>
</html>