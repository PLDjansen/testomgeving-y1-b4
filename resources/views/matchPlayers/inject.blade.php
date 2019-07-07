@extends('coreui::master')
@section('breadcrumb')<li>Statistieken toeveogen@endsection
    @section('body')
        <h1>Statistieken toevoegen </h1>
        <div class="card">
            <div class="card-header">
                <strong>Statistieken toevoegen </strong>
            </div>
            <tbody>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-horizontal" action="{{URL::to('/matches')}}" method="post">
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