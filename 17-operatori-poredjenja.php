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
    <h1>Operatori poredjenja</h1>
    <hr>
    <table>
        <thead>
            <th>Operator</th>
            <th>Opis</th>
            <th>Primer</th>
        </thead>
        <tr>
            <td>==</td>
            <td>Jednako sa</td>
            <td>$a == $b</td>
        </tr>
        <tr>
            <td>===</td>
            <td>Identicno sa</td>
            <td>$a === $b</td>
        </tr>
        <tr>
            <td>!=   <></td>
            <td>Nije jednako sa</td>
            <td>$a != $b</td>
        </tr>
        <tr>
            <td>!==</td>
            <td>Nije identicno sa</td>
            <td>$a !== $b</td>
        </tr>
        <tr>
            <td>></td>
            <td>Vece od</td>
            <td>$a > $b</td>
        </tr>
        <tr>
            <td>>=</td>
            <td>Vece i jednako od</td>
            <td>$a >= $b</td>
        </tr>
        <tr>
            <td><</td>
            <td>Manje od</td>
            <td>$a < $b</td>
        </tr>
        <tr>
            <td><=</td>
            <td>Manje i jedako od</td>
            <td>$a <= $b</td>
        </tr>
        
    </table>
    <?php 
    $a = 10;
    $b = "10";
    var_dump( $a === $b );
    echo "<hr>";
    $x = 25;
    $y = 19;
    $z = "40";
    $q = 40;
    $w = 25;

    var_dump($z == $q);
    echo "<br>";
    var_dump($z === $q);
    echo "<br>";
    var_dump($w != $x);
    echo "<br>";
    var_dump($z !== $q);
    echo "<br>";
    var_dump($x > $y);
    echo "<br>";
    var_dump($w >= $x);
    echo "<br>";
    var_dump($w < $q);
    echo "<br>";
    var_dump($w <= $x)
    ?>
</body>
</html>