<?php

namespace App\Http\Controllers;
use App\Models\Kamer;
use App\Models\Boeking;
use Illuminate\Http\Request;

class Klant extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamers = Kamer::all();

        return view('klant.index', compact( 'kamers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamers = Kamer::all();



        return view('klant.create', compact('kamers'));


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
        return redirect('/bedankt');
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
