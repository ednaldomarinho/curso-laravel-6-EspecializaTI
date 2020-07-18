@extends('admin.layouts.app')

@section('title', 'Register New Product')

@section('content')
    <h1>Register New Product</h1>    
    

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" class="form">  
        @include('admin.pages.products._partials.form')
    </form>    
@endsection