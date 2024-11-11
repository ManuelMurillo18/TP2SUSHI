<?php
require 'src/database.php';
require 'src/configuration.php';
require 'views/index.php';

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $filtre = $_GET['id'];
    $task;
    foreach($sushi as $element)
    {
        if($element['idCategorie'] == $filtre)
        {
            $task.array_merge($element);
        }
    }

}

$pdo = databaseGetPDO(CONFIGURATIONS['database'],DB_PARAMS);
$sushi = getAllSushi($pdo);


require 'views/index.php';