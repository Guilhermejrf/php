<?php


include("conexao.php");


$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$salario = $_POST['salario'];


$sql = "INSERT INTO Funcionario(nome, telefone, salario)
values ('$nome', '$telefone', '$salario')";
if(mysqli_query($conexao, $sql)){   
    header('Location: retorno.php');
    }else{
    echo "Erro". mysqli_connect_error($conexao);
    }
    
    mysqli_close($conexao);
    
    ?> 