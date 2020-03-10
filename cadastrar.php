<?php
    
    require_once('src/utils/ConnectionFactory.php');    
    
        $user = $_REQUEST['user'];

        $con = ConnectionFactory::getConnection();

        $hs_password = password_hash($user['senha'], PASSWORD_DEFAULT);



    $stmt = $con->prepare("INSERT INTO users(nome, cpf, rg, endereco, email, senha, data_nascimento) 
                           VALUES (:nome, :cpf, :rg, :endereco, :email, :senha, :data_nascimento)");
    
    $stmt->bindParam(':nome', $user['nome_completo']);
    $stmt->bindParam(':cpf', $user['cpf']);
    $stmt->bindParam(':rg', $user['rg']);
    $stmt->bindParam(':endereco', $user['endereco']);
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':senha', $hs_password);
    $stmt->bindParam(':data_nascimento', $user['data_nascimento']);

    $stmt->execute();

    header("location: index.php");

?>