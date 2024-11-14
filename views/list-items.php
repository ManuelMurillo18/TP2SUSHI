<?php
require 'partials/head.php';
require 'partials/header.php';
require 'src/session.php';
session_start();
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-account" href="#" id="navbarDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['user']['email']; ?>

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout-form-modal"><span
                                    class="container mr-1"><i
                                        class="fa-solid fa-right-from-bracket fa-lg"></i></span>Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="row admin">
    <h1><strong>Liste des items </strong><a href="#" class="btn btn-success btn-lg"><span class="bi-plus"></span>
            Ajouter</a></h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sushis as $sushi) {


                ?>
                <tr>
                    <td><?= $sushi['name'] ?></td>
                    <td><?= $sushi['description'] ?></td>
                    <td><?= $sushi['price'] ?></td>
                    <td><?= $sushi['nameCategory'] ?></td>
                    <td width=340>
                        <form style="display: inline;">
                            <input type="hidden" name="id" value="4">
                            <button type="submit" class="btn btn-secondary"><span class="bi-eye"></span> Voir</button>
                        </form>
                        <form style="display: inline;">
                            <input type="hidden" name="id" value="4">
                            <button type="submit" class="btn btn-primary"><span class="bi-pencil"></span> Modifier</button>
                        </form>
                        <form style="display: inline;">
                            <input type="hidden" name="id" value="4">
                            <button type="submit" class="btn btn-danger"><span class="bi-x"></span> Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>

<div class="modal fade" id="logout-form-modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalLabel">Déconnexion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a>Quitter le menu administration?</a>
                <form action="/" method="GET">
                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" value="Non" data-bs-dismiss="modal">
                        <input type="submit" class="btn btn-primary" value="Oui">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<?php require 'partials/footer.php' ?>