@extends('coreui::master')
@section('body')

    <div class="card">
        <div class="card-header">

            <i class="fa fa-align-justify"></i>@yield('cardHeaderText')
        </div>

        <div class="card-body">
            <table class="table table-responsive-sm table-bordered">
                @yield("table")
            </table>
        </div>
    </div>

    @yield("ranking")
    <div class="row justify-content-between">
        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0 align-items-left">
            <a href="#" onclick="history.go(-1)">
                <button class="btn btn-secondary" type="button">Terug</button>
            </a>
        </div>

        <a href="@yield('editUrl')">
            <button class="btn btn-secondary">Bewerken</button>
        </a>
        <form onsubmit="return confirm('Weet je zeker dat je dit wilt verwijderen?');" method="POST" action="@yield("deleteAction")">

            <!-- blade derective -->
            {{-- @method('DELETE')
            @csrf --}}

            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <td>
                <button type="submit" class="btn  btn-secondary btn-danger float-right">Verwijder</button>
            </td>

        </form>

    </div>


@endsection