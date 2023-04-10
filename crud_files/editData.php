<?php
require_once("../database/ConnectionDB.php");

 if(isset($_POST["edit_contact"])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $number = $_POST["number_phone"];
    $email = $_POST["email"];
    $id = $_POST["id"];

    $conn = ConnectionDB::getInstance()->getConnection();
    $stmt = $conn->prepare("UPDATE contacts SET first_name = :first_name,last_name = :last_name,number = :number,email = :email WHERE id = :id");
    $stmt->execute([
        ":first_name"=>$first_name,
        ":last_name"=>$last_name,
        ":number"=>$number,
        ":email"=>$email,
        ":id"=>$id
    ]);
    header("location: ../index.php"); 
 }


