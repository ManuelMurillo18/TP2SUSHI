<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';
require 'src/session.php';

sessionStart();

$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$sushi = getAllSushi($pdo);

$_SESSION['cart'] = $_SESSION['cart'] ?? [];

if (isPost() && isset($_POST['id'], $_POST['name'], $_POST['price'],$_POST['image'], $_POST['description'])) {
    $_SESSION['cart'][] = $_POST;
    $_SESSION['message'] = 'Article ajouté avec succès!';
}

if (isPost() && isset($_POST['courriel'], $_POST['motDePasse'])) {
    $user = userGetByEmail($pdo, $_POST['courriel']);
    if ($user && password_verify($_POST['motDePasse'], $user['password'])) {
        sessionStart();
        $_SESSION['user'] = ['id' => $user['id'], 'email' => $user['email']];
        session_regenerate_id();

        if (isset($_POST['souvenir'])) {
            setcookie('userEmail', $_POST['courriel'], time() + (90 * 24 * 60 * 60));
        }

        redirect('/list-items');
    }
}

require 'views/index.php';