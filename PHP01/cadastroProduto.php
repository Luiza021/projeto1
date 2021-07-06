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
           <thead>
                    <th>Nomen/th>
            <th>Compra (R$)</th>
            <th>Venda (R$)</th>
            <th>Estoque</th><tr
            <th

        </thead>
   <tbody>
         <?php
            $pdTabela = new ProdutoController();
            $listaProduto = $pcTabela->listaProduto();
             foreach($listaProdutos as $lp){
                <td><?php print_r($lp->getIdProduto()); ?></td>;
            print_r("<tr>" . $lp->getNomeProduto().['nome'] . "</td>");
            print_r("<tr>" . $lp->getVlrCompra(). "</td>");
            print_r("<tr>" . $lp->getVlrVenda(). "</td>");
            print_r("<tr>" . $lp->getQtdEstoque() . "</td></tr>");
            }
        ?>
   </tbody>
    <div class="row" sytep
     <?php
                    //envio dos dados para o Bd
                    if (isset($_POST['CadastrarProduto'])) {
                        include_once 'controller/ProdutoController.php';
                        $nomeProduto = $_POST['nomeProduto'];
                        $vlrCompra = $_POST['vlrCompra'];
                        $vlrVenda = $_POST['vlrVenda'];
                        $qtdEstoque = $_POST['qtdEstoque'];

                        $pc = new ProdutoController();
                        echo "<p" . $pc->inserirProduto($nomeProduto, $vlrCompra, $vlrVenda, $qtdEstoque) . "</p";
                    }
                    ?> 
                    <div class="card-bory border">
        <form method="post" action="">
            <div class="row">
                <div class="col-md 6 offset-md-3">
                    <label>Código</label><br>
                    <label>Produto:</label>
                    <input class="form-control" type="text" name="nomeProduto">
                    <label>Valor da Compra:</label>
                    <input class="form-control" type="date" name="vlrCompra">
                    <label>Valor de Venda:</label>
                    <input class="form-control" type="email" name="vlrVenda">
                    <label>Quantidade de Estoque:</label><br>
                    <input class="form-control" type="text" name="qtdEstoque">
                    <input type="submit" name="cadastrarProduto" class="btn btn-success btInput" value="Editar">
                    &nbsp;&nbsp;
                    <input type="reset" class="btn btn-light btInput" value="Excluir">
                </div>

            </div>

        </form>
    </div>
    </div>
    </div>
    <link rel="styesheet" hrel="css/bootstrap.css">
    <link rel="styesheet" hrel="css/bootstrap.min.css">
</body>

</html>
?>
<?php
include_once 'C:/xampp/htdocs/projeto1/PHP01/model/Conecta.php';
$conn = new Conecta();
if ($conn->conectadb()) {
    $sql = "select * from produto";
    $query = mysqli_query($conn->conectadb(), $sql);
    $lista = mysqli_fetch_array($query);
    mysqli_close($conn->conectadb());
    if ($lp) {
        do {
            print_r("<tr><th>" . $lp['codigo'] . "</td>");
            print_r("<tr>" . $lp['nome'] . "</td>");
            print_r("<tr>" . $lp['vlrCompra'] . "</td>");
            print_r("<tr>" . $lp['vlrvenda'] . "</td>");
            print_r("<tr>" . $lp['qtdEstoque'] . "</td></tr>");
        } while ($lp = mysqli_fetch_array($query));
    }
}

?>