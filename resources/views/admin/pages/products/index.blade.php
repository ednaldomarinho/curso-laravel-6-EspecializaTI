@extends('admin.layouts.app')

{{-- directive section  --}} 
@section('title', 'Gestão de Produtos')

@section('content')

    <h1>Showing Products...</h1>

    <a href="{{route('products.create')}}">Cadastrar</a>

    <hr>

    {{-- directive include  --}} 
    @component('admin.components.card')
    {{-- directive slot  --}} 
        @slot('title')
            <h2>Card Title</h2>
        @endslot
        A example card
    @endcomponent

    <hr>

    {{-- directive include  --}} 
        @include('admin.includes.alerts', ['content'=> 'Products Price Alert'])

    <hr>

    {{-- directive foreach  --}}   
    @if (isset($teste3))
        @foreach ($products as $product)        
           <p class="@if ($loop->last) last @endif"><strong>{{$product}}</strong></p>         
        @endforeach        
    @endif


    <hr>
    
    {{-- directive forelse  --}} 
    @forelse ($products as $product)
        <p class="@if ($loop->first) last @endif"><strong>{{$product}}</strong></p>   
    @empty
        <p>Não existem produtos cadastrados</p>        
    @endforelse

    <hr>

    {{-- directive @if/@elseif/@else --}}    

    @if ($teste === 123)
        {!!$teste !!}       
    @elseif($teste == 123)
        String {!!$teste !!}   
    @else
        Is different!        
    @endif


    {{-- directive @unless --}}
    @unless ($teste === '123')
        Is equal!
    @else
        Is different!        
    @endunless


    {{-- directive @isset --}}
    @isset($teste2)
       <p> {!!$teste2!!} </p>
    @else
        {!!$teste!!} 
    @endisset


    {{-- directive @empty --}}
    @empty($teste3)
        <p>Empty Variavel</p>
    @else
        <p>{!!$teste3['0']!!} </p>
    @endempty


    {{-- directive @auth --}}
    @auth
        <p>Authenticated</p>

    @else
        <p>Not Authenticated</p>
    @endauth


    {{-- directive @guest --}}
    @guest
    <p>Guest</p>
    @endguest


    {{-- directive @switch --}}
    @switch($teste)
        @case(1) Is 1 @break
        @case(2) Is 2 @break
        @case(3) Is 3 @break
        @case(123) Is 123 @break
        @default Is Other    
    @endswitch
   
@endsection

{{-- directive @push --}}
@push('styles')
    <style>
        .last {background: #CCC;}
    </style>    
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#efefef'
    </script>    
@endpush
