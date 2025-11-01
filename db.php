<?php

try

{
    $conn = new PDO("mysql:host=localhost;dbname=tprud",   'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo'connexion reussi';
}catch(PDOException $e){
    echo 'erreur de connexion'. $e->getMessage();
    die();
}