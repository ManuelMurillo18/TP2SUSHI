<?php
require 'src/database.php';
require 'src/configuration.php';
require 'views/index.php';

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $filtre = $_GET['id'];
    $task;


}

$pdo = databaseGetPDO(CONFIGURATIONS['database'],DB_PARAMS);
$sushi = getAllSushi($pdo);


require 'views/index.php';