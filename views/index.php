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
            <ul class="container nav nav-pills">
                <li class='nav-item'><a class='nav-link active' data-bs-toggle='pill' href='#tab1'>Urumakis</a></li>
                <li class='nav-item'><a class='nav-link ' data-bs-toggle='pill' href='#tab2'>Makis</a></li>
                <li class='nav-item'><a class='nav-link ' data-bs-toggle='pill' href='#tab3'>Nigiris</a></li>
                <li class='nav-item'><a class='nav-link ' data-bs-toggle='pill' href='#tab4'>Sashimis</a></li>
                <li class='nav-item'><a class='nav-link ' data-bs-toggle='pill' href='#tab5'>Poké bols</a></li>
            </ul>
        </div>
    </div>
    <ul class="container nav navbar-nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link nav-menu" data-bs-toggle="modal" data-bs-target="#login-form-modal" title="Connexion">
                <i class="fa-solid fa-right-to-bracket fa-lg"></i>
            </a>
        </li>
        <div class="cart-wrapper">
            <li class="nav-item">
                <a class="nav-link nav-menu" href="/panier-achat" title="Panier d'achat">
                    <i class="fa-solid fa-cart-shopping fa-lg"></i> <!-- Icone du panier -->
                    <div class="cart-counter" id="cart-counter">0</div> <!-- Compteur du panier -->
                </a>
            </li>
        </div>
    </ul>
</nav>

<main>
    <div class="tab-content">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $active = ($i == 1) ? 'active' : '';
            ?>
            <div class="tab-pane <?= $active ?>" id="tab<?= $i ?>" role="tabpanel">
                <div class="row">
                    <?php displayItemsByCategory($i, $sushi); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<div class="modal fade" id="login-form-modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Connexion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="courriel" class="form-label">Adresse courriel</label>
                        <input type="email" class="form-control" id="courriel" name="courriel"
                            value="<?= $_COOKIE['userEmail'] ?? '' ?>">
                        <span class="help-inline"></span>
                    </div>
                    <div class="mb-3">
                        <label for="motDePasse" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="motDePasse" name="motDePasse" value="">
                        <span class="help-inline"></span>
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" id="souvenir" name="souvenir" value="">
                        <label for="souvenir"> Se souvenir de moi</label>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Se connecter">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require 'partials/footer.php'; ?>