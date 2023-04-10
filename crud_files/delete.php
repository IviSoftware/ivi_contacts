<?php
require_once("../database/ConnectionDB.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $connected = ConnectionDB::getInstance()->getConnection();
    $stmt = $connected->prepare("DELETE FROM contacts WHERE id = :id");
    $stmt->execute([":id"=>$id]);

    $rowDeleted = $stmt->rowCount();
    
    if($rowDeleted > 0){
        header('Content-Type: application/json');
        $json = json_encode(["result"=>true]);
        echo $json;
    }else{
        header('Content-Type: application/json');
        $json = json_encode(["result"=>false]);
        echo $json;
    }
}

