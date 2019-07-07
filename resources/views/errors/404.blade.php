@extends('coreui::master')
@section('body')


<div class="container" style="margin:6%;">

    <!-- Oeps! + error code -->
    <div class="col-10">
        <h6 style="display:inline-block; font-size:70px;" class="text-black-100"><i>Sorry, deze pagina bestaat niet!</i></h6>
    </div>

    <!-- Tekst en uitleg -->
    <div class="col-10">
        <h1 style="font-size:20px;" class="text-black-50" >
            Deze pagina kan niet worden gevonden... (Error code: 404)
        </h1>
    </div>

    <!-- Terug -->
    <div class="col-10">
        <h1 style="font-size:16px;" class="text-black-50" >
            Klik hier om terug te gaan naar de vorige pagina.
        </h1>
        <button><a href="#" onclick="history.go(-1)">Terug</a></button>
    </div>
    <!-- Home -->
    <div class="col-10" style="margin-top: 10px">
        <h1 style="font-size:16px;" class="text-black-50" >
            Klik hier om terug te gaan naar de homepagina.
        </h1>
        <button><a href="{{ url("/") }}">Homepagina</a></button>
    </div>
</div>



@endsection