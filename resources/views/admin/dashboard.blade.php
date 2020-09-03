@extends('admin/layouts/app')

@section('styles')
<style>
    .fit-content {
        width: fit-content;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1>Dashboard</h1>
            <hr/>
            <div class="alert alert-light fit-content">
                <p>Page Views Today : </p>
                <h2 class="text-primary">
                    <i class="fas fa-eye mr-2"></i><span id="page-views-today">0</span>
                </h2>
            </div>
            <canvas id="canvas"></canvas>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
    $.ajax({
        url: '/admin/page-views/get',
        success: function(res) {
            var data = [];
            console.log(res);
            if (res.today !== null) {
                $('#page-views-today').text(res.today.views);
            }

            for (key in res.monthly) {
                data.push(res.monthly[key]);
            }

            var config = {
                type: 'line',
                data: {
                    labels: Object.keys(res.monthly),
                    datasets: [{
                        backgroundColor: '#fb5245',
                        borderColor: '#fb5245',
                        data: data,
                        fill: false,
                    }]
                },
                options: {
                    bezierCurve: false,
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Monthly Page Views'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            }
                        }]
                    }
                }
            };

            var ctx = document.getElementById('canvas').getContext('2d');
            Chart.defaults.global.legend.display = false;
            window.myLine = new Chart(ctx, config);


        }
    })
</script>
@endsection