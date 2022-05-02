<?php
$host = "localhost";
$userDB = "velosphp";
$passDB = "velosphp";
$datase = "velosphp";

//my Sqli
$connectDB = mysqli_connect($host, $userDB, $passDB, $datase);

//PDO
try {
    $objetPdo = new PDO('mysql:host=' . $host . ";dbname=" . $datase, $userDB, $passDB);
    $objetPdo->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATT_ERRMODE');
} catch (PDOException $e) {
    echo $e;
}
