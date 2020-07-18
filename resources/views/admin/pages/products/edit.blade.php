@extends('admin.layouts.app')

@section('title', 'Edit Product')

@section('content')
<h1>Edit Product {{$product->name}}</h1>

    <form action="{{route('products.update', $product->id)}}" method="post">
        @method('PUT')
        @include('admin.pages.products._partials.form')
    </form>    
@endsection