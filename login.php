<?php 
    session_start();

    require_once('src/utils/ConnectionFactory.php');

    $con = ConnectionFactory::getConnection();

    $email = $_REQUEST['user']['email'];
    $senha = $_REQUEST['user']['password'];

    $stmt = $con->prepare("SELECT * FROM users_login WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user) {
        if(password_verify($senha, $user->senha)) {
            $_SESSION['user'] = $email;
            $_SESSION['logado']['message'] = "Logado com sucesso";
            header("Location: index.php");
        } else {
            $_SESSION['flash']['error'] = "Dados Incorretos, tente novamente (senha)";
            header("Location: sign_in.php");
        }

    } else {
        $_SESSION['flash']['error'] = "Dados Incorretos, tente novamente (email)";
        header("Location: sign_in.php");
    }
?>