<?php
if (isset($_GET['id']) & !empty($_GET['id'])) {
    include_once("db.php");
    include_once 'header.php';
    $id = strip_tags($_GET['id']);
    $sql = 'select * from produit where id=:id';
    $query = $conn->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $produit = $query->fetch();
} else {
    echo 'id inexistant !';
}

?>

<link rel="stylesheet" href="detail.css">


<div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 100vh;">
    <h3 >Carte Detail</h3>
    <div class="card ">
        <div class="card__shine"></div>
        <div class="card__glow"></div>
        <div class="card__content">
            <div class="card__badge">NOUVEAU</div>
            <div style="--bg-color: #a78bfa" class="card__image"></div>
            <div class="card__text">
                <p class="card__title">Produit N <sup>o</sup><?= $produit['id']; ?></p>
                <p class="card__title1"><?= $produit['nomproduit']; ?></p>
                <p class="card__description"><?= $produit['descriptions']; ?></p>
            </div>
            <div class="card__footer">
                <div class="card__price"><?= $produit['prix']; ?></div>
                <div class="card__button">
                    <svg height="16" width="16" viewBox="0 0 24 24">
                        <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>