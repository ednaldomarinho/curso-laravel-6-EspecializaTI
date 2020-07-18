@extends('admin.layouts.app')

{{-- directive section  --}} 
@section('title', 'Gestão de Produtos')

@section('content')

    <h1>Showing Products...</h1>

    <a href="{{route('products.create')}}">Register</a>

    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>            
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><a href="">Detalhes</a></td>
            </tr>
        
            @endforeach
        </tbody>
    </table>

    {!!$products->links()!!}
   
@endsection