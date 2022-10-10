<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
  
    /**
     * @var Pessoa
     */
    private $pessoa;

    public function __construct()
    {
        
    }

    public function index()
    {        
        return view('pessoa.index');
    }

    public function create()
    {        
        return view('pessoa.create');
    }

    public function store()
    {
        return redirect()->route('pessoa.index');
    }

    public function edit()
    {
        return view('pessoa.edit');
    }

    public function update()
    {
        return redirect()->route('pessoa.index');
    }

    public function destroy()
    {
        return response()->json([
            'success' => true,
            'redirect_to' => route('pessoa.index')
        ]);
    }
}