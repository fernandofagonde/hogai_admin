<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
  
    /**
     * @var Pessoas
     */
    private $pessoas;

    public function __construct()
    {
        
    }

    public function index()
    {        
        return view('pessoas.index');
    }

    public function create()
    {        
        return view('pessoas.create');
    }

    public function store()
    {
        return redirect()->route('pessoas.index');
    }

    public function edit()
    {
        return view('pessoas.edit');
    }

    public function update()
    {
        return redirect()->route('pessoas.index');
    }

    public function destroy()
    {
        return response()->json([
            'success' => true,
            'redirect_to' => route('pessoas.index')
        ]);
    }
}