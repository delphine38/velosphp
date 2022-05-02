<?php
//pour lier à la bdd
include "db.php";

//prépare la requète d'insertion
$pdoState = $objetPdo->prepare(' SELECT * FROM velo ');

//execution de la requète
$executeIsOk = $pdoState->execute();

//recuperation des résultats
$velos = $pdoState->fetchAll();
var_dump($velos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vélos Php</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <main>
        <h1 class="text-center my-5">Site de Vélos Vous souhaite la Bienvenue !</h1>
    </main>

</body>

</html>