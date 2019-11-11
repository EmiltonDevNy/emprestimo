<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Balance;
use App\User;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recupera o id do usuario logado
        $usuario_id = auth()->user()->id;
        //consulta no banco de dados o registro do usuario
        $user = User::where('id', $usuario_id)->get()->first();
        //consulta a conta de empréstimo do usuário
        $balances = Balance::where('user_id', $usuario_id)->with('loans')->get();
        //listas 1 ou mais contas de empréstimo
        foreach ($balances as $balance) {
            echo "<hr>{$user->name} - {$balance->saldo} - {$balance->descricao}";
            //lista um ou mais empréstimos
            $loans = $balance->loans;
            foreach ($loans as $loan) {
                echo "<hr>{$balance->id} - {$loan->data_pagamento} - {$loan->descricao}";
                //lista uma ou mais parcelas do empréstimo em questão
                $parcels = $loan->parcels()->get();
                foreach ($parcels as $parcel) {
                    echo "<hr>{$loan->id} - {$parcel->qtd_parcela} - {$parcel->descricao}";
                }
            }
            echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
