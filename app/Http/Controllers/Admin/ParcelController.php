<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Balance;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recupera o id do usuário atual
        $usuario_id = auth()->user()->id;
        //recupera as contas de empréstimo do usuário
        $balances = Balance::where('user_id', $usuario_id)->get();

        foreach ($balances as $balance) {
            echo "<b>{$balance->id} - {$balance->saldo} - {$balance->descricao}</b>";
            $loans = $balances->loans()->get();
            dd($loans);
            // foreach ($loans as $loan) {
            //     echo "<hr>{$loan->juros} - {$loan->data_pagamento} - {$loan->descricao}";
                // $parcels = $loans->parcels()->get();

            //     foreach ($parcels as $parcel) {
            //         echo "<hr>{$parcel->descricao} - {$parcel->valor} - {$parcel->qtd_parcela}";

            //         echo "<hr>";
            //     }
            // }
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
