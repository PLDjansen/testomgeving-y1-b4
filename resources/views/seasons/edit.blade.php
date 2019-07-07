@extends('layout.edit')
@section('breadcrumb')<li>Seizoenen</li> @endsection
@section("cardHeader"){{$seasons->name}}@endsection
@section("editAction"){{URL::to("/seasons/$seasons->id")}}@endsection
@section("formBody")
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Seizoensnaam</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$seasons->name}}" type="text" name="nameInput" placeholder="Seizoensnaam" required>
                            </div>
                            <label class="col-md-3 col-form-label">Periode</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$seasons->year}}" type="text" name="yearInput" placeholder="Periode" required>
                            </div>
                        </div>

                        <script>
                            function myFunction() {
                                alert("De wijzigingen zijn doorgevoerd");
                            }
                        </script>
    @endsection
@section('deleteName'){{$seasons->name}}@endsection
@section("deleteAction"){{ url("/seasons/$seasons->id") }}@endsection
@section("backUrl"){{ url("/seasons/") }}@endsection





