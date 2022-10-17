@extends('layouts.app')



@section('content')


    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
    <script type='text/javascript'></script>
    <style> body {
            background-image: linear-gradient(to right, #7B1FA2, #E91E63)
        }</style>
    <form method="post" enctype="multipart/form-data" action="{{ route('booking.update', $boeking->id) }}">
        @csrf
        @method('PATCH')
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <div class="form-header">
                                <h1>Make your Edit</h1>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input class="form-control" type="text"  value="{{$boeking->boeking}}" name="adres_booking"placeholder="Adres">
                                    <span class="form-label">Adres</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" value="{{$boeking->boeking}}" name="datum_booking" required>
                                            <span class="form-label">Datum Booking</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date"  value="{{$boeking->boeking}}"name="aankomst_booking" required>
                                            <span class="form-label">Check in</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" value="{{$boeking->boeking}}" name="vertrek_booking" required>
                                            <span class="form-label">Check out</span>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" name="kamer_id">
                                                    <option value="">Selecteer kamer</option>
                                                    @foreach($kamers as $kamer){
                                                    <option
                                                        value="{{$kamer->id}}"
                                                        {{$kamer->id == $boeking->kamers_id ? "selected" : ""}}>
                                                        {{$kamer->nummer_kamer}}
                                                    </option>
                                                    }
                                                    @endforeach
                                                </select>
                                                <span class="select-arrow"></span>
                                                <span class="form-label">Rooms</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="number"value="{{$boeking->boeking}}"  name="nummer_booking" placeholder="Nummer">
                                                <span class="form-label">Nummer</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" value="{{$boeking->boeking}}" name="naam_booking" placeholder="Naam booking ">
                                                <span class="form-label">Naam</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="number" value="{{$boeking->boeking}}" name="creditcard_booking"placeholder="Creditcard">
                                        <span class="form-label">Creditcard</span>
                                    </div>

                                    <div class="form-btn">
                                        <input  class="submit-btn" type="submit">Book Now
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




@endsection
