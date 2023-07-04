<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap ( CSS & JS ) -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/bootstrap.bundle.min.js"></script>

    <title>CRUD</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="?page=novo">Novo</a>                                  <!-- Não pode ter Espaço no HTML (page=novo)-->
                    <a class="nav-link" href="?page=listar">Listar</a>                              <!-- Não pode ter Espaço no HTML (page=novo)-->
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">

                <?php

                    include("config.php");  // Puxar o config do Banco de Dados

                    // Switch pra exibir o código correto de acordo com a Ação desejada, dentro do "index.php" mesmo
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include ("novo.php");
                        break;

                        case "listar":
                            include ("listar.php");
                        break;

                        case "salvar":
                            include("salvar.php");
                        break;

                        case "editar":
                            include("editar.php");
                        break;

                        default:
                            print "<h1> Bem vindo a este CRUD em PHP ! </h1>";
                    }   
                ?>

            </div>
        </div>
    </div>
    
</body>
</html>