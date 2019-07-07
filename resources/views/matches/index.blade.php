@extends('coreui::master')
@section('breadcrumb')<li> Wedstrijden </li> @endsection
@section('body')

    <script>
        jQuery(function () {
            jQuery('#showall').click(function () {
                jQuery('.targetDiv').show();
            });
            jQuery('.showSingle').click(function () {
                jQuery('.targetDiv').hide();
                jQuery('#div' + $(this).attr('target')).show();
            });
        });
    </script>

    <!-- Tabbladen -->
    <div class="btn-group" role="group" aria-label="Basic example">
        <button class="btn btn-primary showSingle" target="1" type="button">Aankomende wedstrijden</button>
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button class="btn btn-primary showSingle" target="2" type="button">Gespeelde wedstrijden</button>
    </div>

    <br>

    <section class="cnt">
        <div id="div1" class="targetDiv">

            <!-- Paginatie/Numering -->
            {{--<nav aria-label="Page navigation example">--}}
                {{--<ul class="pagination justify-content-center">--}}
                    {{--{{ $matches->links() }}--}}
                {{--</ul>--}}
            {{--</nav>--}}

            <!-- Tabel aankomende wedstrijd -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Datum</th>
                            <th>Seizoen</th>
                            <th>Verwijderen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($matchesToPlay as $row)
                            <tr>
                                <td><a href="{{URL::to("/matches/".$row->id)}}">{{ $row->name }}</a></td>
                                <td>
                                    <?php
                                    //verander de 'taal' van php
                                    //standaard use php english but if your want you can edit it to any other language. More info can be found at http://www.php.net
                                    setlocale(LC_TIME, 'NL_nl');
                                    echo strftime('%A %e %B %Y om %H.%M',strtotime($row->datetime));
                                    ?>
                                </td>
                                <td><a href="{{URL::to("/seasons/".$row->id)}}">{{ $row->seasons_id }}</a></td>

                                <form onsubmit="return confirm('Weet je zeker dat je {{$row->name}} wilt verwijderen?');" method="POST" action="{{ url("/matches/$row->id") }}">
                                    <!-- blade derective -->
                                    @method('DELETE')
                                    @csrf

                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}

                                    <td><button type="delete" class="form-control btn btn-danger mb-2">Verwijderen</button></td>
                                </form>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Paginatie/Numering -->
            {{--<nav aria-label="Page navigation example">--}}
                {{--<ul class="pagination justify-content-center">--}}
                    {{--{{ $matches->links() }}--}}
                {{--</ul>--}}
            {{--</nav>--}}


        </div>

        <!-- Tabel gespeelde wedstrijden -->
        <div id="div2" class="targetDiv" style="display: none">

            <!-- Paginatie/Numering -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Datum</th>
                                <th>Seizoen</th>
                                <th>Verwijderen</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($matchesPlayed as $row)
                            <tr>
                                <td><a href="{{URL::to("/matches/".$row->id)}}">{{ $row->name }}</a></td>
                                <td>
                                    <?php
                                    //verander de 'taal' van php
                                    //standaard use php english but if your want you can edit it to any other language. More info can be found at http://www.php.net
                                    setlocale(LC_TIME, 'NL_nl');
                                    echo strftime('%A %e %B %Y om %H.%M',strtotime($row->datetime));
                                    ?>
                                </td>
                                <td><a href="{{URL::to("/seasons/".$row->id)}}">{{ $row->seasons_id }}</a></td>
                                <form onsubmit="return confirm('Weet je zeker dat je {{$row->name}} wilt verwijderen?');" method="POST" action="{{ url("/matches/$row->id") }}">
                                    <!-- blade derective -->
                                    @method('DELETE')
                                    @csrf

                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}

                                    <td><button type="delete" class="form-control btn btn-danger mb-2">Verwijderen</button></td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Paginatie/Numering -->

        </div>
    </section>

    <a href="matches/create"><button class="btn btn-sm btn-primary">Toevoegen</button></a>

@endsection