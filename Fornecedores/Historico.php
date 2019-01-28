<?php
include ("Conexao.php");
$grupo = selectHistorico($_POST["idforne"]);

?>
 <head>
        <link href="CSS.css" rel="stylesheet" type="text/css"/>
        <script src="Javascript.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <meta charset="UTF-8">
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
         <script src="jquery-confirm.min.js" type="text/javascript"></script>
        <link href="jquery-confirm.min.css" rel="stylesheet" type="text/css"/>
        <title>CRUD com Bootstrap 3</title>
       
    </head>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Fornecedores</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Cadastrar.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
          
            </div>
        </nav>

        <hr />
<div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Rua</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th>Pais</th>
                        <th>CEP</th>
                        <th>OBS</th> 
                        <th>Número</th>
                        <th>Data</th>
                        <th>Categoria</th>
                        <th>CI</th>
                        <th>CNPJ</th>
                        <th>IE</th>
                        <th>Responsavel</th>
                        <th>Data Alteração</th>
                        <th>Ativo</th>                                            
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($grupo as $fornecedor) { ?>

                                <tr>
                                     <td><?= $fornecedor["idforne"] ?></td>
                                    <td><?= $fornecedor["nome"] ?></td>
                                    <td><?= $fornecedor["rua"] ?></td>
                                    <td><?= $fornecedor["cidade"] ?></td>
                                    <td><?= $fornecedor["uf"] ?></td>
                                    <td><?= $fornecedor["pais"] ?></td>
                                    <td><?= $fornecedor["cep"] ?></td>
                                    <td><?= $fornecedor["obs"] ?></td>
                                    <td><?= $fornecedor["numero"] ?></td>
                                    <td><?= $fornecedor["data"] ?></td>
                                    <td><?= $fornecedor["categoria"] ?></td>
                                    <td><?= $fornecedor["ci"] ?></td>
                                    <td><?= $fornecedor["cnpj"] ?></td>
                                    <td><?= $fornecedor["ie"] ?></td>
                                    <td><?= $fornecedor["responsavel"] ?></td>
                                    <td><?= $fornecedor["data_alteracao"] ?></td>
                                    <td><?= $fornecedor["status"]==="1" ? "Ativo":"Inativo" ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

<script> 
    function get(){
        
        $( location ).attr("href", "Pesquisar.php?Nome="+$("#Nome").val());
    }
</script>