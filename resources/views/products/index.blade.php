@extends('layouts.app')

@section('content')
    <nav>
        <ul>
            <li><a href="{{ route('categories.index') }}">Categorías</a></li>
            <li><a href="{{ route('products.index') }}">Productos</a></li>
        </ul>
    </nav>
    <h1>Productos</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre del producto" required>
        <input type="number" name="price" placeholder="Precio" required>
        <select name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Agregar</button>
    </form>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->name }} - {{ $product->price }} - {{ $product->category->name }}
                <form method="POST" action="{{ route('products.destroy', $product) }}">
                    @csrf @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
    
@endsection