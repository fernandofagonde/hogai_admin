<?php

namespace App\Http\Controllers;
use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;

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
        $pessoa = new Pessoa();
        $is_edit = false;
        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.insert'),
        ]);

        return view('pessoa.create', compact('pessoa'));
    }

    public function store(PessoaRequest $request)
    {
        $pessoa = $this->pessoas->fill($request->all());
        $pessoa->save();

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.insert'),
        ]);

        return redirect()->route('pessoa.pessoa.index');
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
