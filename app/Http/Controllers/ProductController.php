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
        
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $products = ['Product 01','Product 02','Product 03'];
        return $products;
    }

    public function show($id)
    {
        return "Exibindo o produto por id: {$id}";
    }

    public function create($id)
    {
        return "Exibindo o formulario para cadastro do produto";
    }

    public function edit($id)
    {
        return "Exibindo para editar o produto: {$id}";
    }

    public function store()
    {
        return 'Cadastrando um novo produto';
    }

    public function update($id)
    {
        return "Editando o produto : {$id}";
    }

    public function destroy($id)
    {
        return "Deletando o produto : {$id}";
    }
}
