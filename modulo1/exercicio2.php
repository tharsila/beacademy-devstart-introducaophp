<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data de Nascimento</title>
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

  form {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  form select {
    margin-right: 1rem;
  }

</style>
<body>
  <h1>Data de Nascimento</h1>
  <form method='POST'>
    <select>
      <option selected>Selecione o dia</option>
      <?php
        for($dia = 1; $dia <= 31; $dia++) {
          echo "<option>{$dia}</option>";
        }
      ?>
    </select>

    <select>
      <option selected>Selecione o mês</option>
      <?php
       for($mes = 1; $mes <= 12; $mes++) {
         echo "<option>{$mes}</option>";
       }
      ?>
    </select>

    <select>
      <option selected>Selecione o ano</option>
      <?php
       for($ano = 2022; $ano >= 1910; $ano--) {
         echo "<option>{$ano}</option>";
       }
      ?>
    </select>

  </form>
</body>
</html>