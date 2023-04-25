<?php

namespace App\Http\Controllers;

use App\Models\Regiao;
use Illuminate\Http\Request;

class RegiaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $regioes = Regiao::get();

        return view('regiao.listar', compact('regioes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regiao.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Regiao::create([
            'nome'      => $request['nome'],
            'detalhes'  => $request['detalhes'],
        ]);

        return redirect()->route('regiao-create')->with('createRegiao', 'Região cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar(Regiao $regiao)
    {
        return view('regiao.editar', compact('regiao'));
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
        $regiao = Regiao::findOrFail($id);
        $regiao->nome       = $request->nome;
        $regiao->detalhes   = $request->detalhes;
        $regiao->save();

        return redirect()->route('regiao-list')->with('updateRegiao', 'Região atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $regiao = Regiao::findOrFail($id);
        $regiao->delete();

        return redirect()->route('regiao-list')->with('sucess', 'Ok');
    }
}
