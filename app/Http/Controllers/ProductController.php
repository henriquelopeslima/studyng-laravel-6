<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;

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
        $teste = 123;
        $teste2 = 321;
        $teste3 = [1,2,3,4,5];
        $products = ['uva','canela','coelho','mac','BK'];

        return view('admin.pages.products.index',compact('teste','teste2','teste3','products'));
    }

    public function show($id)
    {
        return "Exibindo o produto por id: {$id}";
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
        dd('ok');
        // dd($request->all());
        // dd($request->only('name','description'));
        // dd($request->name);
        // dd($request->input('teste','default'));
        // dd($request->except('_token','name'));
        
        // $request->validate([
        //     'name' => 'required|min:3|max:255',
        //     'description' => 'nullable|min:3|max:10000',
        //     'photo' => 'required|image'
        // ]);
        
        if($request->file('photo')->isValid()){
            // dd($request->file('photo')->store('products'));
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