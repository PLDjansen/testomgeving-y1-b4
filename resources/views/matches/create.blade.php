@extends('layout.create')
@section('breadcrumb')<li>Wedstrijden / Wedstrijd toevoegen @endsection
@section('headText')Wedstrijd toevoegen @endsection
@section('cardHeaderText')Nieuw wedstrijd @endsection
@section('createAction'){{ url("/matches") }}@endsection
@section('form')

    @csrf

    <div class="form-group row">
        <div class="col-md-9">
            <label for="NaamInput">Naam</label>
            <input type="text" class="form-control" id="NaamInput" name="NaamInput"
                   placeholder="Wedstrijd" required>
        </div>
    </div>
        <div class="form-group row">
            <div class="col-md-9">
                <label for="ThuisInput">Thuisploeg</label>
                <input type="text" class="form-control" id="ThuisInput" name="ThuisInput"
                       placeholder="Thuis" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-9">
                <label for="UitInput">Uitploeg</label>
                <input type="text" class="form-control" id="UitInput" name="UitInput"
                       placeholder="Uit" required>
            </div>
        </div>



    <div class="form-group row">
        <div class="col-md-9">
            <label for="DatumInput">Datum</label>
            <input type="datetime-local" class="form-control" id="DatumInput" name="DatumInput"
                   value="2019-01-01T12:00" required>
        </div>
    </div>
        <div class="form-group row">
            <div class="col-md-9">
                <label for="SeizoenInput">Seizoen</label>
                <select type="dropdown" class="form-control" id="SeizoenInput" name="SeizoenInput" required>
                    @foreach($seasons as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

@endsection
@section('backUrl'){{ url("/matches/") }}@endsection
