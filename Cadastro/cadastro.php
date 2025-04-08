<?php


include("conexao.php");


$nome = $_POST['Nome'];
$data_nasc = $_POST['data_nasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$serie = $_POST['serie'];


$sql = "INSERT INTO Aluno(nome, data_nasc, email, senha, telefone, serie)
values ('$nome', '$data_nasc', '$email', '$senha', '$telefone', '$serie')";
if(mysqli_query($conexao, $sql)){
    echo "Usuário Cadastrado com sucesso";
    }else{
    echo "Erro". mysqli_connect_error($conexao);
    }
    
    mysqli_close($conexao);
    
    ?> 