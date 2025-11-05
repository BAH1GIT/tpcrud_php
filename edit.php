<?php
if (isset($_GET['id']) & !empty($_GET['id'])) {
    include_once("Db.php");
    $id = strip_tags($_GET['id']);
    $sql = 'select * from produit where id=:id';
    $query = $conn->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $produit = $query->fetch();
    if (!$produit) {
        echo "<p class='text-danger'>Produit introuvable.</p>";
        exit;
    }
} else {
    echo 'id inexistant !';
}


?>



<link rel="stylesheet" href="edit.css">
<div class="container">
    <h1 class="mb-3 mt-3 text-center">Page Editer</h1>

    <div class="form_area ">
        <p class="title">Modifier un produit</p>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= $produit['id']; ?>">
            <div class="form_group">
                <label class="sub_title" for="name">Nom</label>
                <input placeholder="Entrer votre nom" name="nomproduit" class="form_style" type="text"
                    value="<?= $produit['nomproduit']; ?>">
            </div>
            <div class="form_group">
                <label class="sub_title" for="prenom">Prix</label>
                <input placeholder="Entrer votre prenom" name="prix" class="form_style" type="text"
                    value="<?= $produit['prix']; ?>">
            </div>

            <div class="form_group">
                <label class="sub_title" for="ville">Descriptions</label>
                <input placeholder="Entrer votre ville" name="descriptions" class="form_style" type="text"
                    value="<?= $produit['descriptions']; ?>">
            </div>
            <div>
                <p class="text-decoration-none d-flex justify-content-center">
                    <button type="submit" class="bg  mx-1 btn1 border-0">Submit</button>
                    <a href="index.php" class="bg2 mx-1 btn1 text-decoration-none ">Retour</a>
                </p>
            </div>

        </form>

    </div>
</div>