<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use stdClass;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $alunos = Aluno::all();

        return view('/aluno/list', ["alunos" => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aluno.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome'=>'required|max:100',
            'cpf'=>'required|max:14'
        ],[
            'nome.required'=>"O :attribute é obrigatório",
            'nome.max'=>"Só é permitido 100 caracteres no :attribute !",
            'cpf.required'=>"O :attribute é obrigatório",
            'cpf.max'=>"Só é permitido 14 caracteres no :attribute !"
        ]);

         $dados= ['nome'=>$request->nome,
         'data_nascimento'=>$request->data_nascimento,
        'cpf'=>$request->cpf,
        'email'=>$request->email,
         'telefone'=>$request->telefone];
        Aluno::create($dados);
        return redirect('aluno') -> with('success', 'cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        //
    }
}
