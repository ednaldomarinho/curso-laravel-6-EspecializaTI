@extends('admin.layouts.app')

{{-- directive section  --}} 
@section('title', 'Product Details')

@section('content')
    <h1>Produto {{$product->name}}</h1>
    

    <ul>
        <li><strong>Name: </strong>{{$product->name}}</li>
        <li><strong>Price: </strong>{{$product->price}}</li>
        <li><strong>Description: </strong>{{$product->description}}</li>
    </ul>

<form action="{{{route('products.destroy', $product->id)}}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
</form>
     
@endsection