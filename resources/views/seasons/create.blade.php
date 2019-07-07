@extends('coreui::master')
@section('breadcrumb')<li>Seizoenen</li> @endsection
    @section('body')
        <h1>Seizoen toevoegen </h1>
        <div class="card">
            <div class="card-header">
                <strong>Nieuw seizoen   </strong>
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-horizontal" action="{{ route('seasons.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="nameInput">Seizoensnaam</label>
                                    <input type="text" class="form-control" id="nameInput" name="nameInput"
                                           placeholder="Voeg hier de seizoensnaam toe" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="yearInput">Startjaar</label>
                                    <input type="text" class="form-control" id="yearInput" name="yearInput"
                                           placeholder="Voeg hier het startjaar toe" required>
                                </div>
                            </div>


        <div class="card-footer">
            <button class="btn btn-succes btn-primary" type="submit">Toevoegen</button>
        </div>
                        </form></div></div></div>
@endsection
