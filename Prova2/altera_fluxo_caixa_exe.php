<?php
    include('conexao.php');

    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $hist = $_POST['hist'];
    $cheque = $_POST['cheque'];

    echo "<h1>Alteração de dados</h1>"; //Campos do tipo Varchar sempre tem aspas simples

    $sql = "UPDATE fluxo_caixa SET 
    data='$data',
    tipo='$tipo',
    valor='$valor',
    historico='$hist',
    cheque='$cheque' 

    WHERE id=$id";
    echo $sql."<br>";
    $result = mysqli_query($con,$sql); //a variavel result vai ter o resultado, se deu certo ou n
    if($result){
        echo "Dados Alterados com sucesso!<br>";}
    else{
        echo "Erro ao alterar dados: ".mysqli_error($con)."<br>";}
?>
<a href="index.php">Voltar</a>