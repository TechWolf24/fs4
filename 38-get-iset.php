<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Get i Set</h1>
    <hr>
    <?php 
    class Zaposleni {
        private $ime;
        function __set($ime, $vrednost) {
            $this->ime = $vrednost;  
        }
        function __get($ime) {
            return $this->ime;
        }
    }
    $zaposleni1 = new Zaposleni();
    $zaposleni1->__set('ime','Slobodan');
    echo $zaposleni1->__get('ime');
    ?>
</body>
</html>