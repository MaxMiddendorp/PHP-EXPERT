# PHP-EXPERT

## Entiteit verwijderen

## Uitleg

Je kunt data natuurlijk ook updaten. Hiervoor gebruik je wederom weer een HTML-Form. Maar nu wel met uiteraard een andere SQL Statement.

Je moet eerst voor jezelf bepalen welke rij je wilt aanpassen. Deze data moet je eerst tonen in het formulier. Dit kun je bewerkstelligen met een SQL SELECT WHERE statement. Als je die uitvoert kun je de data in het formulier tonen.

## Leerdoelen

> 1. [ ] Ik pas een enkele data rij uit de users tabel aan

## Opdracht

> 1. Maak gebruik van de database `toolsforever` met PHPMyAdmin
> 2. Haal de data van één gebruiker op en toon deze in de desbetreffende formulier velden
> 3. Pas data naar keuze aan en sla deze op met behulp van onderstaande query.

```php

//UPDATE EEN WAARDE IN EEN DATABASE TABEL
$sql = "UPDATE users SET firstname = :ph_firstname WHERE id = :id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":firstname", $form_firstname );
$stmt->bindParam(":id", $form_id );
$stmt->execute();

```

## Bronnen

> [PHP Delusions - PDO](https://phpdelusions.net/pdo)  
