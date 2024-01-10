<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatori dodele</title>
    <style>
        th {
            background: lightgreen;
            border: 1px solid black;
            padding: 10px;
        }
        td {
            text-align: center;
            border: 1px solid black;
            padding: 10px;
        }
        body {
            font-size: 30px;
        }
    </style>
</head>
<body>
    <h1>Operatori dodele</h1>
    <hr>
    <table>
        <thead>
            <th>Operator</th>
            <th>Primer</th>
            <th>Jednako je</th>
        </thead>
        <tr>
            <td>=</td>
            <td>i = 10</td>
            <td>i = 10</td>
        </tr>
        <tr>
            <td>+=</td>
            <td>i += 10</td>
            <td>i = i + 10</td>
        </tr>
        <tr>
            <td>-=</td>
            <td>i -= 10</td>
            <td>i = i - 10</td>
        </tr>
        <tr>
            <td>/=</td>
            <td>i /= 10</td>
            <td>i = i / 10</td>
        </tr>
        <tr>
            <td>*=</td>
            <td>i *= 10</td>
            <td>i = i * 10</td>
        </tr>
        <tr>
            <td>%=</td>
            <td>i %= 10</td>
            <td>i = i * 10</td>
        </tr>
        <tr>
            <td>.=</td>
            <td>i .= 10</td>
            <td>i = i . s</td>
        </tr>
    </table>
    <?php 
    // dodela vrednosti
    $a = 3;
    echo $a;

    // sabiranje i dodela
    echo '<hr>';
    $b = 13;
    $b += 13; // b = 13 + 13  $b = $b + 13
    echo $b;

    // oduzimanje i dodela
    echo '<hr>';
    $c = 40;
    $c -= 40;// $c = $c - 40
    echo $c;

    // deljenje i dodela
    echo '<hr>';
    $d = 25;
    $d /= 10; // $d = $d / 10
    echo $d;

    // mnozenje i dodela
    echo '<hr>';
    $e = 5;
    $e *= 10; // $e = $e * 10;
    echo $e;

    // ostatak pri deljenju i dodela
    echo '<hr>';
    $f = 27;
    $f %= 5; // $f = %f % 5
    echo $f;
    // spajanje i dodela
    echo '<hr>';
    $g = 'Banana';
    $g .= "'s";
    echo $g;
    ?>
</body>
</html>