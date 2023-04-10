<?php

require_once("../database/ConnectionDB.php");

$connectionError = ConnectionDB::getInstance()->getError();

if($connectionError){
    echo "Error en la conexion";
}else{
    if(isset($_POST["add_contact"])){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $number_phone = $_POST["number_phone"];
        $email = $_POST["email"];
    
        $conn = ConnectionDB::getInstance()->getConnection();
        $stmt = $conn->prepare("INSERT INTO contacts (first_name,last_name,number,email) VALUES (:first_name,:last_name,:number_phone,:email)");
        $result = $stmt->execute([
            ":first_name"=>$first_name,
            ":last_name"=>$last_name,
            ":number_phone"=>$number_phone,
            ":email"=>$email
        ]);
        
        if($result)
            header("location: ../index.php");
        else
            echo "Hubo un error";
    }
}