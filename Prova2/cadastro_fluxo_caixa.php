<?php 
include("conexao.php");

$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$hist = $_POST['hist'];
$cheque = $_POST['cheque'];

echo "<h1>Dados do usuário</h1>";
echo "Data: $data <br>";
echo "Tipo: $tipo <br>";
echo "Valor: $valor <br>";
echo "Histórico: $hist <br>";
echo "Cheque: $cheque <br>";

$sql = "INSERT INTO fluxo_caixa (data,tipo,valor,historico,cheque)";
$sql .= "VALUES ('".$data."','".$tipo."','".$valor."','".$hist."','".$cheque."')";

echo $sql;
$result = mysqli_query($con, $sql);

if($result){
    echo "Dados cadastrados com sucesso";}
else{
    echo "Erro ao tentar cadastrar!";}

echo "<br><a href='index.php'>Voltar</a>";
?>