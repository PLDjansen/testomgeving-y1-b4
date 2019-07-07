@extends("layout.index")
@section('breadcrumb')<li>Wedstrijden</li> @endsection
@section("createUrl"){{ url("/matches/create") }} @endsection
@section("createText")Wedstrijd toevoegen @endsection
@section("cardHeaderText")Wedstrijden @endsection
@section("body")



    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">


                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-secondary" type="button">Aankomende wedstrijden</button>
                        <button class="btn btn-secondary" type="button">Gespeelde wedstrijden</button>
                    </div>


                <a href="matches/create">
                    <button class="btn btn-sm btn-primary">Toevoegen</button>
                </a>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"> > </a>
                        </li>
                    </ul>
                </nav>
                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                    <tr>
                        <th>Wedstrijd</th>
                        <th>Datum en tijd</th>
                        <th>Seizoen</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Fortis - Albatros</td>
                        <td>10-06-19, 12:00</td>
                        <td>2019-2020 veld</td>
                        <td style="text-align: center">
                            <span class="badge badge-danger">Verwijderen</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Tjoba - Fortis</td>
                        <td>30-06-19, 10:00</td>
                        <td>2019-2020 veld</td>
                        <td style="text-align: center">
                            <span class="badge badge-danger">Verwijderen</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Fortis - Vriendenschaar</td>
                        <td>25-07-19, 12:00</td>
                        <td>2019-2020 veld</td>
                        <td style="text-align: center">
                            <span class="badge badge-danger">Verwijderen</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Rust Roest -  Fortis</td>
                        <td>20-09-19, 10:00</td>
                        <td>2019-2020 veld</td>
                        <td style="text-align: center">
                            <span class="badge badge-danger">Verwijderen</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Fortis - Merwede</td>
                        <td>05-10-19, 14:00</td>
                        <td>2019-2020 veld</td>
                        <td style="text-align: center">
                            <span class="badge badge-danger">Verwijderen</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"> > </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>




    @foreach($matches as $row)
        <tr>
            <td class="çol-8"><a href={{URL::to("/matches/$row->id")}}>{{$row->name}}</a></td>
            <td class="çol-8">{{ date('d-m-Y', strtotime($row->date)) }}</td>
            <td><a href="{{ URL::to('matches/' . $row->id . '/edit') }}"><button class="btn btn-secondary">Bewerken</button></a></td>

            <form onsubmit="return confirm('Weet je zeker dat je {{$row->name}} wilt verwijderen?');" method="POST" action="{{ url("/matches/$row->id") }}">

                <!-- blade derective -->
                {{-- @method('DELETE')
                @csrf --}}

                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <td><button type="submit" class="btn btn-secondary btn-danger">Verwijder</button></td>
            </form>
        </tr>
    @endforeach




@endsection