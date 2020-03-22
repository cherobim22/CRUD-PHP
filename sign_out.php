<?php 
    session_start();

    unset($_SESSION['logado']);
    unset($_SESSION['user']);

    $_SESSION['flash']['message'] = 'Você se desconectou com sucesso.';

    header("Location: sign_in.php");
?>