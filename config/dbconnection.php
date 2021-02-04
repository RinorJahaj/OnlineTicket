<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=onlinetickets", "root", "");
} catch(PDOException $pdo) {
    die("Lidhja deshtoi");
}

?>