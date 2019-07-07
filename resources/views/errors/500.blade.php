@extends('coreui::master')
@section('body')


    <div class="container" style="margin:6%;">

        <!-- Oeps! + error code -->
        <div class="col-10">
            <h6 style="display:inline-block; font-size:70px;" class="text-black-10"><i>Oeps, er is iets fout gegaan!</i></h6>
        </div>

        <!-- Tekst en uitleg -->
        <div class="col-10">
            <h1 style="font-size:20px;" class="text-black-50" >
                Sorry, dit werkt niet goed. Een aapje met een toetsenbord heeft een foutje gemaakt! (Error code: 500)
            </h1>
        </div>

        <!-- Oplossingen -->
        <div class="col-10">
            <h1 style="font-size:16px;" class="text-black-50" >
                Om dit op te lossen kun je:
            </h1>
            <h1 style="font-size:14px;" class="text-black-50" >
                Kun je de pagina verversen (soms helpt dit)
                <br>
                Opnieuw proberen over een paar minuten
                <br>
                Een email sturen naar een aapje dat wel goed kan coderen via jans@0251.nl
            </h1>
        </div>

        <div class="col-10" style="margin-top: 10px">
            <h1 style="font-size:16px;" class="text-black-50" >
                Om terug te gaan naar de homepagina, klik <a href="{{ url("/") }}">hier</a>
            </h1>
        </div>

    </div>



@stop
