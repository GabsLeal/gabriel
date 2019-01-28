<!DOCTYPE html>

<?php
include ("Conexao.php");
$fornecedor = SelectIdFornecedores($_POST["idforne"]);

?>
<html>
    <head>
        <link href="CSS.css" rel="stylesheet" type="text/css"/>
        <script src="Javascript.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <meta charset="UTF-8">
       <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
        <title>CRUD com Bootstrap 3</title>
       
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Fornecedor</a>
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
        <div id="main" class="container-fluid" >

            <h3 class="page-header" style="text-align: center">Fornecedores</h3>

            <form name="DadosFornecedor" action="Conexao.php" method="POST">
                <div class="row"  >
                    <div class="form-group col-md-4">
                        <label >Nome</label><br>
                        <label ><?=$fornecedor["nome"]?></label>
         
                    </div>
                    <div class="form-group col-md-4">
                        <label >Rua</label><br>
                        <label ><?=$fornecedor["rua"]?></label>
                    </div>
                    <div class="form-group col-md-4">
                        <label >Cidade</label><br>
                          <label ><?=$fornecedor["cidade"]?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>UF</label><br>
                         <label><?=$fornecedor["uf"]?></label>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Pais</label><br>
                        <label><?=$fornecedor["pais"]?></label>                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idCEP">CEP</label><br>
                        <label><?=$fornecedor["cep"]?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Obs</label><br>
                        <label><?=$fornecedor["obs"]?></label>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Número</label><br>
                        <label><?=$fornecedor["numero"]?></label>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Data</label><br>
                        <label><?=$fornecedor["data"]?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label>Categoria de Fornecimento</label><br>
                        <label ><?=$fornecedor["categoria"]?></label>   
                        
                    </div>
                    <div  class="form-group col-md-4">
                        <label>CNPJ</label><br>
                        <label><?=$fornecedor["cnpj"]?></label>
                    </div>
                    <div   class="form-group col-md-4">
                        <label>IE</label><br>
                        <label><?=$fornecedor["ie"]?></label>
                    </div>
                    <div   class="form-group col-md-4">
                        <label>CI</label><br>
                        <label><?=$fornecedor["ci"]?></label>
                    </div>
                     <div   class="form-group col-md-4">
                        <label>Responsável</label><br>
                        <label><?=$fornecedor["responsavel"]?></label>
                    </div>
                    <div   class="form-group col-md-4">
                        <label>Responsável</label><br>
                        <label><?=$fornecedor["status"]==='1'? "Ativo":"Inativo" ?></label>
                    </div>
                </div>
                <div class="row">

                </div>
                <hr />
                <div class="form-group" >
                   
                    <div class="col-md-8">
                        <input type="hidden"  name="idforne" value = "<?=$fornecedor["idforne"]?>" >
                         <a href="index.php" class="btn btn-primary">Voltar</a>                    
                    </div>
                </div>
        </div>







    </form>
</div>

</body>
</html>
<script> 
    function get(){
        
        $( location ).attr("href", "Pesquisar.php?Nome="+$("#Nome").val());
    }
</script>