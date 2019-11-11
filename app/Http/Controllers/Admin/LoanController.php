<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Balance;
use App\Models\Loan;
use App\User;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario_id = auth()->user()->id;
        $user = User::where('id', $usuario_id)->get()->first();
        $balances = Balance::where('user_id', $usuario_id)->get();
        // $loans = Loan::where('balance_id', '2')->get();
        // dd($loans);
        foreach ($balances as $balance) {
            echo "<hr>{$user->name} - {$balance->saldo} - {$balance->descricao}";

            //     $loans = $balances->loans()->get();
            $loans = Loan::where('balance_id', $balance->id)->get();
            // dd($balances);
            foreach ($loans as $loan) {
                echo "<hr>{$loan->juros} - {$loan->data_pagamento} - {$loan->descricao}";
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
