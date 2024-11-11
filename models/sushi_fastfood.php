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

function getIdCategorie(PDO $pdo, string $nom) 
{
    $sql = 'select id from categories where name=:name;';
    try
    {
        $stm = $pdo->prepare($sql);
        $stm -> bindValue('name',$nom,PDO::PARAM_STR);
        $stm->execute();
        return $stm -> fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $e)
    {
        throw new PDOException($e->getMessage(),$e->getCode());
    }
}