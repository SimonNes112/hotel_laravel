<?php

namespace App\Http\Controllers;


use App\Models\Boeking;
use Illuminate\Http\Request;
use App\Models\Kamer;
use Illuminate\View\View;

class KamerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $kamers = Kamer::all();
        return view('kamers.index', compact('kamers'));





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("kamers.create");



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            if ($request->has('image')) {
                $image = $request->file('image');
                $foto_kamer = $image->getClientOriginalName();
                $image->storeAs('public', $foto_kamer);
            }
        $kamer = new Kamer([
            'naam_kamer' => $request->naam_kamer,
            'foto_kamer' => $foto_kamer,
            'nummer_kamer' => $request->nummer_kamer,
            'oppervlakte_kamer' => $request->oppervlakte_kamer,
            'minibar_kamer' => $request->minibar_kamer,
            'persoonen_kamer' => $request->persoonen_kamer,
            'bad_kamer' => $request->bad_kamer,
            'prijs_kamer' => $request->prijs_kamer,





        ]);



        $kamer->save();
        return redirect('/kamers');

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
        $kamer = Kamer::find($id);
        return view('kamers.edit', compact('kamer'));
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
        $kamer = Kamer::where('id', '=', $id)->first();

        $kamer->update($request->all());



        return redirect('/kamers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamer= Kamer::find($id);
        $kamer->delete();
        return redirect('/kamers');


    }
    public function Kamer()
    {
        $kamers = App\Http\Controllers\KamerController::all();

        return view('kamers.index', ['kamer' => $kamers]);

    }

}
