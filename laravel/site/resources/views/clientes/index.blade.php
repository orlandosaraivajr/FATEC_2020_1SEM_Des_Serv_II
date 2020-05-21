@extends('layouts.principal')

@section('conteudo')
    <h3>Clientes </h3>
    <a href="{{route('cliente.create')}}"> Novo Cliente</a>
    @if (count($clientes) > 0 )
        <ol>
        @foreach ($clientes as $cliente)
            <li>
            {{ $cliente['nome'] }}
            <a href="{{route('cliente.edit',$cliente['id'])}}"> Editar</a>
            <a href="{{route('cliente.show',$cliente['id'])}}"> Info</a>
                    <form action="{{ route('cliente.destroy', $cliente['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Apagar">
                    </form>
            </li>
        @endforeach
        </ol>
    @else
        <br>Nenhum cliente cadastrado.
    @endif

    @component('componentes.alerta', ['titulo'=>'Erro #1','tipo'=>'info']
)
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado </p>
    @endcomponent

@endsection