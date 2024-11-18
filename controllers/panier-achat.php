<?php

require 'src/session.php';
require 'src/database.php';
require 'models/sushi_fastfood.php';

sessionStart();
$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$sushi = getAllSushi($pdo);


if (isset($_POST['id']) && isset($_POST['quantite'])){
    $idItem = $_POST['id'];
    $quantite = $_POST['quantite'];

    if (isset($_SESSION['cart'][$idItem])) {
        $_SESSION['cart'][$idItem]['quantite'] += $quantite;
    } else {
        $_SESSION['cart'][$idItem] = [
            'id' => $idItem,
            'quantite' => $quantite
        ];
    }
}

if (isPost() && isset($_POST['idItem']) && isset($_POST['MAJ'])) {
    $idItem = $_POST['idItem'];
    $quantite = $_POST['quantite'];

    if (isset($_SESSION['cart'][$idItem])) {
        $_SESSION['cart'][$idItem]['quantite'] = $quantite;
    }
}


if (isPost() && isset($_POST['idItem'], $_POST['Supprimer'])){
    $idItem = $_POST['idItem'];

    if (isset($_SESSION['cart'][$idItem])) {
        unset($_SESSION['cart'][$idItem]);
    }
}

$totalQuantite = 0;

foreach ($_SESSION['cart'] as $id => $info) {
    $totalQuantite += $info['quantite'];
}

$totalPrix = 0;

foreach ($_SESSION['cart'] as $id => $info) {
    $item = null;
    foreach ($sushi as $sush) {
        if ($sush['id'] == $id) {
            $item = $sush;
            break;
        }
    }
    if ($item) {
        $totalPrix += $item['price'] * $info['quantite'];
    }
}


require 'views/panier-achat.php';