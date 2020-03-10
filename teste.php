<?php
session_start();
$_SESSION['nome'] = 'Lucas';
echo "Seu nome é " .$_SESSION['nome'];
?>