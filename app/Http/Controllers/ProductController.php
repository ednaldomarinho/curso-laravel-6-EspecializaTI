<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
   protected $request;


   public function __construct(Request $request) {

       $this->request = $request;

      // $this->middleware('auth');
      // $this->middleware('auth')->only([
      //     'create', 'store'
      //  ]);

    //   $this->middleware('auth')->except([
    //       'index', 'show'
    //   ]);
   }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $teste = 123;
        $teste2 = 456;
        $teste3 = [1,2,3,4,5] ;
       //$products =[];
        $products =['TV', 'geladeira', 'fogão', 'sofá'];

       // return view('teste',['teste' => $teste ]);
       return view('admin.pages.products.index',
              compact('teste', 'teste2', 'teste3', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|image',
        ]);

        dd('OK');
        
        //dd($request->all());
        //dd($request->only(['name', 'description']));
        //dd($request->name);
        //dd($request->has('teste'));
        //dd($request->input('name', 'default'));
        //dd($request->except('_token', 'description'));

        if ($request->file('photo')->isValid()):
           //dd($request->file('photo')->store('products'));
           $nameFile = $request->name . "." . $request->photo->extension();
           dd($request->file('photo')->storeAs('products', $nameFile));
        endif;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "<h4>Teste do show com o ID: {$id}</h4>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('admin.pages.products.edit',
              compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editing the product $id...");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
