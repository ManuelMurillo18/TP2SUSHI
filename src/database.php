<?php

function databaseGetPDO(array $dbConfig, array $dbParams)
{

  try {
      return new PDO("mysql:host=".$dbConfig["hostname"].";dbname=".$dbConfig["database"], $dbConfig["username"], $dbConfig["password"], $dbParams);
    } catch(PDOException $e) {

      // Expose login data not good
      // echo "Connection failed: " . $e->getMessage();

      throw new PDOException($e->getMessage(), $e->getCode());

    }

}