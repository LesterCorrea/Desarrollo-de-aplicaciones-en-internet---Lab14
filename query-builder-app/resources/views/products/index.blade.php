@extends('layouts.main')

@section('content')

<h2>Lista de Productos</h2>

<table border="1">

    <thead>
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Precio</th>
        </tr>
    </thead>

    <tbody>

        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->brand }}</td>
            <td>S/. {{ $product->price }}</td>
        </tr>
        @endforeach

    </tbody>

</table>

@endsection