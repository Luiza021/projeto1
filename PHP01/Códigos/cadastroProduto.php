<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .btinput {
            padding-left: 10px 30px 10px 30px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>

    </meta>
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
    <?php
    //envio dos dados para o Bd
    if (isset($_POST['CadastrarProduto'])) {
        include_once 'controller/ProdutoController.php';
        $nomeProduto = $_POST['nomeProduto'];
        $vlrCompra = $_POST['vlrCompra'];
        $vlrVenda = $_POST['vlrVenda'];
        $qtdEstoque = $_POST['qtdEstoque'];

        $pc = new ProdutoController();
        echo "<p" . $pc->inserirProduto ($nomeProduto, $vlrCompra ,$vlrVenda, $qtdEstoque)."</p";
    }
    ?>
        <div class="card-bory border">
        <form method="post" action="">
            <div class="row">
                <div class="col-md 6 offset-md-3">
                    <label>Código</label><br>
                    <label>Produto:</label>
                    <input class="form-control" type="text" name="nomeProduto">
                    <label>Valor da Compra</label>
                    <input class="form-control" type="date" name="vlrCompra">
                    <label>Valoe de Venda</label>
                    <input class="form-control" type="email" name="vlrVenda">
                    <label>Quatidade de Estoque</label><br>
                    <input class="form-control" type="text" name="qtdEstoque">
                    <input type="submit" name="cadastrarProduto" class="btn btn-success btInput" value="Enviar">
                    &nbsp;&nbsp;

                    <input type="reset" class="btn btn-light btInput" value="Limpar">
                </div>

            </div>
    </div>
    </form>
    </div>

    <div class="col-md-5 offset-md-5">

    </div>
    </div>
    </form>
    </div>

    <link rel="styesheet" hrel="css/bootstrap.css">
    <link rel="styesheet" hrel="css/bootstrap.min.css">
</body>

</html>