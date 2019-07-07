@extends('coreui::master')
@section('body')
    <div class="card">
        <div class="card-header">
        Spelers
        </div>
        <div class="card-body">
            <table class="table table-responsive-sm">
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Team</th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $row)
                    <tr>
                        <td class="çol-8"><a href={{URL::to("/players/$row->id")}}>{{$row -> name}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="card-footer">
        <a href="{{ url("/players/show") }}"><button href="">individuele spelers</button></a>
        </div>
    </div>


@endsection