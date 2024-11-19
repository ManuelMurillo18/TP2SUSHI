<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';

$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);
$id;
$confirm = "Êtes-vous certain de vouloir supprimer cet item ?";
if(isGet())
{
    $id = $_GET['id'];
}
if(isPost())
{
    $id = $_POST['id'];

    deleteById($pdo,$id);
    
    redirect('/list-items');


}
$sushiCategorie = getNameAndIdCategories($pdo);
$sushiselectionné = getSushiById($pdo,$id);

foreach($sushiCategorie as $sushiCategory) {
    $i = 0;
    $i++;
    if($sushiCategory['id'] == $sushiselectionné['0']['idCategory'])
       $selected = $sushiCategory['name'];
}


require 'views/items-delete.php';