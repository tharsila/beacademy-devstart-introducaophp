<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de Suplementos</title>
   <!-- add bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-top: 5rem;
      font-family: sans-serif;
    }

    img {
      width: 80px;
    }
</style>
</head>
<h1>Tabela de Suplementos</h1>
<body class="container">
  <!-- nome, preco, descrição e foto (5 produtos) -->

  <?php
    $produto1 = [
      'nome' => '100% Whey',
      'preco' => 135,
      'descricao' => '100% Whey é um suplemento a base de proteína concentrada do soro do leite (Whey Protein Concentrate), matéria-prima elaborada com alta tecnologia, de elevado valor biológico, rápida digestibilidade e alta concentração de aminoácidos essenciais, que são fatores de relevância para auxiliar a síntese proteica muscular.',
      'img' => './assets/img1.png',
    ];

    $produto2 = [
      'nome' => 'Creatina',
      'preco' => 120,
      'descricao' => 'O principal papel da creatina no organismo está relacionado com a geração de energia para o corpo, pois a creatina é fundamental ao sistema ATP-CP, que é considerando um dos principais sistemas metabólicos utilizados na musculação.',
      'img' => './assets/img2.png',
    ];

    $produto3 = [
      'nome' => 'Horus Pre-Treino',
      'preco' => 148,
      'descricao' => 'Para quem se exercita com intensidade, a fadiga é um dos principais fatores que influenciam o rendimento, por isso desenvolvemos o HÓRUS : com formulação altamente tecnológica e ingredientes de altíssima qualidade, para você ter um treino com muito mais eficiência.',
      'img' => './assets/img3.png',
    ];

    $produto4 = [
      'nome' => 'Power Protein Bar',
      'preco' => 108,
      'descricao' => 'É uma barra hiperproteica, desenvolvida com blend de proteínas de alto valor biológico (Caseinato de Cálcio e Proteína Concentrada do Soro do Leite) e Colágeno Hidrolisado.',
      'img' => './assets/img4.jpg',
    ];

    $produto5 = [
      'nome' => 'Mass Titanium',
      'preco' => 100,
      'descricao' => 'Hipercalórico completo e sem lactose! MASS TITANIUM 17500 ZERO LACTOSE combina três         fontes proteicas de alta biodisponibilidade e digestibilidade e duas fontes de carboidratos.
      Sua fórmula conta ainda com vitaminas e minerais que contribuem para a metabolização dos macronutrientes.',
      'img' => './assets/img5.jpg',
    ];

    $suplementos = [$produto1, $produto2, $produto3, $produto4, $produto5];
  ?>

  <table class="table table-hover table-striped mt-5 mb-5 ">
    <thead class="bg-primary">
      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Imagem</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($suplementos as $suplemento) {
          echo "
          <tr>
            <td>{$suplemento['nome']}</td>
            <td>R$ {$suplemento['preco']}</td>
            <td style='width: 60%'>{$suplemento['descricao']}</td>
            <td><img src={$suplemento['img']}></td>
          </tr>
          ";
        }
      ?>
    </tbody>
  </table>
</body>
</html>

