@extends('layouts.app')

@section('content')

    <nav>
        <ul>
            <li><a href="{{ route('categories.index') }}">Categorías</a></li>
            <li><a href="{{ route('products.index') }}">Productos</a></li>
        </ul>
    </nav>
    <h1>Categorías</h1>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre de la categoría" required>
        <button type="submit">Agregar</button>
    </form>
    <ul>
        @foreach ($categories as $category)
            <li>
                {{ $category->name }}
                <form method="POST" action="{{ route('categories.destroy', $category) }}">
                    @csrf @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection