
@extends('layouts.app')



@section('content')

    <form method="post" action="{{ route('kamers.update', $kamer->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Greeting</label>

            <label class="custom-file-label" for="upload-foto" value="{{$kamer->kamer}}">Upload Foto</label>
            <input type="file" name="image" class="custom-file-input" value="{{$kamer->kamer}}" id="upload-foto"><br>
            <label class="custom-file-label" for="upload-foto" value="{{$kamer->kamer}}">Naam kamer</label><br>
            <input type="text" name="naam_kamer"  class="custom-file-input" value="{{$kamer->naam_kamer}}"><br>
            <label class="custom-file-label" for="upload-foto" value="{{$kamer->kamer}}">Nummer kamer</label><br>
            <input type="number" name="nummer_kamer"  class="custom-file-input" value="{{$kamer->nummer_kamer}}"><br>
            <label class="custom-file-label" for="upload-foto" value="{{$kamer->kamer}}">Oppervlakte kamer</label><br>
            <input type="number" name="oppervlakte_kamer"  class="custom-file-input" value="{{$kamer->oppervalkte_kamer}}"><br>
            <label class="custom-file-label" for="upload-foto" value="{{$kamer->kamer}}">minibar kamer</label><br>
            <input type="text" name="minibar_kamer"  class="custom-file-input" value="{{$kamer->minibar_kamer}}"><br>
            <label class="custom-file-label" for="upload-foto" value="{{$kamer->kamer}}">bad kamer</label><br>
            <input type="text" name="bad_kamer"  class="custom-file-input" value="{{$kamer->bad_kamer}}"><br>
            <label class="custom-file-label" for="upload-foto" value="{{$kamer->kamer}}">prijs kamer</label><br>
            <input type="number" step=".01" name="prijs_kamer"  class="custom-file-input" value="{{$kamer->prijs_kamer}}"><br>
            <label class="custom-file-label" for="upload-foto" value="{{$kamer->kamer}}">persoonen</label><br>
            <input type="number" step=".01" name="persoonen_kamer"  class="custom-file-input" value="{{$kamer->persoonen_kamer}}"><br>
        </div>
        <button type="submit" class="btn btn-primary">Wijzigen</button>
    </form>
@endsection
