<?php
    
    require_once('src/utils/ConnectionFactory.php');
        
        $user = $_REQUEST['user'];
        $con = ConnectionFactory::getConnection();
        $hs_password = password_hash ($user['senha'], PASSWORD_DEFAULT );

        


    $stmt = $con->prepare("UPDATE users SET nome = :nome, cpf = :cpf, rg = :rg, endereco = :endereco, 
    email = :email, senha = :senha, data_nascimento = :data_nascimento WHERE id= :id");
    
    $stmt->bindParam(':nome', $user['nome_completo']);
    $stmt->bindParam(':cpf', $user['cpf']);
    $stmt->bindParam(':rg', $user['rg']);
    $stmt->bindParam(':endereco', $user['endereco']);
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':senha', $hs_password);
    $stmt->bindParam(':data_nascimento', $user['data_nascimento']);
    $stmt->bindParam(':id', $user['id']);

    $stmt->execute();

    


    header("location: index.php");

?>