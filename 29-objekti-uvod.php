<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>OOP</h1>
    <hr>
    <?php 
    $gitare = [
        1 => [
            "marka"=> "Fender",
            "model"=> "Stratocaster",
            "cena"=> "1300",
            "opis" => "Blues, Rock",
        ],
        2 => [
            "marka"=> "Jackson",
            "model"=> "X series soloist",
            "cena"=> "1800",
            "opis" => "Heavy metal",
        ],
        3 => [
            "marka"=> "Gibson",
            "model"=> "Les paul",
            "cena"=> "1800",
            "opis"=> "Rock, Metal, Blues",
        ],
        4 => [
            "marka"=> "Fender",
            "model"=> "Telecaster",
            "cena"=> "1900",
            "opis"=> "Rock, Blues",
        ]
    ];
    echo "<pre>";
    print_r($gitare);
    echo "</pre>";
    ?>
</body>
</html>