@extends('admin.layouts.app')

{{-- directive section  --}} 
@section('title', 'Gestão de Produtos')

@section('content')

    <h1>Showing Products...</h1>

    <a href="{{route('products.create')}}" class="btn btn-primary">Register</a>

    <form action="{{route('products.search')}}" method="post" class="form form-inline">
        @csrf
        <input type="text" name="filter" placeholder="filter" class="form-control">
        <button type="submit" class="btn btn-info">Search</button>
    </form>

    <hr>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th width="100">Actions</th>
            </tr>            
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
            <td>
                <a href="{{route('products.edit', $product->id)}}">Edit</a>
                <a href="{{route('products.show', $product->id)}}">Details</a>
            </td>
            </tr>
        
            @endforeach
        </tbody>
    </table>

    @if (isset($filters))
        {!! $products->appends($filters)->links() !!}        
    @else
        {!!$products->links()!!}        
    @endif
   
    

   
@endsection