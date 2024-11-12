<?php


$pdo = databaseGetPDO(CONFIGURATIONS['database'],DB_PARAMS);
$sushis = sushiGetNameCategories($pdo);


require 'views/list-items.php';
