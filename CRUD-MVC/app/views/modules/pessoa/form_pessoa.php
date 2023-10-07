<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/form.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>

    <div class="content">
        <fieldset>
            <legend>Cadastro de Pessoa</legend>

            <form method="POST" action="cadastro/save">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome" value="<?= $dados->nome?>">
                    <input type="hidden" id='ed' name='ed' value="<?php if(isset($_GET['id']) && !empty($_GET['id'])){echo $_GET['id'];}?>">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="" class="form-control" id="cpf" name='cpf' value="<?= $dados->cpf?>">
                </div>
                <div class="mb-3 form-date">
                    <label class="form-label" for="data_nascimento">Data de nascimento</label>
                    <input type="date" class="date-input" id="data_nascimento" name="data_nascimento" value="<?= $dados->data_nascimento?>">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </fieldset>
    </div>
    
    <div class="nav">
      <ul>
        <li><a href="/Crud-Mvc">Home</a></li>
      </ul>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>