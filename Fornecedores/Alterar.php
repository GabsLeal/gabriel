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
        <title>CRUD com Bootstrap 3</title>
       
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
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <hr />
        <div id="main" class="container-fluid" >

            <h3 class="page-header" style="text-align: center">Fornecedores</h3>

            <form name="DadosFornecedor" action="Conexao.php" method="POST">
                <div class="row"  >
                    <div class="form-group col-md-4">
                        <label for="idNome">Nome</label>
                        <input type="text" class="form-control" id="idNome" value="<?=$fornecedor["nome"]?>" name="idNome" value="" placeholder="Digite o nome">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idRUA">Rua</label>
                        <input type="text" class="form-control" id="idRUA" value="<?=$fornecedor["rua"]?>" name="idRUA"  placeholder="Digite a rua">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idCIDADE">Cidade</label>
                        <input type="text" class="form-control" id="idCIDADE" value="<?=$fornecedor["cidade"]?>" name="idCIDADE" placeholder="Digite a cidade">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="idUF">UF</label>
                        <select id="idUF" name="idUF" value="<?=$fornecedor["uf"]?>" class="form-control">
                            <option value="estado">Selecione o Estado</option> 
                            <option value="ac">Acre</option> 
                            <option value="al">Alagoas</option> 
                            <option value="am">Amazonas</option> 
                            <option value="ap">Amapá</option> 
                            <option value="ba">Bahia</option> 
                            <option value="ce">Ceará</option> 
                            <option value="df">Distrito Federal</option> 
                            <option value="es">Espírito Santo</option> 
                            <option value="go">Goiás</option> 
                            <option value="ma">Maranhão</option> 
                            <option value="mt">Mato Grosso</option> 
                            <option value="ms">Mato Grosso do Sul</option> 
                            <option value="mg">Minas Gerais</option> 
                            <option value="pa">Pará</option> 
                            <option value="pb">Paraíba</option> 
                            <option value="pr">Paraná</option> 
                            <option value="pe">Pernambuco</option> 
                            <option value="pi">Piauí</option> 
                            <option value="rj">Rio de Janeiro</option> 
                            <option value="rn">Rio Grande do Norte</option> 
                            <option value="ro">Rondônia</option> 
                            <option value="rs">Rio Grande do Sul</option> 
                            <option value="rr">Roraima</option> 
                            <option value="sc">Santa Catarina</option> 
                            <option value="se">Sergipe</option> 
                            <option value="sp">São Paulo</option> 
                            <option value="to">Tocantins</option> 
                        </select>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="idPAIS">Pais</label>
                        <select id="idPAIS" name="idPAIS" value="<?=$fornecedor["pais"]?>" class="form-control">
                            <option value="pais">Selecione o País</option> 
                            <option value="África do Sul">África do Sul</option>
                            <option value="Albânia">Albânia</option>
                            <option value="Alemanha">Alemanha</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua">Antigua</option>
                            <option value="Arábia Saudita">Arábia Saudita</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armênia">Armênia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Austrália">Austrália</option>
                            <option value="Áustria">Áustria</option>
                            <option value="Azerbaijão">Azerbaijão</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrein">Bahrein</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Bélgica">Bélgica</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermudas">Bermudas</option>
                            <option value="Botsuana">Botsuana</option>
                            <option value="Brasil" selected>Brasil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgária">Bulgária</option>
                            <option value="Burkina Fasso">Burkina Fasso</option>
                            <option value="botão">botão</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Camarões">Camarões</option>
                            <option value="Camboja">Camboja</option>
                            <option value="Canadá">Canadá</option>
                            <option value="Cazaquistão">Cazaquistão</option>
                            <option value="Chade">Chade</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                            <option value="Colômbia">Colômbia</option>
                            <option value="Congo">Congo</option>
                            <option value="Coréia do Sul">Coréia do Sul</option>
                            <option value="Costa do Marfim">Costa do Marfim</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croácia">Croácia</option>
                            <option value="Dinamarca">Dinamarca</option>
                            <option value="Djibuti">Djibuti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="EUA">EUA</option>
                            <option value="Egito">Egito</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Emirados Árabes">Emirados Árabes</option>
                            <option value="Equador">Equador</option>
                            <option value="Eritréia">Eritréia</option>
                            <option value="Escócia">Escócia</option>
                            <option value="Eslováquia">Eslováquia</option>
                            <option value="Eslovênia">Eslovênia</option>
                            <option value="Espanha">Espanha</option>
                            <option value="Estônia">Estônia</option>
                            <option value="Etiópia">Etiópia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Filipinas">Filipinas</option>
                            <option value="Finlândia">Finlândia</option>
                            <option value="França">França</option>
                            <option value="Gabão">Gabão</option>
                            <option value="Gâmbia">Gâmbia</option>
                            <option value="Gana">Gana</option>
                            <option value="Geórgia">Geórgia</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Granada">Granada</option>
                            <option value="Grécia">Grécia</option>
                            <option value="Guadalupe">Guadalupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guiana">Guiana</option>
                            <option value="Guiana Francesa">Guiana Francesa</option>
                            <option value="Guiné-bissau">Guiné-bissau</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Holanda">Holanda</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungria">Hungria</option>
                            <option value="Iêmen">Iêmen</option>
                            <option value="Ilhas Cayman">Ilhas Cayman</option>
                            <option value="Ilhas Cook">Ilhas Cook</option>
                            <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                            <option value="Ilhas Marshall">Ilhas Marshall</option>
                            <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                            <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                            <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                            <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                            <option value="Índia">Índia</option>
                            <option value="Indonésia">Indonésia</option>
                            <option value="Inglaterra">Inglaterra</option>
                            <option value="Irlanda">Irlanda</option>
                            <option value="Islândia">Islândia</option>
                            <option value="Israel">Israel</option>
                            <option value="Itália">Itália</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japão">Japão</option>
                            <option value="Jordânia">Jordânia</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Líbano">Líbano</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lituânia">Lituânia</option>
                            <option value="Luxemburgo">Luxemburgo</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedônia">Macedônia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malásia">Malásia</option>
                            <option value="Malaui">Malaui</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marrocos">Marrocos</option>
                            <option value="Martinica">Martinica</option>
                            <option value="Mauritânia">Mauritânia</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="México">México</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Mônaco">Mônaco</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Nicarágua">Nicarágua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigéria">Nigéria</option>
                            <option value="Noruega">Noruega</option>
                            <option value="Nova Caledônia">Nova Caledônia</option>
                            <option value="Nova Zelândia">Nova Zelândia</option>
                            <option value="Omã">Omã</option>
                            <option value="Palau">Palau</option>
                            <option value="Panamá">Panamá</option>
                            <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                            <option value="Paquistão">Paquistão</option>
                            <option value="Peru">Peru</option>
                            <option value="Polinésia Francesa">Polinésia Francesa</option>
                            <option value="Polônia">Polônia</option>
                            <option value="Porto Rico">Porto Rico</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Quênia">Quênia</option>
                            <option value="Rep. Dominicana">Rep. Dominicana</option>
                            <option value="Rep. Tcheca">Rep. Tcheca</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romênia">Romênia</option>
                            <option value="Ruanda">Ruanda</option>
                            <option value="Rússia">Rússia</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa Americana">Samoa Americana</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serra Leone">Serra Leone</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Singapura">Singapura</option>
                            <option value="Síria">Síria</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                            <option value="St. Lúcia">St. Lúcia</option>
                            <option value="St. Vincent">St. Vincent</option>
                            <option value="Sudão">Sudão</option>
                            <option value="Suécia">Suécia</option>
                            <option value="Suiça">Suiça</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Tailândia">Tailândia</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tanzânia">Tanzânia</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunísia">Tunísia</option>
                            <option value="Turquia">Turquia</option>
                            <option value="Ucrânia">Ucrânia</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Uruguai">Uruguai</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnã">Vietnã</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zâmbia">Zâmbia</option>
                            <option value="Zimbábue">Zimbábue</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idCEP">CEP</label>
                        <input type="text" class="form-control" id="idCEP" value="<?=$fornecedor["cep"]?>" name="idCEP" placeholder="Digite o CEP">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="idOBS">Obs</label>
                        <input type="text" class="form-control" id="idOBS" value="<?=$fornecedor["obs"]?>" name="idOBS" placeholder="Digite uma observação">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idNumero">Número</label>
                        <input type="text" class="form-control" id="idNumero" value="<?=$fornecedor["numero"]?>" name="idNumero" placeholder="Digite o número">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idDATA">Data</label>
                        <input type="date" class="form-control" id="idDATA" value="<?=$fornecedor["data"]?>" name="idDATA"   >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="idCatForn">Categoria de Fornecimento</label>
                        <select id="idCatForn" name="idCatForn" value="<?=$fornecedor["categoria"]?>" class="form-control" onchange="mostraDiv(this.value)">
                            <option value="0">Escolha</option>
                            <option value="1">Importação</option>
                            <option value="2">Nacional</option>
                        </select>
                    </div>
                    <div  id="divCNPJ" class="form-group col-md-4">
                        <label for="idCNPJ">CNPJ</label>
                        <input id="idCNPJ" name="idCNPJ" type="text" value="<?=$fornecedor["cnpj"]?>" placeholder="CNPJ" class="form-control input-md" >
                    </div>
                    <div  id="divIE" class="form-group col-md-4">
                        <label for="idIE">IE</label>
                        <input id="idIE" name="idIE" type="text" value="<?=$fornecedor["ie"]?>" placeholder="IE" class="form-control input-md">
                    </div>


                    <div  id="divCI" class="form-group col-md-4">
                        <label for="idCI">CI</label>
                        <input id="idCI" name="idCI" type="text" value="<?=$fornecedor["ci"]?>" placeholder="CI" class="form-control input-md"  >
                    </div>
                </div>
                <div class="row">

                </div>
                <hr />
                <div class="form-group" >
                   
                    <div class="col-md-8">
                        <input type="submit"  id="acao" name="acao" class="btn btn-primary" value = "Alterar">
                        <input type="hidden"  name="idforne" value = "<?=$fornecedor["idforne"]?>" >
                        
  
                        <input type="submit"  id="idCancelar" name="idCancelar" class="btn btn-danger" value = "Cancelar">
                    </div>
                </div>
        </div>







    </form>
</div>

</body>
</html>