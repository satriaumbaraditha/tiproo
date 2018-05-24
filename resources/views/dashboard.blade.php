<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TIPRO | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/dist/css/skins/_all-skins.min.css') }}">
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-vml.min.js"></script>
  <link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" />
  <link rel="stylesheet" href="https://cdn.anychart.com/releases/8.2.1/css/anychart-ui.min.css"/>
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
</head>
<!-- BAR CHART -->
<div class="box box-success">
  <div class="box-header with-border">
    <a href="{{ url('/catalogs') }}"><h3 class="box-title">Bar Chart</h3></a>
    <!-- <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="chart">
      <canvas id="barChart" style="height:230px"></canvas>
    </div>
  </div> -->
  <!-- /.box-body -->
</div>

<!-- jQuery 2.2.3 -->
<script src="{{ asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{ asset('bower_components/AdminLTE/plugins/chartjs/Chart.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/AdminLTE/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bower_components/AdminLTE/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('bower_components/AdminLTE/dist/js/demo.js') }}"></script>

<div id="container" style="width:500px;height:600px;"></div>
<script>
    anychart.onDocumentReady(function() {
        var chart = anychart.pie(
          <?php
          echo '[';
          for ($i=0; $i < count(json_decode($chartData)); $i++) {
            $data = json_decode($chartData)[$i];
            echo "{ x: ". "'$data->name'". ", value:".$data->quantity."},";
          }
          echo ']';
          ?>
        );
        chart.title("<?= $chartTitle?>");
        chart.container("container");
        chart.draw();
    });
</script>
</body>
</html>
