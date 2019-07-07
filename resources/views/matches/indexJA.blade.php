@extends('coreui::master')
@section('breadcrumb')<li> Wedstrijden</li> @endsection
@section('body')

    {{--<style>--}}
        {{--div {--}}
            {{--/*display: none;*/--}}
        {{--}--}}
    {{--</style>--}}

    {{--<script type="text/javascript">--}}
        {{--document.getElementById('options').onchange = function() {--}}
            {{--var i = 1;--}}
            {{--var myDiv = document.getElementById(i);--}}
            {{--while(myDiv) {--}}
                {{--myDiv.style.display = 'none';--}}
                {{--myDiv = document.getElementById(++i);--}}
            {{--}--}}
            {{--document.getElementById(this.value).style.display = 'block';--}}
        {{--};--}}
    {{--</script>--}}

    {{--<select name="options" id="options">--}}
        {{--<option value="1"> Loan Protection Insurance</option>--}}
        {{--<option value="2"> GAP or Cash Assist Insurance</option>--}}
        {{--<option value="3"> Home Insurance</option>--}}
        {{--<option value="4"> Landlords Insurance</option>--}}
        {{--<option value="5">  Car Insurance</option>--}}
    {{--</select>--}}

    {{--<div id="1" style="display: block">Test 1</div>--}}
    {{--<div id="2">Test 2</div>--}}
    {{--<div id="3">Test 3</div>--}}
    {{--<div id="4">Test 4</div>--}}
    {{--<div id="5">Test 5</div>--}}



    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <select name="dropdown-matches" id="dropdown-matches">
                    <option value="1" selected>Gespeelde wedstrijden</option>
                    <option value="2">Aankomende wedstrijden</option>
                </select>
            </div>
        </div>
    </div>




        <div class="col-lg-14">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                            <th>Team</th>
                            <th>Uitslag</th>
                            <th>Gescoord</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Fortis</td>
                            <td>
                                <span class="badge badge-success">Gewonnen</span>
                            </td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>Rust Roest</td>
                            <td>
                                <span class="badge badge-danger">Verloren</span>
                            </td>
                            <td>17</td>
                        </tr>
                        </tbody>
                    </table>

                    <a href="/matches/show">
                        <div class="btn btn-info">Statistieken</div>
                    </a>
                </div>
            </div>
        </div>


        <div class="col-lg-14">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                            <th>Team</th>
                            <th>Uitslag</th>
                            <th>Gescoord</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Fortis</td>
                            <td>
                                <span class="badge badge-success">Gewonnen</span>
                            </td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>Rust Roest</td>
                            <td>
                                <span class="badge badge-danger">Verloren</span>
                            </td>
                            <td>17</td>
                        </tr>
                        </tbody>
                    </table>

                    <a href="/matches/show">
                        <div class="btn btn-info">Statistieken</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-14">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                            <th>Team</th>
                            <th>Uitslag</th>
                            <th>Gescoord</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Fortis</td>
                            <td>
                                <span class="badge badge-success">Gewonnen</span>
                            </td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>Rust Roest</td>
                            <td>
                                <span class="badge badge-danger">Verloren</span>
                            </td>
                            <td>17</td>
                        </tr>
                        </tbody>
                    </table>

                    <a href="/matches/show">
                        <div class="btn btn-info">Statistieken</div>
                    </a>
                </div>
            </div>
        </div>





    <div class="card">
        <div class="card-body" style="background-color: #ffffff">
            <div class="card-body" style="background-color: #ffffff">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src='https://pbs.twimg.com/profile_images/952926140016025600/vzCJI1yf_400x400.jpg'
                                 alt="Fortis" class="img-responsive img-rounded"
                                 style="max-height: 100px; max-width: 100px;">
                        </div>
                        <div class="col-md-4 text-center">
                            <h9 style="font-family: 'Helvetica Neue'">2018-2019 veld</h9>
                            <h2>Fortis 1 - Albatros 1</h2>
                            <h5>za 20 april 2019, 14:30</h5>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src='https://www.zwijndrecht.net/img/custom/logos/cvk-albatros-jubileum-550-resized.jpg'
                                 alt="Fortis" class="img-responsive img-rounded"
                                 style="max-height: 130px; max-width: 130px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body" style="background-color: #ffffff">
            <div class="card-body" style="background-color: #ffffff">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src='https://scontent-ams3-1.xx.fbcdn.net/v/t1.0-9/1560397_1463579297211195_3811078896988800805_n.jpg?_nc_cat=105&_nc_ht=scontent-ams3-1.xx&oh=13781b4873a6dcba64a6853894188799&oe=5D6EEB7F'
                                 alt="Fortis" class="img-responsive img-rounded"
                                 style="max-height: 120px; max-width: 120px;">
                        </div>
                        <div class="col-md-4 text-center">
                            <h9 style="font-family: 'Helvetica Neue'">2018-2019 zaal</h9>
                            <h2>Tjoba 1 - Fortis 1</h2>
                            <h5>za 27 april 2019, 14:30</h5>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src='https://pbs.twimg.com/profile_images/952926140016025600/vzCJI1yf_400x400.jpg'
                                 alt="Fortis" class="img-responsive img-rounded"
                                 style="max-height: 100px; max-width: 100px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body" style="background-color: #ffffff">
            <div class="card-body" style="background-color: #ffffff">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src='https://www.zwijndrecht.net/img/custom/logos/cvk-albatros-jubileum-550-resized.jpg'
                                 alt="Fortis" class="img-responsive img-rounded"
                                 style="max-height: 130px; max-width: 130px;">
                        </div>
                        <div class="col-md-4 text-center">
                            <h9 style="font-family: 'Helvetica Neue'">2018-2019 veld</h9>
                            <h2>Fortis 1 - Vriendenschaar</h2>
                            <h5>za 4 april 2019, 14:30</h5>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src='https://pbs.twimg.com/profile_images/952926140016025600/vzCJI1yf_400x400.jpg'
                                 alt="Fortis" class="img-responsive img-rounded"
                                 style="max-height: 100px; max-width: 100px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <a href="matches/create">
        <button class="btn btn-sm btn-primary">Toevoegen</button>
    </a>







@endsection
