<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style> 
    body {
        font-size: 30px;
    }
    </style>
</head>
<body>
    <h1><?php echo 'Ispis vrednosti'; ?></h1>
    <ol>
        <li>echo</li>
        <li>print</li>
        <li>print_r</li>
        <li>var_dump</li>
    </ol>
    <?php 
    $ispis = "Ovo zelim da prikazem levo na frontu stranice";
    echo $ispis;
    echo '<hr>';
    $stampa = "Print radi isto sto i eho";
    echo $stampa;
    echo '<hr>';
    $programski_jezici = array('php', 'python', 'java', 'dart', 'perl', 'c++');
    //                           0        1         2      3       4       5
    // echo '<pre>';
    // var_dump($programski_jezici);
    // echo '</pre>';
    echo '<pre>';
    print_r($programski_jezici);
    echo '</pre>';

    $broj = 124;
    var_dump($broj);
    ?>
</body>
</html>