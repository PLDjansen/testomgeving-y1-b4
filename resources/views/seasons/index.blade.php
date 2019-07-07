    @extends("layout.index")
    @section('breadcrumb')<li>Seizoenen</li> @endsection
    @section("createUrl"){{ url("/seasons/create") }} @endsection
    @section("createText")Seizoen toevoegen @endsection
    @section("cardHeaderText")Seizoen @endsection
    @section("table")
        <thead>
        <tr>
            <th style="width: 15%">Naam</th>
            <th style="width: 65%">Jaar</th>
            <th style="width: 10%">Bewerken</th>
            <th style="width: 10%">Verwijderen</th>
        </tr>
        </thead>
        <tbody>
        @foreach($seasons as $row)
            <tr>
    
                <td class="çol-8"><a href={{URL::to("/seasons/$row->id")}}>{{$row -> name}}</a></td>
                <td class="çol-8">{{$row -> year}}</td>
                <td><a href="{{ URL::to('seasons/' . $row->id . '/edit') }}"><button class="btn btn-secondary">Bewerken</button></a></td>

                <form onsubmit="return confirm('Weet je zeker dat je {{$row->name}} wilt verwijderen?');" method="POST" action="{{ url("/seasons/$row->id") }}">

                    <!-- blade derective -->
                    {{-- @method('DELETE')
                    @csrf --}}

                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}

                    <td> <button type="submit" class="btn btn-secondary btn-danger">Verwijder</button></td>
                </form>

            </tr>
        @endforeach
        </tbody>

    @endsection
