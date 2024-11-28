<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Matéria</title>
    <link rel="stylesheet" href="/css/Cadastro.css">
</head>
<body>
<form class="cadastro" action="/criar_estado" method="post">
        @csrf
        <label for="name">Nome Do Estado</label>
        <input type="text" name="name" required>

        <label for="cidade">Cidade</label>
        <select name="cidade" id="cidade" required>
            <option value="">Selecione uma cidade</option>
            @foreach($cidades as $cidade)
                <option value="{{ $cidade->id }}">{{ $cidade->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Salvar">

        <a href="/" class="btn-back">Voltar para a Página Inicial</a>

    </form>
</body>
</html>
