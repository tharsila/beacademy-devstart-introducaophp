<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de Alunos</title>
  <!-- add bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 5rem;
    font-family: sans-serif;
  }
</style>
<body class="container">
  <?php
    $aluno1 = [
      'nome' => 'Gatuni',
      'email' => 'gatuni@email.com',
      'telefone' => '91 9999-9999'
    ];
    
    $aluno2 = [
      'nome' => 'Yoshi',
      'email' => 'yoshi@email.com',
      'telefone' => '91 9999-9999'
    ];
    
    $aluno3 = [
      'nome' => 'Gigante',
      'email' => 'gigante@email.com',
      'telefone' => '91 9999-9999'
    ];
    
    $alunos = [
      $aluno1, 
      $aluno2, 
      $aluno3
    ];  
  ?>

  <h1>Tabela de Alunos</h1>
  <table class="table table-hover table-striped mt-5 mb-5 ">
    <thead class="table-dark">
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
      </tr>
    </thead>
    <?php
      foreach($alunos as $aluno) {
        echo "
        <tr>
          <td>{$aluno['nome']}</td>
          <td>{$aluno['email']}</td>
          <td>{$aluno['telefone']}</td
        </tr>
        ";
      }
    ?>
    </tbody>
  </table>
</body>
</html>