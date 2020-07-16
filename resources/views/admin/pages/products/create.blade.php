@extends('admin.layouts.app')

@section('title', 'Register New Product')

@section('content')
    <h1>Register New Product</h1>

    <form action="{{route('products.store')}}" method="post">  
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Enviar</button>
    </form>    
@endsection