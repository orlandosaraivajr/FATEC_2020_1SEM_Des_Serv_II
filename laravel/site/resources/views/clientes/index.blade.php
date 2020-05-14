<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h3>Clientes </h3>
    <a href="{{route('cliente.create')}}"> Novo Cliente</a>
    
    <ol>
    @foreach ($clientes as $cliente)
        <li>
        {{ $cliente['nome'] }}
        <a href="{{route('cliente.edit',$cliente['id'])}}"> Editar</a>
        </li>
    @endforeach
    </ol>
</body>
</html>