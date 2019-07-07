@extends('layout.edit')
@section('breadcrumb')<li>Gebruikers</li> @endsection
@section("cardHeader"){{$users->name}}@endsection
@section("editAction"){{URL::to("/users/$users->id")}}@endsection
@section("formBody")
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Naam</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$users->name}}" type="text" name="nameInput" placeholder="Naam" required>
                            </div>
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$users->email}}" type="text" name="emailInput" placeholder="Email" required>
                            </div>
                            <label class="col-md-3 col-form-label">Telefoonnummer</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$users->phone}}" type="text" name="phoneInput" placeholder="Telefoonnummer" required>
                            </div>
                            <label class="col-md-3 col-form-label">Token</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$users->remember_token}}" type="text" name="tokenInput" placeholder="Token" required>
                            </div>
                        </div>

                        <script>
                            function myFunction() {
                                alert("De wijzigingen zijn doorgevoerd");
                            }
                        </script>
    @endsection
@section('deleteName'){{$users->name}}@endsection
@section("deleteAction"){{ url("/users/$users->id") }}@endsection
@section("backUrl"){{ url("/users/") }}@endsection