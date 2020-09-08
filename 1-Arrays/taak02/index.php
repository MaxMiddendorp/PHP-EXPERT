<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $medewerkers = [
            [
              'voornaam' => 'Willem',
              'achternaam' => 'van Oranje',
              'functie'  => 'koning'
            ],
            [
              'voornaam' => 'Donald',
              'achternaam' => 'Trump',
              'functie'  => 'president'
            ],
            [
              'voornaam' => 'Homer',
              'achternaam' => 'Simpson',
              'functie'  => 'fabrieksarbeider'
            ],
            [
              'voornaam' => 'Johan',
              'achternaam' => 'Cruyff',
              'functie'  => 'voetbalicoon'
            ],
            [
              'voornaam' => 'Badr',
              'achternaam' => 'Hari',
              'functie'  => 'Kickboxer'
            ]
          ];
          
        //   echo $medewerkers[0]['voornaam'] . " ";
        //   echo $medewerkers[0]['achternaam'] . " ";
        //   echo $medewerkers[0]['functie']; echo"<br>";

        for ($x = 0; $x <= 4; $x++) {
            echo $medewerkers[$x]['voornaam'] ." ".$medewerkers[$x]['achternaam'] ." is de ".$medewerkers[$x]['functie'] ."<br>";
        } 
    ?>
</body>
</html>