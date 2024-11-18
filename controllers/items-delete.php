<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';

$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$id;
if(isGet())
{
    $id = $_GET['id'];
}
if(isPost())
{
    $id = $_POST['id'];
    $errors = [];


}
$sushiCategorie = getNameAndIdCategories($pdo);
$sushiselectionné = getSushiById($pdo,$id);

require 'views/items-delete.php';