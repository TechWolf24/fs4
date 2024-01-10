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
    <h1>Implode</h1>
    <hr>
    <?php 
    $neki_tekst = ['Ovo', 'treba', 'da','spojimo','u','string'];
    // var_dump($neki_tekst)
    $spajanje = implode(' ', $neki_tekst);
    var_dump($spajanje);
    echo "<hr>";
    $websites_workshop = ['Sloba M', 'Boban', 'Zoran', 'SLoba Z', 'Jovana', 'Danijel'];
    $spoji = implode(' | ', $websites_workshop);
    echo $spoji;
    ?>
</body>
</html>