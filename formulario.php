<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h1>Formulário de Cadastro</h1>
                <hr />
            </div>
        

            <form action="cadastrar.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail3" class="col-sm-6 col-form-label">Email:</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="inputEmail3" name="user[email]" value="manfe01@gmail.com">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword3" class="col-sm-6 col-form-label">Password:</label>
                        <div class="col-sm-12">
                        <input type="password" class="form-control" id="inputPassword3" name="user[senha]" value="123456">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nome" class="col-sm-6 col-form-label">Nome Completo:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nome" name="user[nome_completo]"  value="Mauricio N. Ferreira">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cpf" class="col-sm-6 col-form-label">CPF:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="cpf" name="user[cpf]" value="010.012.123-90">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="rg" class="col-sm-6 col-form-label">RG:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="rg" name="user[rg]"  value="3.123.123">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="data_nascimento" class="col-sm-6 col-form-label">Data Nascimento:</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="data_nascimento" name="user[data_nascimento]"  value="1989-12-15">
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="endereco" class="col-sm-12 col-form-label">Endereço:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="endereco" name="user[endereco]" value="Bairro SSSSS. Videira - SC">
                        </div>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                    
                    
                </div>

            </form>
        
        </div>      
    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>