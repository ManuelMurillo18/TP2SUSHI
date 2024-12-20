<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';
require 'src/html-helpers.php';

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

    if (isset($_POST['name'])) {
        $name = trim($_POST['name']);
        if (strlen($name) === 0) {
            $errors['name'] = "Vous devez inscrire un nom";
        }
    } else {
        $errors['name'] = "Vous devez inscrire un nom";
    }

    $description = $_POST['description'] ?? '';
    if (empty($description)) {
        $errors['description'] = "Veuillez inscrire une description.";
    }
    $prix = $_POST['price'] ?? '';
    if (empty($prix)) {
        $errors['price'] = "Veuillez inscrire un prix.";
    }
   
    if(empty($errors))
    {
        modifyById($pdo,$id,$name,$description,$prix,$_POST['category']);
        redirect('/list-items');
    }


}
$sushiCategorie = getNameAndIdCategories($pdo);
$sushiselectionné = getSushiById($pdo,$id);

require 'views/items-update.php';