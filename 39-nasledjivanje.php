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
    <h1>Nasledjivanje</h1>
    <hr>
    <h2>Bez konstuktora</h2>
    <?php 
    // class Ucenik {
    //     public $ime, $prezime;

    //     public function celoIme() {
    //         return $this->ime . " " . $this->prezime;
    //     }
    // }
    // class Student extends Ucenik  {
    //     public $brojIndeksa;
    // }
    // $student1 = new Student();
    // $student1->ime = "Marko";
    // $student1->prezime = "Milosevic";
    // $student1->brojIndeksa = "1/2023";

    // $student2 = new Student();
    // $student2->ime = "Milos";
    // $student2->prezime = "Maric";
    // $student2->brojIndeksa = "2/2023";

    // echo "Prvi student se zove " . $student1->celoIme() . " i njegov broj indeksa je " . $student1->brojIndeksa . "<hr>";
    // echo "Drugi student se zove " . $student2->celoIme() . " i njegov broj indeksa je " . $student2->brojIndeksa . "<hr>";
    ?>
    <h2>Sa konstruktorima</h2>
    <?php 
    class Ucenik {
        public $ime, $prezime;
        public function __construct($ime, $prezime) {
            $this->ime = $ime;
            $this->prezime = $prezime;
        }
        public function celoIme() {
            return $this->ime . " " . $this->prezime;
        }
    }
    class Student extends Ucenik {
        public $brojIndeksa;
        public function __construct($brojIndeksa, $ime, $prezime) {
            parent::__construct($ime, $prezime);
            $this->brojIndeksa = $brojIndeksa;
        }
    }
    $student1 = new Student('1/2023', 'Nina', 'Zollner');
    $student2 = new Student('2/2023', 'Olja', 'Jankovic');
    echo "Prva studentica se zove " . $student1->celoIme() . " i njen broj indeksa je " . $student1->brojIndeksa . "<br>";
    echo "Druga studentica se zove " . $student2->celoIme() . " i njen broj indeksa je " . $student2->brojIndeksa . "<br>";
    ?>
</body>
</html>