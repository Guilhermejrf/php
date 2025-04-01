<?php


include("conexao.php");


$nome=$_POST['Nome'];
$data_nasc=$_POST['data_nasc'];
$email=$_POST['Email'];
$senha=$_POST['Senha'];
$telefone=$_POST['Telefone'];
$serie=$_POST['Série'];


$sql="INSERT INTO cadastro(Nome, Sobrenome, Email, Senha)
values ('$nome', '$data_nasc', '$email', '$senha', '$telefone', '$serie')";
if (mysqli_query($conexao, $sql)){
    echo "Usuário Cadastrado com sucesso";
} else{
    echo "Erro". mysqli_connect_error($conexao);
}


mysqli_close($conexao);
?>