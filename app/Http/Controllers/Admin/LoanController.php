<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Balance;
use App\User;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->get()->first();
        $balances = Balance::where('user_id', $user->id)->with('loans')->get();

        // dd($loans);
        // dd($balances);

        // foreach ($balances as $balance) {
        //     echo "<hr>{$user->name} <-> {$balance->amount} <-> {$balance->description}";
        //         $loans = $balance->loans;
        //     foreach ($loans as $loan) {
        //         echo "<hr>{$loan->interest} <-> {$loan->date_payment} <-> {$loan->name}";
        //         foreach ($loan->parcels as $parcel) {
        //             echo "<hr>{$parcel->name} <-> {$parcel->description} <-> {$parcel->amount}";
        //         }
        //     }
        //     echo "<hr>";
        // }



        return view('admin.loan.index', compact('balances','user'));
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
