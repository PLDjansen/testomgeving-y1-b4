@extends("layout.create")
@section('breadcrumb')<li>Gebruikers</li> @endsection
@section("headText")Gebruiker toevoegen @endsection
@section("cardHeaderText")Nieuwe gebruiker @endsection
@section("createAction"){{ url("/users") }}@endsection
@section("form")
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class="col-md-9">
                                <label for="nameInput">Naam</label>
                                <input type="text" class="form-control" id="nameInput" name="nameInput"
                                       placeholder="Voer hier uw naam in" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <label for="emailInput">E-mail</label>
                                <input type="email" class="form-control" id="emailInput" name="emailInput"
                                       placeholder="Voer hier uw e-mail in" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <label for="passwordInput">Wachtwoord</label>
                                <input type="password" class="form-control" id="passwordInput" name="passwordInput"
                                       placeholder="Voer hier uw wachtwoord in" minlength="6" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <label for="phoneInput">Telefoonnummer</label>
                                <input type="text" class="form-control" id="phoneInput" name="phoneInput"
                                       placeholder="Voer hier uw telefoonnummer in" minlength="10" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <label for="tokenInput">Token</label>
                                <input type="text" class="form-control" id="tokenInput" name="tokenInput"
                                       placeholder="Voer hier uw token in" required>
                            </div>
                        </div>
@endsection

