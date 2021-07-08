<<<<<<< HEAD
<?php
include_once '../CONT/LivroController.php'; 
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
     
        .espaco {
            padding: 10px;
        }
        .btinput {
            padding-left: 10px 20px 10px 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>

    </meta>
=======

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Teste</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .espaco {
            padding: 24px;
        }

        .btInput {
            margin-top: 20px;
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
>>>>>>> d030f1ba82ce386acbc0a96bee2d0ab480f219ae
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid"><a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown link </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<<<<<<< HEAD
     <div class="container-fluid ">
        <div class="row" style="margin-top: 45px;">
            <div class="col-8 offset-2">
=======
>>>>>>> d030f1ba82ce386acbc0a96bee2d0ab480f219ae
<div class="card-header bg-light text-center">
                    Cadastro do Livro
                </div>
                <div class="card-body border">
                    <form method="post" action="">
                        <div class="row g-3">
                            <div class="col-md-6 offset-md-3">
                                <label>Código:</label><br>
                                <label>Titulo:</label>
                                <input type="text" class="form-control" name="titulo" required>
                                <label>Autor (a):</label>
                                <input type="text" class="form-control" name="autor" required>
                                <label>Nome do Editor (a):</label>
                                <input type="text" class="form-control" name="editora" required>
                                <label>Quantidade no Estoque:</label>
                                <input type="number" class="form-control" name="qtdEstoque" required>
                                <input type="submit" name="cadastrarLivro" class="btn btn-success btInput" value="Enviar">
                                &nbsp; &nbsp;
                                <input type="reset" class="btn btn-danger btInput" value="Limpar">
                            </div>
                        </div>
<<<<<<< HEAD
                     
                    </form>
                    <?php

                    
=======
                    </form>
                    <?php

                    include_once ('C:/xampp/htdocs/projeto/PHP01/CONT/LivroController.php'); 
>>>>>>> d030f1ba82ce386acbc0a96bee2d0ab480f219ae

                    //envio dos dados para o banco
                    if (isset($_POST['cadastrarLivro'])) {
                        $titulo = $_POST['titulo'];
                        $autor = $_POST['autor'];
                        $editora = $_POST['editora'];
                        $qtdEstoque = $_POST['qtdEstoque'];
                        $pc = new LivroController();
                        echo "<p>" . $pc->inserirLivro($idLivro,$titulo,$autor, $editora,$qtdEstoque) . "</p>";
                    }
                    ?>
                </div>
<<<<<<< HEAD
                <table class="table">
                    <thead class="thead-dark bg-dark text-white">
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Compra (R$)</th>
                            <th scope="col">Venda (R$)</th>
                            <th scope="col">Estoque</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $pcTable = new LivroController();
                        $listarLivro= $pcTable->listarLivro();

                        foreach ($listarLivro as $lp) {

                        ?>
                            <tr>
                                <td><?php print_r($lp->getIdLivro()); ?></td>
                                <td><?php print_r($lp->getTitulo()); ?></td>
                                <td><?php print_r($lp->getAutor()); ?></td>
                                <td><?php print_r($lp->getEditora()); ?></td>
                                <td><?php print_r($lp->getQtdEstoque()); ?></td>
                                <td><a class="btn btn-outline-dark" href="#">Editar</a>
                                    <a class="btn btn-outline-danger" href="#">Excluir</a>
                                </td>
                            </tr>

                        <?php
                        }

                        ?>
=======
>>>>>>> d030f1ba82ce386acbc0a96bee2d0ab480f219ae
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html