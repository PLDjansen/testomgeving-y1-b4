@extends('coreui::master')
@section('body')

    {{-- De 2 opkomende wedstrijden --}}
    <center>
        <h1>Aankomende wedstrijden</h1>

        @foreach($upcomingMatches as $row)
            <div class="card">
                <div class="card-body" style="background-color: #ffffff">
                    <h4>{{ $row->year }}</h4>

                    <h2><a href="{{URL::to("/matches/".$row->id)}}">{{ $row->name }}</a></h2>

                    <h5>
                            <?php
                            //verander de 'taal' van php
                            //standaard use php english but if your want you can edit it to any other language. More info can be found at http://www.php.net
                            setlocale(LC_TIME, 'NL_nl');
                            echo strftime('%A %e %B %Y om %H.%M',strtotime($row->datetime));
                            ?>
                    </h5>

                </div>
            </div>
        @endforeach
    </center>

    {{-- De 2 laatste uitslagen --}} {{-- de 2 laatste wedstrijden die zijn geweest --}}
    <center>
        <h1>Recente uitslagen</h1>

        @foreach($matchResults as $row)
            <div class="card">
                <div class="card-body" style="background-color: #ffffff">
                    <h1>{{ $row->result_team }} - {{ $row->result_opponent }}</h1>
                    <h4><a href="{{URL::to("/matches".$row->id)}}">{{ $row->name }}</a></h4>
                    <h5>
                        <?php
                        //verander de 'taal' van php
                        //standaard use php english but if your want you can edit it to any other language. More info can be found at http://www.php.net
                        setlocale(LC_TIME, 'NL_nl');
                        echo strftime('%A %e %B %Y om %H.%M',strtotime($row->datetime));
                        ?>
                    </h5>
                </div>
            </div>
        @endforeach
    </center>

@endsection
