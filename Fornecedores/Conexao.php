<?php //

if(isset($_POST["acao"])){
    
   if($_POST["acao"]=="Inserir"){
    InserirPessoa();
} 
   if($_POST["acao"]=="Alterar"){
    AlterarPessoa();
} 

}

function AbrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "fornecedor");
    return $conexao;
}
function InserirPessoa(){
    $banco = AbrirBanco();
    $sql = "INSERT INTO fornecedor( nome, rua, cidade, uf, pais, cep, obs, numero, data, categoria, ci, cnpj, ie)"
            ." VALUES ('{$_POST["idNome"]}','{$_POST["idRUA"]}','{$_POST["idCIDADE"]}','{$_POST["idUF"]}','{$_POST["idPAIS"]}','{$_POST["idCEP"]}','{$_POST["idOBS"]}','[{$_POST["idNumero"]}','{$_POST["idDATA"]}','{$_POST["idCatForn"]}','{$_POST["idCI"]}','{$_POST["idCNPJ"]}','{$_POST["idIE"]}')";
    $banco->query($sql);
    $banco->close();
    VoltarIndex();
}
function AlterarPessoa(){
    $banco = AbrirBanco();
    $sql = "UPDATE fornecedor SET nome='{$_POST["idNome"]}',"
    . "rua='{$_POST["idRUA"]}',cidade='{$_POST["idCIDADE"]}',uf='{$_POST["idUF"]}',pais ='{$_POST["idPAIS"]}',cep='{$_POST["idCEP"]}',obs='{$_POST["idOBS"]}',numero='{$_POST["idNumero"]}',data='{$_POST["idDATA"]}',categoria='{$_POST["idCatForn"]}',"
    . "ci='{$_POST["idCI"]}',cnpj='{$_POST["idCNPJ"]}',ie='{$_POST["idCNPJ"]}' WHERE idforne='{$_POST["idforne"]}'";
    $banco->query($sql);
    $banco->close();
    VoltarIndex();
}
function SelectAllFornecedores(){
    $banco = AbrirBanco();
    $sql = "SELECT * FROM fornecedor ";
    $resultado = $banco->query($sql);
    $banco->close();
    while($row = mysqli_fetch_array($resultado)) {  
        $grupo[] = $row;
    }
    return $grupo;
}
function SelectIdFornecedores($idforne){
    $banco = AbrirBanco();
    $sql = "SELECT * FROM fornecedor WHERE idforne =".$idforne;
    $resultado = $banco->query($sql);
    $banco->close();
    $fornecedor = mysqli_fetch_assoc($resultado);
    return $fornecedor;
}
function VoltarIndex(){
header("Location:index.php");
}