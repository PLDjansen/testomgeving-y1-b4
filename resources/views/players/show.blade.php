@extends('coreui::master')
@section('body')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <div class="card"><div class="card-header">
            <h2>Maurice</h2>
        </div></div>

    <div class="card">
        <div class="card-header"><i class="fa fa-search"></i> 2018-2019 veld
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="season_id">Seizoen:</label>
                <select name="season_id" id="season_id">
                    <option value="" disabled="disabled" selected="selected">2018-2019 veld</option>
                    <option value="2">2017-2018 zaal</option> <option value="3">2018-2019 veld</option>
                    <option value="4">2018-2019 zaal</option></select></div>

      </div>

    </div>

    <div class="card">
        <div class="card-header">
            Schoten/ scores
        </div>
        <div class="card-body">

            <div class="chart-wrapper w-75 p-3">
                <canvas id="chart1"
                        class="chartjs"
                        width="1000" height="500"
                        style="display: block;
                        height: 385px; width: 900px;"></canvas>

            </div>

            <table class="table"><tbody><tr>
                    <th>Wedstrijd</th>
                    <th>Schoten</th>
                    <th>Scores</th>
                    <th>Percentage</th>
                    <th>Schoten tegenstander</th>
                    <th>Scores</th>
                    <th>Percentage</th>
                </tr> <tr>
                    <td>Januari</td>
                    <td>16</td> <td>1</td> <td>6.25%</td> <td>-</td> <td>-</td> <td>-</td>
                </tr> <tr>
                    <td>Februari</td>
                    <td>5</td> <td>1</td> <td>20%</td> <td>6</td> <td>2</td> <td>33.33%</td>
                </tr> <tr>
                    <td>Maart</td>
                    <td>14</td> <td>3</td> <td>21.43%</td> <td>5</td> <td>1</td> <td>20%</td>
                </tr> <tr>
                    <td>April</td>
                    <td>8</td> <td>2</td> <td>25%</td> <td>-</td> <td>-</td> <td>-</td>
                </tr></tbody></table>
    </div>
    </div>

    <div class="card">
        <div class="card-header">
            gemiddelde rebound per maand tov de tegenstander
        </div>

        <div class="chart-wrapper w-75 p-3">
        <canvas id="chart2"
                class="chartjs"
                width="1000" height="500"
                style="display: block;
                height: 385px; width: 900px;"></canvas>
        </div>
        <table class="table"><tbody>
            <tr>
                <th>Wedstrijd</th>
                <th>Verdedigende rebounds</th>
                <th>Aanvallende rebounds</th>
                <th>Totaal</th>
                <th>Verdedigende rebounds tegenstander</th>
                <th>Aanvallende rebounds tegenstander</th>
                <th>Totaal</th></tr> <tr>
                <td>Januari</td>
                <td>4</td> <td>9</td> <td>13</td> <td>5</td> <td>13</td> <td>18</td>
            </tr> <tr>
                <td>Februari</td>
                <td>2</td> <td>1</td> <td>3</td> <td>9</td> <td>25</td> <td>34</td>
            </tr> <tr>
                <td>Maart</td> <td>2</td> <td>9</td> <td>11</td> <td>5</td> <td>12</td> <td>17</td>
            </tr> <tr>
                <td>April</td> <td>15</td> <td>8</td> <td>23</td> <td>2</td> <td>8</td> <td>10</td>
            </tr></tbody></table>
    </div>

    <div class="card">
        <div class="card-header">
            vrije worpen en strafworpen
        </div>

        <div class="chart-wrapper w-75 p-3">
            <canvas id="chart3"></canvas>
            <table class="table"><tbody>
                <tr><th>Wedstrijd</th>
                    <th>Strafworpen</th>
                    <th>Scores</th>
                    <th>Percentage</th>
                    <th>Vrije worpen</th>
                    <th>Scores</th>
                    <th>Percentage</th>
                </tr> <tr>
                    <td>Januari</td>
                    <td>2</td> <td>2</td> <td>100%</td> <td>-</td> <td>-</td> <td>-</td>
                </tr> <tr>
                    <td>Februari</td>
                    <td>1</td> <td>1</td> <td>100%</td> <td>-</td> <td>-</td> <td>-</td>
                </tr> <tr>
                    <td>Maart</td>
                    <td>5</td> <td>4</td> <td>80%</td> <td>-</td> <td>-</td> <td>-</td>
                </tr> <tr>
                    <td>April</td>
                    <td>3</td> <td>3</td> <td>100%</td> <td>-</td> <td>-</td> <td>-</td>
                </tr></tbody></table>
        </div>

    </div>

    <script>
        //schoten diagram
        var ctx = document.getElementById('chart1');
        var myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: ['Jan', 'Feb', 'Mar',"apr",],
                datasets: [{
                    label:'percentage schoten/doelpunten',
                    data: [12, 19, 11, 12, 17, 12],
                    borderWidth: 1
                }]

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        //rebounds diagram
        var ctx = document.getElementById('chart2');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar',"apr"],
                datasets: [{
                    label:'Verdedigende rebounds',
                    data: [2, 7, 4,4],
                    backgroundColor:
                        'rgba(255, 206, 86, 0.2)'
                ,
                    borderColor: [
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                },{
                    label:' aanvallende rebounds',
                    data: [7, 2, 6,5],
                    backgroundColor:
                        'rgba(255, 99, 132, 0.2)'
                    ,
                    borderColor:
                        'rgba(255, 99, 132, 1)'
                    ,
                    borderWidth: 1




                }]

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        //vrije worpen diagram
        var ctx = document.getElementById('chart3');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['genomen vrije worpen', 'gescoorde vrije worpen'],
                datasets: [{
                    label:'vrije worpen',
                    data: [5, 3, 5, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 1
                }]

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>




    @endsection
