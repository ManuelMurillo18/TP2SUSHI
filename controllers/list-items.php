<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';

$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$sushis = sushiGetNameCategories($pdo);

require 'views/list-items.php';