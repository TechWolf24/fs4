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
    <h2>Numericki nizovi</h2>
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

    echo "Nastavak.....nizovi" . '<hr>';

    $kursevi = ['fullstack', 'frontend', 'wordpress', 'backend', 'digitalac', 'python'];
    echo "Mi smo trenutno na odeljku - <b>$kursevi[3]</b>";

    echo '<hr>';

    $parni_brojevi = ['2','4','6','8','10'];
    //                 0   1    2   3   4
    echo '<pre>';
    print_r($parni_brojevi);
    echo '</pre>';

    echo '<hr>';
    $predavac1 = 'Boban';
    $predavac2 = 'Sloba';
    $predavac3 = 'Danijel';
    $predavac4 = 'Jovana';
    $fs_kurs = ['html', 'css','javascript', 'react', 'php i mysql', 6, ['flex', 'bootstrap', 'sass'], null, true, false];
    //             0      1         2          3           4        5               6                   7     8     9
    //                                                                 [   0        1            2  ]
    echo "<p>Nas FS kurs traje $fs_kurs[5] meseci.</p>";
    echo '<hr>';
    echo "Sa " . $predavac1 . " ste ucili " . $fs_kurs[0]. " i " . $fs_kurs[1] . " ali i " . $fs_kurs[6][1] . " i " . $fs_kurs[6][2] . "<br>";
    echo "Sad sa ucite " . $fs_kurs[4] . " a predavac se zove " . $predavac2;
    ?>

</body>
</html>