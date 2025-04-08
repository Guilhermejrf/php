<link rel="stylesheet" href="style.css" 

<?php
// Incluindo a conexão
include("conexao.php");

// fazendo a busca no banco
$sql = "SELECT * FROM Aluno";
//Variável result responsável por trazer os dados do banco para
// Interface do usuário
$result = mysqli_query($conexao, $sql);
?>



<div class="tabela">
    <h2>Lista de Usuários</h2>
    <table>
      <tr>
        <th>nome</th>
        <th>data_nasc</th>
        <th>email</th>
        <th>senha</th>
        <th>telefone</th>
        <th>serie</th>
      </tr>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['data_nasc']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['senha']; ?></td>
          <td><?php echo $row['telefone']; ?></td>
          <td><?php echo $row['serie']; ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>

  </script>