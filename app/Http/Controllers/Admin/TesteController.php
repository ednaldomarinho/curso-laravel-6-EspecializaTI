<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function dashboard()
    {
        return "<h1>TesteController Dashboard</h1>";
    }

    public function financeiro()
    {
        return "<h1>TesteController Financeiro</h1>";
    }

    public function produtos()
    {
        return "<h1>TesteController Produtos</h1>";
    }

}
