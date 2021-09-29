<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use App\Models\Produto;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movimentacao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'quantidade' => 'integer'
        ]);

        $produto = Produto::where('sku', $request->input('sku'))->first();

        $quantidadeMovimentacao = $request->input('quantidade');
        $quantidadeNova = $produto->quantidade + $quantidadeMovimentacao;

        if ($quantidadeNova >= 0) {
            $produto->quantidade = $quantidadeNova;
            $produto->save();

            return Movimentacao::created($request->all());
        }

        return response()->json([
            'error' => 'A quantidade a ser movimentada precisa deixar a quantidade final de produtos positiva'
        ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Movimentacao::find($id);
    }
}
