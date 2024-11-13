<?php


$message = $_POST['message'] ?? '';
$pdo = databaseGetPDO(CONFIGURATIONS['database'],DB_PARAMS);
$sushis = sushiGetNameCategories($pdo);
$erreur[] = 'Une Erreur';

if(isPost())
{
    if(empty($message))
    {
     $quitter = $_POST['ExitButton'];

        if($quitter == 'Oui')
        {   
            routeToController('/');
        }
    }
    
}


   

require 'views/list-items.php';
