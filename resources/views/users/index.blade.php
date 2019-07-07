@extends("layout.index")
@section('breadcrumb')<li>Gebruikers</li> @endsection
@section("createUrl"){{ url("/users/create") }} @endsection
@section("createText")Gebruiker toevoegen @endsection
@section("cardHeaderText")Seizoen @endsection
@section("table")
<thead>
    <tr>
        <th style="width: 15%">Naam</th>
        <th style="width: 15%">Email</th>
        <th style="width: 15%">Telefoonnummer</th>
        <th style="width: 35%">Token</th>
        <th style="width: 10%">Bewerken</th>
        <th style="width: 10%">Verwijderen</th>
    </tr>
    </thead>

    @foreach($users as $row)
            <tr>
    
                <td class="çol-8"><a href={{URL::to("/users/$row->id")}}>{{$row -> name}}</a></td>
                <td class="çol-8">{{$row -> email}}</td>
                <td class="çol-8">{{$row -> phone}}</td>
                <td class="çol-8">{{$row -> remember_token}}</td>
                <td><a href="{{ URL::to('users/' . $row->id . '/edit') }}"><button class="btn btn-secondary">Bewerken</button></a></td>

                <form onsubmit="return confirm('Weet je zeker dat je {{$row->name}} wilt verwijderen?');" method="POST" action="{{ url("/users/$row->id") }}">

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

    