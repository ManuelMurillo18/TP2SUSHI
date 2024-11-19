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
   


}
$sushiCategorie = getNameAndIdCategories($pdo);
$sushiselectionné = getSushiById($pdo,$id);

foreach($sushiCategorie as $sushiCategory) {
    $i = 0;
    $i++;
    if($sushiCategory['id'] == $sushiselectionné['0']['idCategory'])
       $selected = $sushiCategory['name'];
}

require 'views/items-see.php';