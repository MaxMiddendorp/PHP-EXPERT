# PHP-EXPERT-PDO-SELECT-Taak01

## Medewerkers

## Uitleg

In deze opdracht ga je data uit een database halen met behulp van het PDO-object. Dit is een soort tussenlaag tussen PHP (de code) en MySQL (de database). PDO staat voor PHP Data Object. PDO is vele malen beter dan zijn kleine broertjes `mysql` en `mysqli`.
De voordelen zitten in

> * Beveiliging (prepared statements)
> * Gebruiksvriendelijkheid (veel functies die helpen automatiseren)
> * Herbruikbaarheid (verschillende databasetypen te gebruiken)

Om het PDO-object te gebruiken moeten we eerst een connectie maken met de database.
In de onderstaande code staat een voorbeeld van het maken van zo'n connectie. Er wordt een connectie gemaakt met de `toolsforever` database

(Als je dat nog niet gedaan hebt kun je nu een database maken met behulp van PHPMyAdmin)

```php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
```

Als dat allemaal gelukt is (er is een database `toolsforever` aangemaakt. Bijvoorbeeld met PHPMyAdmin) dan kunnen we de database gebruiken in PHP
met behulp van het object `$database_connectie`

Je kunt op verschillende wijzes een query uitvoeren (gegevens ophalen). Met de methode `PDO::query()` kun je zonder variabelen eenvoudig een query uitvoeren op de database.

De query method geeft een `$statement` object terug waarmee je de gegevens kunt ophalen met de method PDO::fetchAll()

```php

$sql = "SELECT * FROM users";
$statement = $database_connectie->prepare($sql); //haal alle gebruikers op uit de database toolsforever
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $gebruiker){  
  echo $gebruiker['naam'] . "<br>";
}
```

## Leerdoelen

> 1. [ ] Ik toon de gegevens uit een databasetabel op het scherm met PDO

## Opdracht

> 1. Maak een database aan genaamd `toolsforever` met PHPMyAdmin
> 2. Importeer het sql-bestand in de database `toolsforever` (zie `files` folder)
> 3. Maak in index.php een database connectie zoals hierboven beschreven
> 4. Haal de gegevens op met een SELECT-statement uit de tabel `users` met de _methode_ `query()`
> 5. Loop door de gegevens en toon deze op het scherm

## Eindresultaat

![Eindresultaat](https://github.com/ROC-van-Amsterdam-College-Amstelland/PHP-EXPERT/blob/master/niveau3/taak01/images/resultaat.png)

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
