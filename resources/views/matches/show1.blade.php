@extends('layout.show')
@section('breadcrumb')<li>Wedstrijden</li> @endsection
{{--@section('cardHeaderText'){{$matches->name}} @endsection--}}
@section('table')

    <thead>
    <tr>
        <th style="width: 5%">Id</th>
        <th>Naam</th>
        <th>Datum</th>
        <th>Aangemaakt op</th>
        <th>Bewerkt op</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        {{--<td>{{$matches->id}}</td>--}}
        {{--<td>{{$matches->name}}</td>--}}
        {{--<td>{{ date('d-m-Y', strtotime($matches->date)) }}</td>--}}
        {{--<td>{{ date('d-m-Y H:i:s', strtotime($matches->created_at)) }}</td>--}}
        {{--<td>{{ date('d-m-Y H:i:s', strtotime($matches->updated_at)) }}</td>--}}
    </tr>
    </tbody>
@endsection
{{--@section('editUrl'){{ URL::to('matches/' . $matches->id . '/edit') }}@endsection--}}
@section('backUrl'){{ url("/matches") }}@endsection