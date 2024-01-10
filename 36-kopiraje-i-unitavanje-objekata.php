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
    <h1>Kopiranje i unistavanje objekata</h1>
    <hr>
    <?php 
    class Zaposleni {
        public $ime;
    }
    $zaposleni1 = new Zaposleni();
    $zaposleni1->ime = "Bojan Djokic";
    $zaposleni2 = clone $zaposleni1;

    echo "<pre>";
    print_r($zaposleni1);
    echo "</pre>";
    echo "Zaposleni 1 zove se " . $zaposleni1->ime . " a zaposleni 2 zove se " . $zaposleni2->ime;
    unset($zaposleni2);
    var_dump($zaposleni2);
    ?>
</body>
</html>