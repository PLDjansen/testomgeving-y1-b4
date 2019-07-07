@extends('coreui::master')
@section('body')
 
    <div class="row">
        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0 ">
            <a href="@yield("createUrl")"><button class="btn btn-secondary">@yield("createText")</button></a>
        </div>
    </div><br>



    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i>@yield("cardHeaderText")</div>
        <div class="card-body">
            <table class="table table-responsive-sm">
                @yield("table")
            </table>
        </div>
    </div>


    <div class="row">

        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0 align-items-left">
            <a href="{{ url("/") }}"><button class="btn btn-secondary" type="button">Terug</button></a>
        </div>

    </div>
@endsection