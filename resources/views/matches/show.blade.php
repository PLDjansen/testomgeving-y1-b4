@extends('layout.show')
@section('breadcrumb')
    <li>Wedstrijden</li> @endsection
{{--@section('cardHeaderText'){{$matches->name}} @endsection--}}
@section('body')







    <div class="card">
        <h1 align="center">{{$matches['name']}}</h1>
        <h4 align="center">
            <?php
            //verander de 'taal' van php
            //standaard use php english but if your want you can edit it to any other language. More info can be found at http://www.php.net
            setlocale(LC_TIME, 'NL_nl');
            echo strftime('%A %e %B %Y om %H.%M', strtotime($matches->datetime));
            ?>
        </h4>


    </div>
    {{--WHERE theDate >= NOW()--}}



    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-table"></i>Statistieken
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th>{{$matches['home']}}</th>
                            <th>{{$matches['away']}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Uitslag</td>


                            <td>
                                @if($matches->homescored > $matches->awayscored)
                                    <span class="badge badge-success">Gewonnen</span>
                                @elseif($matches->homescored < $matches->awayscored)
                                    <span class="badge badge-danger">Verloren</span>
                                @elseif($matches->homescored = $matches->awayscored)
                                    <span class="badge badge-warning">Gelijkspel</span>
                                @else
                                @endif
                            </td>

                            <td>
                                @if($matches->homescored < $matches->awayscored)
                                    <span class="badge badge-success">Gewonnen</span>
                                @elseif($matches->homescored > $matches->awayscored)
                                    <span class="badge badge-danger">Verloren</span>
                                @elseif($matches->homescored = $matches->awayscored)
                                    <span class="badge badge-warning">Gelijkspel</span>
                                @else
                                @endif
                            </td>

                        </tr>
                        <tr>
                            <td>Gescoord</td>
                            <td>{{$matches['homescored']}}</td>
                            <td>{{$matches['awayscored']}}</td>
                        </tr>
                        <tr>
                            <td>Schoten</td>
                            <td>{{$matches['homeshots']}}</td>
                            <td>{{$matches['awayshots']}}</td>
                        </tr>
                        <tr style="background-color:lightblue">
                            <td>Percentage</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Verdedigende Rebounds</td>
                            <td>{{$matches['homedrebounds']}}</td>
                            <td>{{$matches['awaydrebounds']}}</td>
                        </tr>
                        <tr>
                            <td>Aanvallende rebounds</td>
                            <td>{{$matches['homearebounds']}}</td>
                            <td>{{$matches['awayarebounds']}}</td>
                        </tr>
                        <tr style="background-color:lightblue">
                            <td>Totaal rebounds</td>
                            <td>
                                -
                                {{--                                    @foreach($matches as $row)
                                                                        {{$row['homedrebounds']}} + {{$row['homearebounds']}}
                                                                    @endforeach--}}
                            </td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Strafworpen</td>
                            <td>{{$matches['homefshots']}}</td>
                            <td>{{$matches['awayfshots']}}</td>
                        </tr>
                        <tr>
                            <td>Gescoord</td>
                            <td>{{$matches['homefshotsscored']}}</td>
                            <td>{{$matches['awayfshotsscored']}}</td>
                        </tr>
                        <tr style="background-color:lightblue">
                            <td>Percentage</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-chart-bar"></i>Diagram
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div class="chartjs-size-monitor"
                             style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                </div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                                </div>
                            </div>
                        </div>
                        <canvas id="canvas-2" width="338" height="168" class="chartjs-render-monitor"
                                style="display: block; width: 338px; height: 168px;">
                        </canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

                <a href="#" onclick="history.go(-1)">
                <button class="btn btn-secondary" type="button">Terug</button>
            </a>

            <a href={{ URL::to('matches/' . $matches->id . '/edit') }}>
                <button class="btn btn-secondary">Bewerken</button>
            </a>

@endsection
@section('editUrl'){{ URL::to('matches/' . $matches->id . '/edit') }}@endsection
@section('backUrl'){{ url("/matches") }}@endsection