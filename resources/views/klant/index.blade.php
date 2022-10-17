@extends('layouts.app')

@section('content')


        @foreach($kamers as $kamer)
            <div class="booking">
                <td>
                    <h1 class="h1-groote">{{$kamer->naam_kamer}}<br></h1>
                <td><img class="foto-booking" src="{{asset('storage/' . $kamer->foto_kamer)}}" width="350px" height="230px"></td><br>
                    <p>De oppervlakte van de kamer: {{$kamer->oppervlakte_kamer}} M<br></p>
                    <p>Minibar: {{$kamer->minibar_kamer}}<br></p>
                    <p>Persoonen: {{$kamer->persoonen_kamer}}<br></p>

                    <p>Badkamer :{{$kamer->bad_kamer}}<br></p>
                    <p>Prijs: {{$kamer->prijs_kamer}}<br></p>


                <td>
                    <a href="{{ route('create', $kamer->id)}}" class="btn btn-primary">
                        Maak booking
                    </a><br><br>
                </td>
                </td>
            </div>
        @endforeach


@endsection
