<?php
/*
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name
sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Snack 2</h2>
    <?php if (strlen($name) >= 3 && strstr($mail, '@') && strstr($mail, '.') && is_numeric($age)) : ?>
        <p>Accesso Riuscito</p>
    <?php else : ?>
        <p>Accesso Negato</p>
    <?php endif; ?>
</body>
</html>