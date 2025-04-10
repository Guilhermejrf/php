<?php


include("conexao.php");


$nome_cand = $_POST['nome_cand'];
$email = $_POST['email'];

$sql = "INSERT INTO Candidato(nome_cand, email)
values ('$nome_cand', '$email')";
if(mysqli_query($conexao, $sql)){
    echo "Usuário Cadastrado com sucesso";
    }else{
    echo "Erro". mysqli_connect_error($conexao);
    }
    
    mysqli_close($conexao);
    
    ?>