<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        // $this->middleware('auth')->only([
        //     'create','store'
        // ]);

        // $this->middleware('auth');

        // $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $products = Product::latest()->paginate();

        return view('admin.pages.products.index',[
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect()->back();
        }
        return view('admin.pages.products.show',
            ['product' => $product]);
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    public function store(StoreUpdateProductRequest $request)
    {
        if($request->file('photo')->isValid()){
            $nameFile = $request->name . '.' . $request->photo->extension();
            dd($request->file('photo')->storeAs('products',$nameFile));
        }
    }

    public function update(Request $request,$id)
    {
        dd("Editando o produto {$id}");
    }

    public function destroy($id)
    {
        return "Deletando o produto : {$id}";
    }
}
