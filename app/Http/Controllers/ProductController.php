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
   protected $repository;


   public function __construct(Request $request, Product $product) {

       $this->request = $request;
       $this->repository = $product;

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
        $products = $this->repository::paginate(10);

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
        $data = $request->only('name', 'price', 'description');

        $this->repository->create($data);

        //Product::create($data);

        return redirect()->route('products.index');
        // $product = new Product;
        // $product->name = $data['name'];
        // $product->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $product = Product::where('id', $id)->first();
        $product = $this->repository::find( $id);

        if (!$product):
            return redirect()->back();
        endif;
        
        
        return view('admin.pages.products.show',[
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->repository::find( $id);

        if (!$product):
            return redirect()->back();
        endif;
        
        
        return view('admin.pages.products.edit',[
            'product'=>$product
        ]);
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
        if (!$product = $this->repository::find( $id)):
            return redirect()->back();
        endif;

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->repository->where('id', $id)->first();

        if (!$product):
            return redirect()->back();
        endif;       
       
        $product->delete();

        return redirect()->route('products.index');
    }
}
