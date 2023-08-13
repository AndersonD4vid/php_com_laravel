<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
            'nome' => 'Joao ',
            'status' => 'N',
            'cnpj' => '00.000.000/000-00'
            ],
            1 => [
                'nome' => 'Lucas ',
                'status' => 'S'
                ]
        ];
       return view('app.fornecedor.index', compact('fornecedores'));

    }
}
