<?php 

require_once("..". DIRECTORY_SEPARATOR . "config.php");

class DataBase extends PDO {
    private $conn = new PDO($DATABASE[host], $DATABASE[user], $DATABASE[pwd]);

    public function iniciaTran(){
        $conn->beginTransaction();
    }

    public function finalizaTran(){
        $conn->commit();
    }
}

?>