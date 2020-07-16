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
}
