@extends('layouts.app')

@section('content')
    <ul>
        <table class="table">
            <a href="{{ route('kamers.create')}}" class="btn btn-primary">Maak nieuwe</a>
            <thead>
            <tr>
                <td>kamer</td>
                <td>nummer</td>
                <td>foto</td>
                <td>prijs</td>
                <td>opervlakte</td>
                <td>aantal_porsonen</td>
                <td>bad</td>
                <td>minibar</td>
                <td></td>
                <td></td>
                <td>edit</td>
                <td>delete</td>


            </tr>
            </thead>
            <tbody>
            @foreach ($kamers as $kamer)
                <tr>
                    <td>{{ $kamer->naam_kamer }}</td>
                    <td>{{ $kamer->nummer_kamer }}</td>
                    <td><img src="{{asset('storage/' . $kamer->foto_kamer)}}" width="350px" height="230px"></td>
                    <td>{{ $kamer->prijs_kamer }}</td>
                    <td>{{ $kamer->oppervlakte_kamer }}</td>
                    <td>{{ $kamer->persoonen_kamer}}</td>
                    <td>{{ $kamer->bad_kamer }}</td>
                    <td>{{ $kamer->minibar_kamer }}</td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="{{ route('kamers.edit',$kamer->id)}}" class="btn btn-primary">Wijzig</a>
                    </td>
                    <td>
                        <form action="{{ route('kamers.destroy', $kamer->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Verwijder</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <br><br>
        <br><br>



@endsection
