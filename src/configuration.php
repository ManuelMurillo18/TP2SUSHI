<?php

const ROUTES = [
    '/' => 'index.php',
    '/items-update' => '/items-update.php',
    '/list-items' => '/list-items.php',
    '/panier-achat' => '/panier-achat.php'
];

const DB_PARAMS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,
];

define('CONFIGURATIONS', parse_ini_file("configuration.ini", true));