@extends('layouts.principal')

@section('conteudo')

    <h3>Editar Cliente </h3>

    <form action="{{ route('cliente.update', $cliente['id'])}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{ $cliente['nome']}}">
        <input type="submit" value="Salvar">
    </form>
    @component('componentes.alerta', ['titulo'=>'Vai dar ruim','tipo'=>'error']
)
        <p><strong>Cuidado ao editar</strong></p>
        <p>VAI dar erro !</p>
    @endcomponent
@endsection