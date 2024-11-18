<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';

$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$sushis = sushiGetNameCategories($pdo);

if(isPost())
{
    if(isset($_POST['idmodifier']))
        redirect('/items-update?id='.urlencode($_POST['idmodifier']));
    if(isset($_POST['idvoir']))
        redirect('/items-voir?id='.urlencode($_POST['idvoir']));
    if(isset($_POST['idsupprimer']))
        redirect('/items-supprimer?id='.urlencode($_POST['idsupprimer']));
}

require 'views/list-items.php';