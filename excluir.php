<?php

    require_once('src/utils/ConnectionFactory.php');

    $id = $_GET['id'];

    $con = ConnectionFactory::getConnection();

    $stmt = $con->prepare("DELETE FROM users WHERE id=:id");
    
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    header("location: index.php");

?>