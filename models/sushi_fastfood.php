<?php

function sushiGetByCategorie(PDO $pdo, int $i)
{
    $sql = 'select i.id, i.name, i.description, i.prix, i.image, i.idCategorie from items i where i.idCategorie =:idCategorie; ';
    try
    {
        $stm = $pdo->prepare($sql);
        $stm->bindValue('idCategorie',$i, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
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