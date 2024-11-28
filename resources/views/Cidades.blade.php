<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de cidades</title>
  <link rel="stylesheet" href="/css/Lista.css">
</head>
<body> 
  @if(empty($cidades) || count($cidades) == 0)
    <h3>Nenhum cadastro encontrado.</h3>      
  @else
  <table>
    <tr>
      <th>Nome</th>
      <th>DDD</th>
      <th>Ações</th>
    </tr>
    @foreach ($cidades as $cidade)
        <tr>
          <td>{{$cidade->name}}</td>
          <td>{{$cidade->ddd}}</td>
          <td>
            <form method="POST" action="/deletar_cidade/{{$cidade->id}}" style="display:inline-block;">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="Excluir" class="btn-delete">
            </form>

          </td>
        </tr>
    @endforeach
  </table>       
  @endif
  <a href="/" class="btn-back">Voltar para a Página Inicial</a>
</body>
</html>