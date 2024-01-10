<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Sortitanje elemenata niza</h1>
    <hr>
    <ul>
        <li>sort</li>
        <li>rsort</li>
        <li>asort</li>
        <li>ksort</li>
        <li>arsort</li>
        <li>krsort</li>
    </ul>
    <?php 
    $patike = ['Nike', 'Adidas', 'New balance', 'Puma', 'Asics', 'Sketcers', 'Converse'];
    sort($patike);
    echo "<pre>";
    print_r($patike);
    echo "</pre>";
    echo "<hr>";
    $brojevi = [100,2,39,50,4,98,11,62];
    rsort($brojevi);
    echo "<pre>";
    print_r($brojevi);
    echo "</pre>";
    echo "<hr>";
    $ispitni_rezultati = [
        'Arnold Sudicki' => 100,
        'Nina Zollner' => 60,
        'Bojan Ruzic' => 80,
        'Slobodan Miric' => 45
    ];
    asort($ispitni_rezultati);
    ksort($ispitni_rezultati);
    arsort($ispitni_rezultati);
    krsort($ispitni_rezultati);
    echo "<pre>";
    print_r($ispitni_rezultati);
    echo "</pre>";
    ?>
</body>
</html>