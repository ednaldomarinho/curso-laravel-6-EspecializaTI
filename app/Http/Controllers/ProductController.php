<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
       
        //$products = Product::all();
        //$products = Product::get();
        $products = Product::paginate(10);

       // return view('teste',['teste' => $teste ]);
       return view('admin.pages.products.index',[
           'products' => $products,
       ]);
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
     * @param App\Http\Requests\StoreUpdateProductRequest #request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
        dd('Ok');
        
        // $request->validate([
        //     'name' => 'required|min:3|max:255',
        //     'description' => 'nullable|min:3|max:10000',
        //     'photo' => 'required|image',
        // ]);

        
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
