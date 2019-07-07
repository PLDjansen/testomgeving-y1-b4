@extends('layout.show')
@section('breadcrumb')<li>Seizoenen</li> @endsection
@section('table')
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Naam</th>
                    <th>Periode</th>
                    <th>Datum van aanmaken</th>
                    <th>Laatst aangepast</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$seasons -> id}}</td>
                    <td>{{$seasons -> name}}</td>
                    <td>{{$seasons -> year}}</td>
                    <td>{{$seasons -> created_at}}</td>
                    <td>{{$seasons -> updated_at}}</td>
                </tr>
                </tbody>
                @endsection
@section("ranking")
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i>Poulestand
        </div>
        <div class="card-body">
            <table class="table table-responsive-sm table-striped">
                <thead>
                <tr>
                </tr>
                </thead>
                <tbody>
                <div
                        data-article="poulestand"
                        data-param-poulecode="69141"
                        data-param-gebruiklokaleteamgegevens="NEE"
                        data-fields="positie,teamnaam,gespeeldewedstrijden,gewonnen,gelijk,verloren,doelpuntenvoor,doelpuntentegen,doelsaldo,verliespunten,punten"
                ></div>
                </tbody>
            </table>
        </div>
    </div>
    <div id="small-left-spacer">
    </div>
        @endsection
@section("editUrl"){{ URL::to('seasons/' . $seasons->id . '/edit') }}@endsection
@section("deleteAction"){{ url("/seasons/$seasons->id") }}@endsection
@section("backUrl"){{ url("/seasons/") }}@endsection
