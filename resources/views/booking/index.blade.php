
@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <td>
            <a href="{{ route('booking.create')}}" class="btn btn-primary">
                Maak booking
            </a>
        </td>
        </thead>
        <tbody>
        @foreach($boekings as $boeking)

            <tr>

                <td>{{$boeking->naam_booking}}</td>
                <td>{{$boeking->datum_booking}}</td>
                <td>{{$boeking->adres_booking}}</td>
                <td>{{$boeking->creditcard_booking}}</td>
                <td>{{$boeking->aankomst_booking}}</td>
                <td>{{$boeking->vertrek_booking}}</td>
                <td>{{$boeking->datum_booking}}</td>
                <td>{{$boeking->nummer_booking}}</td>
                <div class="foto-booking">

                </div>




                </td>
                <td>
                    <a href="{{ route('booking.edit',$boeking->id)}}" class="btn btn-primary">Wijzig</a><br>
                </td>
                <td>
                    <form action="{{ route('booking.destroy', $boeking->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Verwijder</button>
                    </form>
                </td>


            </tr>
        @endforeach
            </tbody>
    </table>



@endsection
