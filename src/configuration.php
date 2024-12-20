<?php

const ROUTES = [
    '/' => 'index.php',
    '/items-add' => '/items-add.php',
    '/items-update' => '/items-update.php',
    '/items-see' => '/items-see.php',
    '/items-delete' => '/items-delete.php',
    '/list-items' => '/list-items.php',
    '/panier-achat' => '/panier-achat.php',
    '/checkout' => '/checkout.php'
];

const DB_PARAMS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,
];

define('CONFIGURATIONS', parse_ini_file("configuration.ini", true));