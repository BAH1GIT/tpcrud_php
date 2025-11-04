<?php
include_once 'db.php';
include_once 'header.php';
include_once 'nav.php';
include_once 'list.php';


if (
    isset($_POST['nomproduit']) && !empty($_POST['nomproduit']) &&
    isset($_POST['prix']) && !empty($_POST['prix']) &&
    isset($_POST['description']) && !empty($_POST['description']) 
){

    $nomproduit = strip_tags($_POST['nomproduit']);
    $prix = strip_tags($_POST['prix']);
    $descriptions = strip_tags($_POST['description']);

    $sql = 'insert into produit (nomproduit, prix, descriptions) values(:nomproduit, :prix, :descriptions)';
    $query = $conn->prepare($sql);
    $query->bindValue(':nomproduit', $nomproduit,PDO::PARAM_STR);
    $query->bindValue(':prix', $prix,PDO::PARAM_STR);
    $query->bindValue(':descriptions', $descriptions,PDO::PARAM_STR);
    $query->execute();

    header('Location: index.php');
    // exit;
}

?>

<div class="d-flex justify-content-center bg-dark-subtle form1" id="formInscription">

    <div class="col-6 m-5 shadow-lg p-3 mb-5 bg-body-secondary rounded">
        <form method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nomproduit">
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control" id="prix" name="prix">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>

















<?php 
include_once 'footer.php';