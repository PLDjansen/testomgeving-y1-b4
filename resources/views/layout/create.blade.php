@extends('coreui::master')
@section('body')
    <h1>@yield("headText")</h1>
        <div class="card">
            <div class="card-header">
                <strong>@yield("cardHeaderText")</strong>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                    <form class="form-horizontal" action="@yield("createAction")" method="post">
                    @yield("form")
                </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-succes btn-primary" type="submit">Toevoegen</button>
            </div>
        </form>
    </div>

    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">

        <a href="#" onclick="history.go(-1)"><button class="btn  btn-secondary">Terug</button></a>

    </div>

@endsection