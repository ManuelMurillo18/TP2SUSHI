<?php
require 'src/database.php';
require 'models/sushi_fastfood.php';
require 'src/html-helpers.php';

$pdo = databaseGetPDO(CONFIGURATIONS['database'], DB_PARAMS);

if(isPost())
{
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
        $errors['description'] = "Veuillez écrire une description.";
    }
    $prix = $_POST['price'] ?? '';
    if (empty($prix)) {
        $errors['price'] = "Veuillez écrire un prix.";
    }
   
    if(empty($errors))
    {
       
        if(isset($_FILES['image']['name']))
        {
            moveUploadedPicture();
            addSushi($pdo,$name,$description,$prix,$_FILES['image']['name'],$_POST['category']);
            redirect('/list-items');
        }
        else
        {
            addSushi($pdo,$name,$description,$prix,'',$_POST['category']);
            redirect('/list-items');
        }
       
    }


}
$sushiCategorie = getNameAndIdCategories($pdo);

require 'views/items-add.php';