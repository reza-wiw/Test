<!DOCTYPE html>

<html>

<head>

    <title>Bar Chart </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">	
	<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>	
	<script type="text/javascript" src="{{asset('assets/js/echarts.min.js')}}"></script>

    <style type="text/css">

        .box{

            width:800px;

            margin:0 auto;

        }

    </style>

</head>

<body>

    <div class="container" style="margin-top: 50px;">

        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-primary">

                    <div class="panel-heading">

                        <h3 class="panel-title">Bar Chart </h3>

                    </div>

                    <div class="panel-body" align="center">
                        <div id="bar_chart" style="width:750px; height:450px;">


                        </div>

                    </div>
                  

    <form method="post" id="make_pdf" action="create_pdf.php">

<input type="hidden" name="hidden_html" id="hidden_html" />

<button type="button" name="create_pdf" id="create_pdf" >Download PDF</button>

</form>


                </div>

            </div>

        </div>

    </div>

    <script type="text/javascript">

        var analytics = <?php echo $kategori ?? ''; ?>


        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);


        function drawChart()

        {

            var data = google.visualization.arrayToDataTable(analytics);

            var options = {

                title : 'Persentasi Buku (IT,SI,Pemrograman,Politik,Hukum,Ekonomi)'

            };

            var chart = new google.visualization.BarChart(document.getElementById('bar_chart'));

            chart.draw(data, options);

        }
        var chart_area = document.getElementById('bar_chart');

        var chart = new google.visualization.PieChart(chart_area);

        google.visualization.events.addListener(chart, 'ready', function(){

        chart_area.innerHTML = '<img src="' + chart.getImageURI() + '" class="img-responsive">';

        });

    </script>
    
</body>

</html>
