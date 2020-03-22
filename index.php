<?php
    session_start();

    if(! $_SESSION['logado']) {
        $_SESSION['flash']['error'] = "Você precisa estar logado para executar essa ação.";
        header("Location: sign_in.php");
        exit(0);
    }
    if(isset($_SESSION['flash'])) {
        $error = $_SESSION['flash']['error'];
        $message = $_SESSION['flash'];
        unset($_SESSION['flash']);       
    }

    require_once('src/utils/ConnectionFactory.php');

    $con = ConnectionFactory::getConnection();

    $stmt = $con->prepare("SELECT * FROM users_login");
    $stmt->execute();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="formulario.php">Cadastro - Logado</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Listar <span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <a href="/sign_out.php" class="btn btn-warning">Sair</a>            
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php if(isset($error)) : ?>
                    <p class="alert alert-danger"><?= $error ?></p>
                <?php endif ?>
                <?php if(isset($message)) : ?>
                    <p class="alert alert-sucess"><?= $message ?></p>
                <?php endif ?>
                <h1>
                    Cadastros
                    <a href="formulario.php" class="btn btn-success float-right">Novo Usuário</a>
                </h1>
                <hr />
            </div>
        
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                        <th>Data Nasc.</th>
                        <th>Ações</th>
                    </tr>
                    <?php while($row = $stmt->fetch(PDO::FETCH_OBJ)) : ?>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->nome ?></td>
                            <td><?= $row->cpf ?></td>
                            <td><?= $row->rg ?></td>
                            <td><?= $row->endereco ?></td>
                            <td><?= $row->email ?></td>
                            <td><?= $row->data_nascimento ?></td>
                            <td>
                                <a href="editar.php?id=<?= $row->id ?>" class="btn btn-small btn-warning">Editar</a>
                                <a href="deletar.php?id=<?= $row->id ?>" class="btn btn-small btn-danger" onclick="return confirm('Deseja Realmente Deletar?')">Deletar</a>
                            </td>              
                        </tr>
                    <?php endwhile ?>
                </table>
            </div>
        </div>      
    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>