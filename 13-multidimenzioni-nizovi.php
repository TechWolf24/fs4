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
    <h1>Multidimenzioni nizovi</h1>
    <hr>
    <?php 
    // $mikrofoni = ['shure', 'behringer', 'akg', 'neuman'];
    // $mikrofoni = array('shure', 'behringer', 'akg', 'neuman');
    // $mikrofoni[0] = 'shure';
    // $mikrofoni[1] = 'behringer';
    // $mikrofoni[2] = 'akg';
    // $mikrofoni[3] = 'neuman';
    // print_r($mikrofoni);
    $wordcamp = [
        'Slobodan Miric' => [
            'Novi Sad',
            'team lead',
            '062 218 454'
        ],
        'Goran Miric' => [
            'Apatin',
            'sponzori',
            '062 123 456'
        ],
        'Branko Repac' => [
            'Apatin',
            'dizajn',
            '062 123 6546'
        ],
        'Igor Elez' => [
            'Beograd',
            'radionice',
            '062 148 972'
        ],
        'Goran Petrovic' => [
            'Apatin',
            'volonteri',
            '062 148 972'
        ],
        'Slavisa Dekan' => [
            'Apatin',
            'domacin',
            '062 148 972'
        ]
    ];
    echo '<pre>';   
    print_r($wordcamp);
    echo '</pre>';  

    echo'<hr>';

    $ispitni_rezultati = [
        1 => [
            'Arnold Sudicki',
            'ocena' => 10,
        ],
        2 => [
            'Milos Prodanovic',
            'ocena' => 9,
        ], 
        3 => [
            'Mirko Djukanovic',
            'ocena' => 8,
        ]    
    ];
    echo '<pre>';   
    print_r($ispitni_rezultati);
    echo '</pre>'; 
    ?>
</body>
</html>