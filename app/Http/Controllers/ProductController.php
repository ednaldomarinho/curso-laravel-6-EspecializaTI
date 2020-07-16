<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {        
        $products = ['Product01', 'Product02', 'Product03'];   
        return $products;
    }

    public function show($id)
    {        
        return "<h3>Exibindo o produto de ID: {$id}</h3>";
    }

    public function create()
    {        
        return "<h3>Exibindo o form de cadastro de um produto</h3>";
    }

    public function edit($id)
    {        
        return "<h3>Exibindo o form de edição do produto de ID: {$id}</h3>";
    }

    public function store()
    {        
        return "<h3>Cadastrando novo produto</h3>";
    }

    public function update($id)
    {        
        return "<h3>Editando o produto de ID: {$id}</h3>";
    }

    public function delete($id)
    {        
        return "<h3>Deletando o produto de ID: {$id}</h3>";
    }
}