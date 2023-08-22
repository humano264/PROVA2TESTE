<?php 
include("conexao.php");
$consulta = $_POST['consulta'];

if($consulta == 'te') {
    $sql ="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    echo "Aqui esta o valor total de entradas do banco ".$row['valor']."<br>";
} else if($consulta == 'ts') {
    $sql ="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    echo "Aqui esta o valor total de saidas do banco ".$row['valor']."<br>";
} else if($consulta == 'st'){
    $sql ="select sum(case when tipo = 'entrada' then valor else 0 end) - 
    sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    echo "Aqui esta o valor total de saldo no banco ".$row['valor']."<br>";
}

echo "<a href='index.php'>Voltar</a>";
?>