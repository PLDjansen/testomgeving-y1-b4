@extends('layout.edit')
@section('breadcrumb')<li>Wedstrijden</li> @endsection
@section('cardHeader')Wedstrijd {{$matches->name}}@endsection
@section('editAction'){{ URL::to("/matches/$matches->id") }}@endsection
@section('formBody')

    {{ method_field('PATCH') }}
    @csrf

    <div class="form-group row">
        <label class="col-md-3 col-form-label">Naam</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="NaamInput" value="{{$matches->name}}" required>
        </div>

        <label class="col-md-3 col-form-label">Thuisploeg</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="ThuisInput" value="{{$matches->name_home}}" required>
        </div>

        <label class="col-md-3 col-form-label">Uitploeg</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="UitInput" value="{{$matches->name_away}}" required>
        </div>

        <label class="col-md-3 col-form-label">Datum</label>
        <div class="col-md-9">
            {{--            <input type="datetime-local" class="form-control" id="DatumInput" name="DatumInput"
                   value="{{$matches->datetime}}" required>--}}
            <input type="datetime" class="form-control" name="DatumInput" value="{{$matches->datetime}}" required>
        </div>

        <label class="col-md-3 col-form-label">Seizoen</label>
        <div class="col-md-9">
            {{--<input type="date" class="form-control" name="DatumInput" value="{{ date('d-m-Y', strtotime($matches->date)) }}">--}}
            <input type="text" class="form-control" name="SeizoenInput" value="{{$matches->seasons_id}}" required>
        </div>

        <label class="col-md-3 col-form-label">Resultaat Thuisploeg</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="ResultTeamInput" value="{{$matches->result_team}}">
        </div>

        <label class="col-md-3 col-form-label">Resultaat Uitploeg</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="ResultOpponentInput" value="{{$matches->result_opponent}}" >
        </div>

        <label class="col-md-3 col-form-label">Thuis Gescoord</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="ThuisGescoordInput" value="{{$matches->homescored}}">
        </div>

        <label class="col-md-3 col-form-label">Thuis Schoten</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="ThuisSchotenInput" value="{{$matches->homeshots}}">
        </div>

        <label class="col-md-3 col-form-label">Thuis Verdedigende Rebounds</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="ThuisVerdedigendeReboundsInput" value="{{$matches->homedrebounds}}">
        </div>

        <label class="col-md-3 col-form-label">Thuis Aanvallende Rebounds</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="ThuisAanvallendeReboundsInput" value="{{$matches->homearebounds}}">
        </div>


        <label class="col-md-3 col-form-label">Thuis Strafworpen</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="ThuisStrafworpenInput" value="{{$matches->homefshots}}">
        </div>

        <label class="col-md-3 col-form-label">Thuis Strafworpen Gescoord</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="ThuisStrafworpenGescoordInput" value="{{$matches->homefshotsscored}}">
        </div>

        <label class="col-md-3 col-form-label">Uit Gescoord</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="UitGescoordInput" value="{{$matches->awayscored}}">
        </div>

        <label class="col-md-3 col-form-label">Uit Schoten</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="UitSchotenInput" value="{{$matches->awayshots}}">
        </div>

        <label class="col-md-3 col-form-label">Uit Verdedigende Rebounds</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="UitVerdedigendeReboundsInput" value="{{$matches->awaydrebounds}}">
        </div>

        <label class="col-md-3 col-form-label">Uit Aanvallende Rebounds</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="UitAanvallendeReboundsInput" value="{{$matches->awayarebounds}}">
        </div>


        <label class="col-md-3 col-form-label">Uit Strafworpen</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="UitStrafworpenInput" value="{{$matches->awayfshots}}">
        </div>

        <label class="col-md-3 col-form-label">Uit Strafworpen Gescoord</label>
        <div class="col-md-9">
            <input type="number" class="form-control" name="UitStrafworpenGescoordInput" value="{{$matches->awayfshotsscored}}">
        </div>







    </div>
@endsection
@section('deleteName'){{$matches->name}}@endsection
@section('deleteAction'){{ url("/matches/$matches->id") }}@endsection
@section('backUrl'){{ url("/matches/$matches->id") }}@endsection