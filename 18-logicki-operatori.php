<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Logicki operatori</h1>
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
    <h1>Logicki operatori</h1>
    <hr>
    <table>
        <thead>
            <th>Operator</th>
            <th>Opis</th>
            <th>Primer</th>
        </thead>
        <tr>
            <td>&&</td>
            <td>I</td>
            <td>$x == 5 && $y == 5</td>
        </tr>
        <tr>
            <td>and</td>
            <td>I - niskog prioriteta</td>
            <td>$x == 5 and $y == 5</td>
        </tr>
        <tr>
            <td>||</td>
            <td>ILI</td>
            <td>$x == 5 || $y == 5</td>
        </tr>
        <tr>
            <td>or</td>
            <td>ILI - niskog prioriteta</td>
            <td>$x == 5 or $y == 5</td>
        </tr>
        <tr>
            <td>!=</td>
            <td>Ne</td>
            <td>$x != "Izvrsavanje"</td>
        </tr>
        <tr>
            <td>xor</td>
            <td>iskljucivo ILI</td>
            <td>$x == 5 xor $y == 5</td>
        </tr>
    </table>
    <?php 
    #$website = file_get_contents($home) or die('Sadrzaj stranice home ne postoji');
    $korisnicko_ime = "Username";
    $jmbg = "0505977";
    $lk = "550055";
    if($korisnicko_ime == "Username5" && $jmbg == "0505977" || $lk == "550055") {
        echo "Pozdrav " . $korisnicko_ime . " uspesno si se ulogovao";
    } else {
        echo "Pokusajte ponovo nisu dobri podaci";
    }
    ?>
</body>
</html>
</body>
</html>