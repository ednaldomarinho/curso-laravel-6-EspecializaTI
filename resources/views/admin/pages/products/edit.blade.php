@extends('admin.layouts.app')

@section('title', 'Edit Product')

@section('content')
<h1>Edit Product {{$id}}</h1>

    <form action="{{route('products.update', $id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Send</button>
    </form>    
@endsection