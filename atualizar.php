<?php
    require_once('src/utils/ConnectionFactory.php');

    $con = ConnectionFactory::getConnection();

    $user = $_REQUEST['user'];

    $stmt = $con->prepare("UPDATE users_login SET nome=:nome, cpf=:cpf, rg=:rg, endereco=:endereco, email=:email, senha=:senha, data_nascimento=:data_nascimento WHERE id=:id");

    $stmt->bindParam(':id', $user['id']);
    $stmt->bindParam(':nome', $user['nome_completo']);
    $stmt->bindParam(':cpf', $user['cpf']);
    $stmt->bindParam(':rg', $user['rg']);
    $stmt->bindParam(':endereco', $user['endereco']);
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':senha', $user['senha']);
    $stmt->bindParam(':data_nascimento', $user['data_nascimento']);
    
    $stmt->execute();

    header("location: index.php");

?>