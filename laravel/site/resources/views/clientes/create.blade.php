<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<h3>Novo Cliente </h3>
    <form action="{{ route('cliente.store')}}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" value="Salvar">
    </form>
</body>
</html>