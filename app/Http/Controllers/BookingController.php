<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boeking;
use App\Models\Kamer;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamers = Kamer::all();
        $boekings = Boeking::all();
        return view('booking.index', compact('boekings', 'kamers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamers = Kamer::all();



        return view('booking.create', compact('kamers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boeking = new Boeking([
            'datum_booking' => $request->datum_booking,
            'naam_booking' => $request->naam_booking,
            'adres_booking' => $request->adres_booking,
            'creditcard_booking' => $request->creditcard_booking,
            'aankomst_booking' => $request->aankomst_booking,
            'vertrek_booking' => $request->vertrek_booking,
            'nummer_booking' => $request->nummer_booking,
            'prijs_kamer' => $request->prijs_kamer,
            'kamer_id' => $request->kamer_id,





        ]);



        $boeking->save();
        return redirect('/booking');
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
        $kamers = Kamer::all();
        $boeking = Boeking::find($id);
        return view('booking.edit', compact('boeking', 'kamers'));


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
        $boeking = Boeking::where('id', '=', $id)->first();

        $boeking->update($request->all());



        return redirect('/booking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boeking= Boeking::find($id);
        $boeking->delete();
        return redirect('/booking');
    }
}
