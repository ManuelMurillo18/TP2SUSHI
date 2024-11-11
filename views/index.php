<?php
require 'partials/head.php';
require 'partials/header.php';
require 'partials/nav.php';

?>
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
                    <input type="email" class="form-control" id="courriel" name="courriel" value="<?= $_COOKIE['userEmail'] ?? ''?>">
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