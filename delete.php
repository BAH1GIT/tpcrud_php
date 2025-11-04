<?php
var_dump($_GET);

if (isset($_GET['id']) && !empty($_GET['id'])) {
    include_once("db.php");
    $id = strip_tags($_GET['id']);
    $sql = 'delete from produit where id=:id';
    $query = $conn->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    header('location:index.php');
    exit();
}
