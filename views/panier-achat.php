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
            <ul class="nav navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link nav-menu" href="/" title="Retour au menu"><i
                            class="fa-solid fa-left-long fa-lg mr-1"></i>Retour au menu</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid row align-items-start">
    <div class="col-8"> <!-- Panier items -->
        <div class="row admin">
            <div class="row align-items-end">
                <div class="col-11">
                    <h1><strong>Panier d'achats</strong></h1>
                </div>
                <div class="col-1">
                    <h6>Prix unitaire</h6>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-11">
                    <div class="row">
                        <div class="col-4"><img src="/public/uploads/uramaki_thon.jpg" alt="Image de l'article"
                                class="cart-detail-image"></div>
                        <div class="col-7 mt-4">
                            <h4>Urumaki au thon</h4>
                            <p>Thon et crème sure entourés d'une feuille d'algue et de riz vinaigré ainsi que de graines
                                de sésame grillées.</p>
                            <div class="d-inline-flex align-items-center">
                                <form class="item-quantity-selected" method="POST">
                                    <input type="hidden" name="idItem" value="1">
                                    <input type="hidden" value="8.9">
                                    <div class="d-inline-flex align-items-center">
                                        <label class="mr-1" for="quantities">Quantité:</label>
                                        <select class="form-select quantities">
                                            <?php for ($i = 1; $i <= 10; $i++)
                                                echo "<option value='$i'" . ($i === 1 ? " selected" : "") . ">$i</option>"; ?>
                                        </select>
                                        <input class="btn btn-outline-secondary" type="submit" name="MAJ" value="MAJ">
                                </form>
                                <form class="item-quantity-selected" method="POST">
                                    <input type="hidden" name="idItem" value="<?= $id ?>">
                                    <input type="hidden" value="8.9">
                                    <input class="btn btn-outline-secondary" type="submit" name="Supprimer" value="Supprimer">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 mt-4"><span>8.90 $</span></div>
        </div>
        <hr>
    </div>
</div>
<div class="col-4"> <!-- Résumé commande -->
    <div class="row admin">
        <h3>Résumé de la commande</h3>
        <hr>
        <input type="hidden" id="sub-total-amount" value="8.9">
        <h4>Sous-total (<span id="sub-total-items-count">1</span> items): <strong><span
                    id="sub-total-amount-formatted">8.90 $</span></strong></h4>
        <a href="/checkout" class="btn cart-proceed-to-checkout">Passer à la caisse</a>
    </div>
</div>
</div>

<?php require 'partials/footer.php'; ?>