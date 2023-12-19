<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2>
        <?php echo 'Ispis vrijednosti' ?>
    </h2>
    <ol>
        <li>echo</li>
        <li>print</li>
        <li>print_r</li>
        <li>var_dump</li>
    </ol>

    <?php
    $ispis = "Ovo zelim da prikazem lijevo na frontu stranice";
    echo $ispis;

    echo '<hr>';
    $stampa = "Print radi isto sto i echo";
    print $stampa;
    echo '<hr>';
    $programski_jezici = array('php', 'js', 'java', 'c++');
    //                          0    1     2      3
    // echo'<pre>';
    // var_dump($programski_jezici);
    // echo'</pre>';
    echo '<pre>';
    print_r($programski_jezici);
    echo '</pre>';

    $broj = 124;
    var_dump($broj);
    ?>

</body>

</html>