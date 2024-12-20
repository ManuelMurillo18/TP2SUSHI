<?php
function getSushiById(PDO $pdo, $id)
{
    $sql = 'select id, name, description, price, image, idCategory from items where id=:id;';
    try{
        $stm = $pdo->prepare($sql);
        $stm->bindValue(":id",$id,PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), $e->getCode());
    }
}
function sushiGetNameCategories(PDO $pdo)
{
    $sql = 'select i.id, i.name, i.description, i.price,i.idCategory, c.name as nameCategory from items i inner join
    categories c on i.idCategory = c.id;';
    try {
        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), $e->getCode());
    }
}

function getAllSushi(PDO $pdo)
{
    $sql = 'select id,name,description,price,image,idCategory from items;';
    try {
        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();

    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), $e->getCode());
    }
}


function userGetByEmail(PDO $pdo, string $email): array|false
{
    try {
        $stm = $pdo->prepare('SELECT id,firstname,lastname,email,password FROM users WHERE email=:email;');

        $stm->bindValue(":email", $email, PDO::PARAM_STR);

        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        throw new PDOException($e->getMessage(), $e->getCode());

    }

}

function getNameAndIdCategories(PDO $pdo)
{
    $sql = 'Select id,name from categories;';

    try
    {

        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();

    } 
    catch (PDOException $e) {

        throw new PDOException($e->getMessage(), $e->getCode());

    }
}

function deleteById(PDO $pdo, $id)
{
    $sql = 'Delete from items where id=:id;';

    try{

        $stm = $pdo->prepare($sql);
        $stm -> bindValue(":id",$id,PDO::PARAM_INT);
        $stm -> execute();

    }catch (PDOException $e) {

        throw new PDOException($e->getMessage(), $e->getCode());

    }

}

function modifyById(PDO $pdo,$id,$name,$description,$price,$idCategory)
{
    $sql = 'update items set name =:name, description=:description, price=:price,idCategory=:idCategory where id=:id;';
    try{
        $stm = $pdo->prepare($sql);
        $stm -> bindValue(":id",$id,PDO::PARAM_INT);
        $stm -> bindValue(":name",$name,PDO::PARAM_STR);
        $stm -> bindValue(":description",$description,PDO::PARAM_STR);
        $stm -> bindValue(":price",$price,PDO::PARAM_STR);
        $stm -> bindValue(":idCategory",$idCategory,PDO::PARAM_INT);
        $stm -> execute();

    }catch (PDOException $e) {

        throw new PDOException($e->getMessage(), $e->getCode());

    }
}

function addSushi(PDO $pdo,$name,$description,$price,$image,$idCategory)
{
    $sql = "Insert into Items(name,description,price,image,idCategory) values(:name,:description,:price,:image,:idcategory)";
    try{

        $stm = $pdo -> prepare($sql);
        $stm -> bindValue(":name",$name,PDO::PARAM_STR);
        $stm -> bindValue(":description",$description,PDO::PARAM_STR);
        $stm -> bindValue(":price",$price,PDO::PARAM_STR);
        $stm -> bindValue(":image",$image,PDO::PARAM_STR);
        $stm -> bindValue(":idcategory",$idCategory,PDO::PARAM_INT);

        $stm->execute();
    }catch (PDOException $e) {

        throw new PDOException($e->getMessage(), $e->getCode());

    }
}
