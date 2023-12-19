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
        h2 {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Nizovi - Arrays</h1>
    <ul>
        <li>Numericki</li>
        <li>Asocijativni</li>
        <li>Multidimenzioni</li>
    </ul>
    <hr>
    <?php 
    echo "<h2>Numericki niz</h2>";
    echo "<hr>";
    $predavac = "Sloba";
    $trajanje = 2;
    $back_end_jezici = array('php', 'python', 'java', 'c', 'perl', 'ruby');
    //                         0        1        2      3     4       5
    echo "<pre>";
    print_r( $back_end_jezici );
    echo "</pre>";
    echo "Sad smo na backend delu fullstack kursa gde je pradavac " . $predavac . " i sa njim radite $back_end_jezici[0]" . " i taj deo kursa traje " . $trajanje . " meseca";
    echo "<hr>";
    echo $back_end_jezici[0] . '<hr>';
    echo $back_end_jezici[1]  . '<hr>';
    echo $back_end_jezici[2]  . '<hr>';
    echo $back_end_jezici[3]  . '<hr>';
    echo $back_end_jezici[4]  . '<hr>';
    echo $back_end_jezici[5]  . '<hr>';
    ?>
</body>
</html>