@extends('layouts.main')

@section('content')

<h2>Nuevo Producto</h2>

<form action="{{ route('products.store') }}" method="POST">

    @csrf

    <label>Nombre</label>
    <input type="text" name="name" required>
    <br><br>

    <label>Marca</label>
    <input type="text" name="brand">
    <br><br>

    <label>Precio</label>
    <input type="number" step="0.01" name="price" required>
    <br><br>

    <label>Stock</label>
    <input type="number" name="stock" required>
    <br><br>

    <label>Categoría</label>

    <select name="id">

        <option value="">[ SELECCIONE ]</option>

        @foreach($categories as $category)

        <option value="{{ $category->id }}">
            {{ $category->description }}
        </option>

        @endforeach

    </select>

    <br><br>

    <button type="submit">Guardar</button>

    <a href="{{ route('products.index') }}">
        Regresar
    </a>

</form>

@endsection