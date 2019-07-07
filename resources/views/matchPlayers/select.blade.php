@extends('coreui::master')
@section('breadcrumb')<li>Spelersselectie @endsection
@section('body')
    <h1>Spelersselectie </h1>
    <div class="card">
        <div class="card-header">
            <strong>Selecteer Spelers  </strong>
        </div>
        <tbody>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-horizontal" action="{{URL::to('/matchPlayers/inject')}}" method="post">
                        @foreach($players as $row)
                            <div  style="font-size:15px;" class="col-md-9 col-form-label">
                                <tr>
                                    <td class="çol-8"><div class="form-check checkbox">
                                            <input class="form-check-input" id="check2" type="checkbox" value="">
                                            <label class="form-check-label" for="check1">{{$row->name}}</label>
                                        </div>
                                    </td>
                                </tr>
                            </div>
                         @endforeach
                    </tbody>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-succes btn-primary" type="submit">Toevoegen</button>
        </div>
        </form>
@endsection