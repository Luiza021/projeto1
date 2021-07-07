<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .btinput {
            padding-left: 10px 20px 10px 20px;
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
    <div class="container-fluid">
        <div class="row" style="margin-top: 30px;">
            <div class="col-8 offset-2">

<div class="card-header bg-light text-center border" style="padding-bottom: 15px; padding-top: 15px;">
</div>
<?php
  //envio dos dados para o Bd
  if (isset($_POST['CadastrarProduto'])){
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
                    <label>Quantidade no Estoque:</label><br>
                    <input class="form-control" type="text" name="qtdEstoque">
                    <input type="submit" name="cadastrarProduto" class="btn btn-success btInput" value="Enviar">
                    &nbsp;&nbsp;
                    <input type="reset" class="btn btn-light btInput" value="Limpar">
                </div>

            </div>

        </form>
    </div>
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
            $pdTabela = new ProdutoController();
            $listaProduto = $pcTabela->listaProduto();
             foreach($listaProdutos as $lp){
                
                /*<td><?php print_r($lp->getIdProduto()); ?></td>;
            print_r("<tr>" . $lp->getNomeProduto().['nome'] . "</td>");
            print_r("<tr>" . $lp->getVlrCompra(). "</td>");
            print_r("<tr>" . $lp->getVlrVenda(). "</td>");
             } 
             ?>
            print_r("<tr>" . $lp->getQtdEstoque() . "</td></tr>");  */
            ?>

          <tr>

          <td><?php print_r($lp->getIdProduto());?></td>
          <td><?php print_r($lp->getNomeProduto());?></td>
          <td><?php print_r($lp->getVlrCompra());?></td>
          <td><?php print_r($lp->getVlrVenda());?></td>
          <td><?php print_r($lp->getQtdEstoque());?></td>
          <td><a class="btn btn-outline-dark" href="#">Editar</a>
          <a class="btn btn-outline-danger" href="#">Excluir</a>
          </td>
    </div>
    </div>
    <script src="styesheet" hrel="css/bootstrap.css"></script>
    <script src="styesheet" hrel="css/bootstrap.min.css"></script>
</body>

</html>



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
?>