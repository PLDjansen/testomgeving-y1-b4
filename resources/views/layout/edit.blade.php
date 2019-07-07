@extends('coreui::master')
@section('body')
    <div class="card">
        <div class="card-header">
            <strong>@yield("cardHeader") </strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">

                    <form onsubmit="return alert('De wijzigingen zijn doorgevoerd!');"method="POST" action="@yield("editAction")">

                        @yield("formBody")
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-between">
                <button class="btn btn-primary btn-primary" type="submit">Opslaan</button>
                </form>

                <form onsubmit="return confirm('Weet je zeker dat je @yield("deleteName") wilt verwijderen?');" method="POST" action="@yield("deleteAction")">


                    <!-- blade derective -->
                    {{-- @method('DELETE')
                    @csrf --}}

                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}

                    <td> <button type="submit" class="btn  btn-secondary btn-danger float-right">Verwijder</button></td>

                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0 align-items-left">
            <a href="#" onclick="history.go(-1)"><button class="btn  btn-secondary">Terug</button></a>
        </div>
    </div>




@endsection