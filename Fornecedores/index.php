<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include ("Conexao.php");
$grupo = SelectAllFornecedores();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
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
        <hr/>

        <div id="main" class="container-fluid" style="margin-top: 50px">

            <div id="top" class="row">
                <div class="col-sm-3">
                    <h2>Fornecedores</h2>
                </div>
                <div class="col-sm-6">

                    <div class="input-group h2">
                        <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                        <span class="input-group-btn">
                    </div>

                </div>
                <div class="col-sm-3">
                <input type="submit"  id="acao" name="acao" class="btn btn-primary" value = "Pesquisar">
                </div>
            </div> <!-- /#top -->


            <hr />
            <div id="list" class="row">

                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>IE</th>
                        <th>CI</th>
                        <th>Categoria</th>
                        <th>Cidade</th>
                        <th class="actions">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($grupo as $fornecedor) { ?>

                                <tr>
                                    <td><?= $fornecedor["nome"] ?></td>
                                    <td><?= $fornecedor["cnpj"] ?></td>
                                    <td><?= $fornecedor["ie"] ?></td>
                                    <td><?= $fornecedor["ci"] ?></td>
                                    <td><?= $fornecedor["categoria"] ?></td>
                                    <td><?= $fornecedor["cidade"] ?></td>
                                    <td class="actions">
                                        <form name="Alterar" action="Alterar.php" method="POST">
                                            <input type="hidden" name="idforne" value="<?= $fornecedor["idforne"] ?>"/>
                                            <input type="submit" value="Editar" class="btn btn-warning btn-xs" name="editar"/>


                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div> <!-- /#list -->


        </div>
    </body>
</html>
