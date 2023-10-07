<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/lista.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lista de Pessoas</title>
</head>
<body>
    <div class="list">
    <caption>
        <legend>Tabela de Pessoas</legend>
    </caption>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Data de Nascimento</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php if(is_array($dados)):?>
    <?php foreach($dados as $item):?>
    <tr>
      <th scope="row"><?= $item->id?></th>
      <td><?=$item->nome?></td>
      <td><?=$item->cpf?></td>
      <td><?=$item->data_nascimento?></td>
      <td><button type="button" class="btn btn-danger"><a style="color:white;" href="lista/delete?id=<?=$item->id?>">Apagar</a></button></td>
      <td><button type="button" class="btn btn-primary"><a style="color:white;" href="form/cadastro?id=<?=$item->id?>">Editar</a></button></td>
    </tr>
    <?php endforeach;?>
    <?php else:?>
      <tr>
        <th colspan="5"><?= $dados?></th>
      </tr>
    <?php endif;?>
  </tbody>
</table>
    </div>

    <div class="nav">
      <ul>
        <li><a href="/Crud-Mvc">Home</a></li>
      </ul>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>