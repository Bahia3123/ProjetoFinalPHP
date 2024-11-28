<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Estados</title>
  <link rel="stylesheet" href="/css/Lista.css">
</head>
<body> 
  @if(empty($estados) || count($estados) == 0)
    <h3>Nenhum cadastro encontrado</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Cidade</th>
      <th>Ações</th>
    </tr>
    @foreach ($estados as $estado)
        <tr>
          <td>{{$estado->name}}</td>
          <td>{{$estado->cidade}}</td>
          <td>
            <form method="POST" action="/deletar_estado/{{$estado->id}}" style="display:inline-block;">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete" class="btn-delete">
            </form>

          </td>
        </tr>
    @endforeach
  </table>       
  @endif
  <a href="/" class="btn-back">Voltar para a Página Inicial</a>
</body>
</html>