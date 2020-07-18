@extends('admin.layouts.app')

@section('title', 'Register New Product')

@section('content')
    <h1>Register New Product</h1>    

    @include('admin.includes.alerts')

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" class="form">  
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Description" value="{{old('description')}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Price" value="{{old('price')}}">
        </div>
        <div class="form-group">
            <input type="file"class="form-control"  name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Send</button>
        </div>
    </form>    
@endsection