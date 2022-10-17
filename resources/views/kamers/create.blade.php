@extends('layouts.app')

@section('content')

    <form method="post" enctype="multipart/form-data" action="{{ route('kamers.store') }}">
        @csrf
        <label class="custom-file-label" for="upload-foto">Upload Foto</label>
        <input type="file" name="image" class="custom-file-input" id="upload-foto"><br>
        <label class="custom-file-label" for="upload-foto">Naam kamer</label><br>
        <input type="text" name="naam_kamer"  class="custom-file-input"><br>
        <label class="custom-file-label" for="upload-foto">Nummer kamer</label><br>
        <input type="number" name="nummer_kamer"  class="custom-file-input"><br>
        <label class="custom-file-label" for="upload-foto">Oppervlakte kamer</label><br>
        <input type="number" name="oppervlakte_kamer"  class="custom-file-input"><br>
        <label class="custom-file-label" for="upload-foto">minibar kamer</label><br>
        <input type="text" name="minibar_kamer"  class="custom-file-input"><br>
        <label class="custom-file-label" for="upload-foto">bad kamer</label><br>
        <input type="text" name="bad_kamer"  class="custom-file-input"><br>
        <label class="custom-file-label" for="upload-foto">prijs kamer</label><br>
        <input type="number" step=".01" name="prijs_kamer"  class="custom-file-input"><br>
        <label class="custom-file-label" for="upload-foto">persoonen</label><br>
        <input type="number" step=".01" name="persoonen_kamer"  class="custom-file-input"><br>
        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>



@endsection
