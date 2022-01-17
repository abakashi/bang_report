<?php 

require_once("../config.php");

class DataBase extends PDO {
    private $conn = new PDO($DATABASE[host], $DATABASE[user], $DATABASE[pwd]);

    function iniciaTran(){
        $conn->beginTransaction();
    }

    function finalizaTran(){
        $conn->commit();
    }
}

?>