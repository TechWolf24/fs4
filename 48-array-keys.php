<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-size: 25px;
        }
    </style>
</head>
<body>
    <h1>Array keys funkcija za rad sa nizovima</h1>
    <hr>
    <?php 
    $evrovizija = [
        "Hrvatska"=> "Majke",
    //     key        value
        "BIH"=> "Dubioza kolektiv",
        "Srbija"=> "Zvonko Bogdan",
        "Makedonija"=> "Leb i sol",
        "Slovenija"=> "Laibach",
        "Crna Gora"=> "Rambo Amadeus"
    ];
    echo "<pre>";
    print_r($evrovizija);
    echo "</pre>";
    echo "<hr>";
    echo "<pre>";
    print_r(array_keys($evrovizija));
    echo "</pre>";
    echo "<hr>";
    echo "<pre>";
    print_r(array_key_first($evrovizija));
    echo "</pre>";
    echo "<hr>";
    echo "<pre>";
    print_r(array_key_last($evrovizija));
    echo "</pre>";
    ?>
</body>
</html>