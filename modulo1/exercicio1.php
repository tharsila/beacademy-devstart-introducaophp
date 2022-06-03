<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora Simples</title>
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
    flex-direction: column;
  }

  form input {
    margin-bottom: 1rem;
  }
</style>
<body>
  
<h1>Calculadora Simples</h1>

<form action="" method="POST">
  <input name="numero1" placeholder="primeiro numero">
  <input name="numero2" placeholder="Segundo numero"> 
  <div>
    <button name="somar">Somar</button>
    <button name="subtrair">subtrair</button>
    <button name="multiplicar">Multiplicar</button>
    <button name="dividir">Dividir</button>
  </div>
</form> 

<?php
  if ($_POST) {
    if (isset($_POST['somar'])) {
     echo $_POST['numero1'] + $_POST['numero2'];
    }

    if (isset($_POST['subtrair'])) {
      echo $_POST['numero1'] - $_POST['numero2'];
    }

  if (isset($_POST['multiplicar'])) {
      echo $_POST['numero1'] * $_POST['numero2'];
   }

    if (isset($_POST['dividir'])) {
      echo $_POST['numero1'] / $_POST['numero2'];
    }
  }
?>
</body>
</html>