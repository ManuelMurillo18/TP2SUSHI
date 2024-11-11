<?php
require 'partials/head.php';
require 'partials/header.php';
require 'partials/nav.php';

?>


<main>
    <div class="tab-content">
        <div class='tab-pane active' id='tab1' role='tabpanel'>
            <div class="row">
                <?php
                $count = 0;
                foreach ($sushi as $sush) {


                    if ($sush['idCategory'] == 1) {

                        ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $sush['name'] ?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button"
                                        onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
        <div class='tab-pane ' id='tab2' role='tabpanel'>
            <div class="row">
                <?php
                $count = 0;
                foreach ($sushi as $sush) {



                    if ($sush['idCategory'] == 2) {
                        ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $sush['name'] ?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button"
                                        onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
        <div class='tab-pane ' id='tab3' role='tabpanel'>
            <div class="row">
                <?php
                $count = 0;
                foreach ($sushi as $sush) {



                    if ($sush['idCategory'] == 3) {
                        ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $sush['name'] ?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button"
                                        onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
        <div class='tab-pane ' id='tab4' role='tabpanel'>
            <div class="row">
                <?php
                $count = 0;
                foreach ($sushi as $sush) {



                    if ($sush['idCategory'] == 4) {

                        ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $sush['name'] ?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button"
                                        onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
        <div class='tab-pane ' id='tab5' role='tabpanel'>
            <div class="row">
                <?php
                $count = 0;
                foreach ($sushi as $sush) {

                    if ($sush['idCategory'] == 5) {
                        ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="img-thumbnail">
                                <img src="public/uploads/<?= $sush['image'] ?>" class="img-fluid" alt="...">
                                <div class="price"><?= $sush['price'] ?></div>
                                <div class="caption">
                                    <h4><?= $sush['name'] ?></h4>
                                    <p><?= $sush['description'] ?></p>
                                    <a href="#" class="btn btn-order add-to-cart" role="button"
                                        onclick="incrementCounter(1)"><span class="bi-cart-fill"></span> Ajouter au panier</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="login-form-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Connexion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Se connecter</button>
            </div>
        </div>
    </div>
</div>



<?php require 'partials/footer.php'; ?>