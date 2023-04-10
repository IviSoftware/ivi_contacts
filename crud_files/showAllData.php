<?php
    $conn = ConnectionDB::getInstance()->getConnection();
    $stmt = $conn->prepare("SELECT * FROM  contacts");
    $stmt->execute();
    $contacts=$stmt->fetchAll();
?>