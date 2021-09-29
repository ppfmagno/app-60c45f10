<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movimentacao::all(['sku', 'quantidade', 'movimentacaos.created_at AS data_hora']);
    }
}
