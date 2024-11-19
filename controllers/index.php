<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';
require 'src/session.php';

sessionStart();
$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$sushi = getAllSushi($pdo);

if (isPost() && isset($_POST['id'])) {
    $id = $_POST['id'];
    $_SESSION['cart'][$id]['quantite'] = ($_SESSION['cart'][$id]['quantite'] ?? 0) + 1;
    $_SESSION['message'] = 'Article ajouté avec succès!';
}

$totalPanier = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'quantite')) : 0;

if (isPost() && isset($_POST['courriel'], $_POST['motDePasse'])) {
    $user = userGetByEmail($pdo, $_POST['courriel']);
    if ($user && password_verify($_POST['motDePasse'], $user['password'])) {
        $_SESSION['user'] = ['id' => $user['id'], 'email' => $user['email']];
        session_regenerate_id();
        if (isset($_POST['souvenir'])) {
            setcookie('userEmail', $_POST['courriel'], time() + (90 * 24 * 60 * 60));
        }
        redirect('/list-items');
    }
} 

require 'views/index.php';
