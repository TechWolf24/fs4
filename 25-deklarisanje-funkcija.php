<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>
        body {
            font-size: 25px;
        }
    </style>
</head>
<body>
    <h1>Deklarisanje funkcija</h1>
    <hr>
    <pre>
        function ime(parametri) {
            // neki kod
        }
        ime(argumenti)
    </pre>
    <?php 
    function ebook() {
        echo "Preuzmite svoj ebook koji ce vam stici na email adresu" . "<br>";
    }
    ebook();
    ebook();
    ebook();
    echo "<hr>";
    $brojac = 0;
    while ($brojac < 10) {
        ebook();
        $brojac++;
    }
    ?>
</body>
</html>