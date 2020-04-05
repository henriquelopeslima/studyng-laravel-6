<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function store()
    {
        dd('Cadastrando');
        // return 'Cadastrando um novo produto';
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