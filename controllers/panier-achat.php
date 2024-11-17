<?php

require 'src/session.php';
require 'src/database.php';
require 'models/sushi_fastfood.php';

sessionStart();
$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$sushi = getAllSushi($pdo);



require 'views/panier-achat.php';