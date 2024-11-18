<?php

require 'src/session.php';
require 'src/database.php';
require 'models/sushi_fastfood.php';

sessionStart();
$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$sushi = getAllSushi($pdo);

$_SESSION['cart'] ?? $_SESSION['cart'] = [];

if (isPost()) {
    if (isset($_POST['id'], $_POST['quantite'])) {
        $idItem = $_POST['id'];
        $quantite = $_POST['quantite'];
        $_SESSION['cart'][$idItem]['quantite'] = isset($_SESSION['cart'][$idItem])
            ? $_SESSION['cart'][$idItem]['quantite'] + $quantite : $quantite;
    }

    if (isset($_POST['idItem'], $_POST['MAJ'])) {
        $_SESSION['cart'][$_POST['idItem']]['quantite'] = $_POST['quantite'];
    }

    if (isset($_POST['idItem'], $_POST['Supprimer'])) {
        unset($_SESSION['cart'][$_POST['idItem']]);
    }
}

$totalQuantite = 0;
$totalPrix = 0;

foreach ($_SESSION['cart'] as $id => $info) {
    $totalQuantite += $info['quantite'];

    foreach ($sushi as $sush) {
        if ($sush['id'] == $id) {
            $totalPrix += $sush['price'] * $info['quantite'];
            break;
        }
    }
}

require 'views/panier-achat.php';