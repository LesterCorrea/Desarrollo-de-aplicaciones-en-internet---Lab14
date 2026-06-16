@extends('layouts.main')

@section('content')

<h2>Consulta de Productos</h2>

<form action="{{ route('products.search') }}" method="POST">

    @csrf

    <select name="category">

        <option value="">[- SELECCIONE -]</option>

        @foreach($categories as $category)

        <option value="{{ $category->id }}">
            {{ $category->description }}
        </option>

        @endforeach

    </select>

    <button type="submit">Buscar</button>

</form>

<br>

<table border="1">

    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Marca</th>
            <th>Precio</th>
        </tr>
    </thead>

    <tbody>

        @foreach($products as $product)

        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->brand }}</td>
            <td>S/. {{ $product->price }}</td>
        </tr>

        @endforeach

    </tbody>

</table>

@endsection