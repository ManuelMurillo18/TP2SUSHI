<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';
require 'src/session.php';

$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$sushi = getAllSushi($pdo);

if (isPost()) {
    $userEmail = $_POST['courriel'];
    $userPassword = $_POST['motDePasse'];
    $user = userGetByEmail($pdo, $userEmail);
    if ($user) {

        if (password_verify($userPassword, $user['password'])) {

            sessionStart();

            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email']
            ];

            session_regenerate_id();



            if (isset($_POST['souvenir'])) {
                setcookie('userEmail', $userEmail, time() + (90 * 24 * 60 * 60));
            }

            redirect('/list-items');
        }

    }

} else {
    require 'views/index.php';
}