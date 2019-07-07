@extends('layout.show')
@section('breadcrumb')<li>Gebruikers</li> @endsection
        @section('table')
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Telefoonnummer</th>
                    <th>Token</th>
                    <th>Aangemaakt op:</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$users -> id}}</td>
                    <td>{{$users -> name}}</td>
                    <td>{{$users -> email}}</td>
                    <td>{{$users -> phone}}</td>
                    <td>{{$users -> remember_token}}</td>
                    <td>{{$users -> created_at}}</td>
                </tr>
                </tbody>
                @endsection

         @section('backUrl'){{ url("/users") }}@endsection