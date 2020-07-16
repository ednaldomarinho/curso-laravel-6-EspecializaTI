@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

    <h1>Exibindo de produtos</h1>

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