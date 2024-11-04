@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorías</h1>
    <a href="{{ route('categorias.create') }}" class="btn btn-primary">Nueva Categoría</a>
    <ul>
        @foreach ($categorias as $categoria)
            <li>
                <a href="{{ route('categorias.edit', $categoria) }}">{{ $categoria->nombre }}</a>
                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
