<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cidade</title>
    <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
<form class="cadastro" action="/criar_cidade" method="post">
        @csrf
        <label for="name">Nome da Cidade</label>
        <input type="text" name="name">

        <label for="ddd">DDD</label>
        <input type="text" name="ddd">

        <input type="submit" value="Salvar">

        <a href="/" class="btn-back">Voltar para a Página Inicial</a>

    </form>
</body>
</html>