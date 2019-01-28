<html>
    <head>
        <link href="CSS.css" rel="stylesheet" type="text/css"/>
        <script src="Javascript.js" type="text/javascript"></script>
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <meta charset="UTF-8">
        <script src="jquery-confirm.min.js" type="text/javascript"></script>
        <link href="jquery-confirm.min.css" rel="stylesheet" type="text/css"/>
        <title>CRUD com Bootstrap 3</title>

    </head>
    <?php



?>
<?php
include ("Conexao.php");
$grupo = SelectFornecedores();
?>
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
       <div id="main" class="container-fluid " style="margin-top: 50px ">

           <form class="form-inline">
       <div class="input-group h2">
       <input id="Nome" class="form-control " type="text" placeholder="Nome" value="<?php echo $_GET["Nome"]?>">
       <input id="CNPJ" class="form-control" type="text" placeholder="CNPJ" value="<?php echo $_GET["CNPJ"]?>">
       <input id="IE" class="form-control" type="text" placeholder="IE" value="<?php echo $_GET["IE"]?>">
       <select id="CATEGORIA" name="CATEGORIA" value="" class="form-control">
                            <option value="0">Escolha</option>
                            <option value="1"<?=$_GET["CATEGORIA"]==="1"? "selected": ""?> >Importação</option>
                            <option value="2"<?=$_GET["CATEGORIA"]==="2"? "selected": ""?> >Nacional</option>
                        </select>
       <input id="CIDADE" class="form-control" type="text" placeholder="CIDADE" value="<?php echo $_GET["CIDADE"]?>">
       </div>
       <div class="input-group h2">
           <input type="button" value="Pesquisar" class="btn btn-default" onclick="get()">
       </div> 
       </form>
       </div>
               <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                      
                        <th>Nome</th>
                        <th>Rua</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th>Pais</th>
                        <th>CEP</th>
                        <th>Número</th>
                        <th>Data</th>
                        <th>Categoria</th>
                        <th>CI</th>
                        <th>CNPJ</th>
                        <th>IE</th>
                        <th>Data Cadastro</th>
                        <th>Ativo</th>    
                        <th class="actions" colspan="3" style="text-align: center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($grupo as $fornecedor) { ?>

                                <tr>
                                  
                                    <td><?= $fornecedor["nome"] ?></td>
                                    <td><?= $fornecedor["rua"] ?></td>
                                    <td><?= $fornecedor["cidade"] ?></td>
                                    <td><?= $fornecedor["uf"] ?></td>
                                    <td><?= $fornecedor["pais"] ?></td>
                                    <td><?= $fornecedor["cep"] ?></td>
                              
                                    <td><?= $fornecedor["numero"] ?></td>
                                    <td><?= $fornecedor["data"] ?></td>
                                    <td><?= $fornecedor["categoria"] ?></td>
                                    <td><?= $fornecedor["ci"] ?></td>
                                    <td><?= $fornecedor["cnpj"] ?></td>
                                    <td><?= $fornecedor["ie"] ?></td>
                                    <td><?= $fornecedor["data_cadastro"] ?></td>
                                    <td><?= $fornecedor["status"]==="1" ? "Ativo":"Inativo" ?></td>
                                     <td class="actions" >
                                        <form name="Alterar" action="Alterar.php" method="POST">
                                            <input type="hidden" name="idforne" value="<?= $fornecedor["idforne"] ?>"/>
                                            <input type="submit" value="Editar" class="btn btn-warning btn-xs" name="editar"/>
                                        </form>
                                        
                                    </td>                                   
                                     <td>
                                         <form name="Historico" action="Historico.php" method="POST">
                                            <input type="hidden" name="idforne" value="<?= $fornecedor["idforne"] ?>"/>
                                            <input type="submit" value="Historico" class="btn btn-primary btn-xs" name="Historico"/>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
               
    </body>
    
</html>
<script> 
    function get(){
        
        $( location ).attr("href", "Pesquisar.php?Nome="+$("#Nome").val()+
                "&CNPJ="+$("#CNPJ").val()+
                 "&IE="+$("#IE").val()+
                 "&CATEGORIA="+$("#CATEGORIA").val()+
                   "&CIDADE="+$("#CIDADE").val());


}
</script>