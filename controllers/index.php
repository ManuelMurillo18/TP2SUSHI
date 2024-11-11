<?php
require 'src/database.php';
require 'src/configuration.php';
require 'models/sushi_fastfood.php';


$pdo = databaseGetPDO(CONFIGURATIONS['database'],DB_PARAMS);
$sushi = getAllSushi($pdo);


require 'views/index.php';