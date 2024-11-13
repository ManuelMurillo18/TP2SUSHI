<?php

function sushiGetNameCategories(PDO $pdo)
{
    $sql = 'select i.id, i.name, i.description, i.price,i.idCategory, c.name as nameCategory from items i inner join
    categories c on i.idCategory = c.id;';
    try
    {
        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(PDOException $e){
        throw new PDOException($e->getMessage(),$e->getCode());
    }
}

function getAllSushi(PDO $pdo) 
{
    $sql = 'select id,name,description,price,image,idCategory from items;';
    try
    {
        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm -> fetchAll();

    }catch(PDOException $e)
    {
        throw new PDOException($e->getMessage(),$e->getCode());
    }
}
























                        












function userGetByEmail(PDO $pdo, string $email) : array|false
{
    try{
        $stm = $pdo->prepare('SELECT id,firstname,lastname,email,password FROM users WHERE email=:email');

        $stm->bindValue(":email", $email, PDO::PARAM_STR);
        
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC);
        
    } catch (PDOException $e) {

        throw new PDOException($e->getMessage(), $e->getCode());
        
    }   

}