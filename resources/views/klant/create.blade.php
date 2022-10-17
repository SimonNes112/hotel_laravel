@extends('layouts.app')


@section('content')

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>


    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
    <script type='text/javascript'></script>

    <form method="post" enctype="multipart/form-data" action="{{ route('klant.store') }}">
        @csrf
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <div class="form-header">
                                <h1>Maak je Boeking </h1>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input class="form-control" type="text"  name="adres_booking"placeholder="Adres">
                                    <span class="form-label">Adres</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="datum_booking" required>
                                            <span class="form-label">Datum Booking</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="aankomst_booking" required>
                                            <span class="form-label">Check in</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="vertrek_booking" required>
                                            <span class="form-label">Check out</span>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">


                                                    @foreach($kamers as $kamer)
                                                        <input class="form-control" type="hidden"  value="{{$kamer->nummer_kamer}}" name="nummer_kamer" placeholder="Nummer_kamer">
                                                <?php $kamer_id =3;
                                                ?>

                                                    <input class="form-control" type="hidden"  value="{{$kamer_id}}" name="kamer_id" placeholder="Nummer_kamer">
                                                    @break;
                                                @endforeach


                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="number"  name="nummer_booking" placeholder="Nummer">
                                                <span class="form-label">Nummer</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text"  name="naam_booking" placeholder="Naam booking ">
                                                <span class="form-label">Naam</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="number"  name="creditcard_booking"placeholder="Creditcard">
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
