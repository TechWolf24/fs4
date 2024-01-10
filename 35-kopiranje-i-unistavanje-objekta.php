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
    <h1>Kopiranje i unistavanje objekta</h1>
    <hr>
    <?php 
    class Zaposleni {
        public $ime;
        function __construct($ime) {
            $this->ime = $ime;
        }
    }
    $zaposleni1 = new Zaposleni("Bojan");
    echo "<pre>";
    print_r($zaposleni1);
    echo "</pre>";
    $zaposleni2 = clone $zaposleni1;
    echo "<pre>";
    print_r($zaposleni2);
    echo "</pre>";
    echo "<hr>";
    echo "Vrednost svojstva ime objekta zaposleni1 je " . $zaposleni1->ime . " a vrednost svojstva ime objektna zaposleni 2 je " . $zaposleni2->ime;
    echo "<hr>";
    unset($zaposleni2);
    // echo "<pre>";
    // print_r($zaposleni2);
    // echo "</pre>";
    ?>
</body>
</html>