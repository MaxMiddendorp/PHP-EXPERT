<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Auto{
        public $merk;
        public $kleur;
        public $type;
        public $uitvoering;
        public $brandstof;
    }
    
    $auto = new Auto();
    $auto->merk = 'Tesla';
    $auto->kleur = 'Rood';
    $auto->type = 'model 3';
    $auto->uitvoering = 'cabrio';
    $auto->brandstof = 'elektrisch';
    echo $auto->merk;
    echo $auto->kleur;
    echo $auto->type;
    echo $auto->uitvoering;
    echo $auto->brandstof;
    ?>
</body>
</html>