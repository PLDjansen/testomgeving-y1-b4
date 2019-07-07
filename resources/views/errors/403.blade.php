@extends('coreui::master')
@section('body')


    <div class="container" style="margin:6%;">

        <!-- Oeps! + error code -->
        <div class="col-10">
            <h5 style="display:inline-block; font-size:70px;" class="text-primary">Oeps!</h5>
            <h6 style="display:inline-block; font-size:70px;" class="text-black-10"><i>403</i></h6>
        </div>

        <!-- Tekst en uitleg -->
        <div class="col-6">
            <h1 style="font-size:20px;" class="text-black-50" >
                Je hebt geen toegang tot deze pagina
            </h1>
        </div>

        <!-- Terug -->
        <div class="col-1">
            <a href="#" onclick="history.go(-1)">Terug</a>
        </div>

        <!-- Image -->
        <div>
            <img style="max-height: 130px; max-width: 130px; opacity: 0.1" alt="ball" src="https://cdn.pixabay.com/photo/2018/12/15/01/41/handball-3876165_960_720.png">
        </div>

    </div>



@endsection