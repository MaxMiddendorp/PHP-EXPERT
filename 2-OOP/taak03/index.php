<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Product{
        public $merk;
        public $prijs;
        public $type;
        public $kleur;
        }
    
    $dweil = new Product();
    $dweil->merk = 'hema';
    $dweil->prijs = '10';
    $dweil->type = 'lang';
    $dweil->kleur = 'rood';
    echo $dweil->merk;
    echo $dweil->prijs;
    echo $dweil->type;
    echo $dweil->kleur;
    
    $stofzuiger = new Product();
    $stofzuiger->merk = 'aegon';
    $stofzuiger->prijs = '50';
    $stofzuiger->type = 'gfs505';
    $stofzuiger->kleur = 'grijs';
    echo $stofzuiger->merk;
    echo $stofzuiger->prijs;
    echo $stofzuiger->type;
    echo $stofzuiger->kleur;
    ?>
</body>
</html>