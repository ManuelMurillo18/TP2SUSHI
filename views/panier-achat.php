<?php
require 'partials/head.php';
require 'partials/header.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <button id="nav-toggle-button" class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarsMain" aria-controls="navbarsExample04" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsMain">
            <ul class="container nav navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link nav-menu" href="/" title="Retour au menu"><span class="container mr-1"><i
                                class="fa-solid fa-left-long fa-lg mr-1"></i></span>Retour au menu</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid row align-items-start">
    <div class="col-8"> <!-- Panier items -->
        <div class="container row admin">
            <div class="row align-items-end">
                <div class="col-11">
                    <h1><strong>Panier d'achats</strong></h1>
                </div>
                <div class="col-1">
                    <h6>Prix unitaire</h6>
                </div>
            </div>
            <hr>
            <div class="container">
                <?php foreach ($_SESSION['cart'] as $id => $info): ?>
                    <?php $value = null;
                    foreach ($sushi as $sush) {
                        if ($sush['id'] == $id) {
                            $value = $sush;
                        }
                    } ?>
                    <div class="row">
                        <div class="col-11">
                            <div class="container row">
                                <div class="col-4 cart-detail-image">
                                    <img src="/public/uploads/<?= $value['image'] ?>" alt="Image de l'article"
                                        class="cart-detail-image">
                                </div>
                                <div class="col-7 mt-4">
                                    <h4><?= $value['name'] ?></h4>
                                    <p><?= $value['description'] ?></p>
                                    <div class="d-inline-flex align-items-center">
                                        <form class="item-quantity-selected" method="POST">
                                            <input type="hidden" name="idItem" value="<?= $id ?>">
                                            <div class="d-inline-flex align-items-center">
                                                <label class="mr-1" for="quantities">Quantité:</label>
                                                <select class="form-select quantities" name="quantite">
                                                    <?php for ($i = 1; $i <= 10; $i++): ?>
                                                        <option value="<?= $i ?>" <?= $i == $info['quantite'] ? 'selected' : '' ?>>
                                                            <?= $i ?>
                                                        </option>
                                                    <?php endfor; ?>
                                                </select>
                                                <input class="btn btn-outline-secondary" type="submit" name="MAJ"
                                                    value="MAJ">
                                            </div>
                                        </form>
                                        <form class="item-quantity-selected" method="POST">
                                            <input type="hidden" name="idItem" value="<?= $id ?>">
                                            <div class="d-inline-flex align-items-center">
                                                <input class="btn btn-outline-secondary" type="submit" name="Supprimer"
                                                    value="Supprimer">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 mt-4"><span><?= number_format($value['price'], 2) ?></span>$</div>
                    </div>
                    <hr>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div class="col-4"> <!-- Résumé commande -->
        <div class="row admin">
            <h3>Résumé de la commande</h3>
            <hr>
            <input type="hidden" id="sub-total-amount" value="8.9">
            <h4>Sous-total (<span id="sub-total-items-count"><?= $totalQuantite ?></span> items): <strong><span
                        id="sub-total-amount-formatted"><?= number_format($totalPrix, 2) ?>$</span></strong></h4>
            <a href="/checkout" class="btn cart-proceed-to-checkout">Passer à la caisse</a>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>