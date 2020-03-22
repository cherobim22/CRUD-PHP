<?php
    require_once('src/utils/ConnectionFactory.php');

    $con = ConnectionFactory::getConnection();

    $id = $_GET['id'];

    $stmt = $con->prepare("DELETE FROM users_login WHERE id=:id");

    $stmt->bindParam(':id', $id);
    
    $stmt->execute();

    header("location: index.php");
?>