<?php
include_once("header.php");
include_once("db.php");

// var_dump($_POST);

if (
    isset($_POST['nomproduit']) && !empty($_POST['nomproduit']) &&
    isset($_POST['prix']) && !empty($_POST['prix']) &&
    isset($_POST['descriptions']) && !empty($_POST['descriptions'])
) {

    $nomproduit = strip_tags($_POST['nomproduit']);
    $prix = strip_tags($_POST['prix']);
    $descriptions = strip_tags($_POST['descriptions']);
    $id = strip_tags($_POST['id']);


    $sql = 'update produit set nomproduit=:nomproduit, prix=:prix, descriptions=:descriptions where id=:id';
    $query = $conn->prepare($sql);
    $query->bindValue(':nomproduit', $nomproduit, PDO::PARAM_STR);
    $query->bindValue(':prix', $prix, PDO::PARAM_STR);
    $query->bindValue(':descriptions', $descriptions, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    header('location:index.php');
    exit;
}

?>
