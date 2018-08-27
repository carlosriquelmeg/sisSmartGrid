@extends ('layouts.admin')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://code.highcharts.com/highcharts.src.js"></script>
<script type="text/javascript">
   google.charts.load('current', {'packages':['gauge']});
   google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
     var data = google.visualization.arrayToDataTable([
       ['Label', 'Value'],
       ['Temperatura', 0]
     ]);

     var options = {
       width: 200, height: 200,
       redFrom: 90, redTo: 100,
       yellowFrom:75, yellowTo: 90,
       minorTicks: 5
     };

     var chart = new google.visualization.Gauge(document.getElementById('Medidores'));
     chart.draw(data, options);

     setInterval(function() {
       data.setValue(0, 1,
         <? foreach($temperaturas as $temperatura):?>
         {{$temperatura->temperatura}}
         <?endforeach;?>
       );
       chart.draw(data, options);
     }, 1300);
   }

</script>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Ampolletas',     11],
      ['Televisores',      2],
      ['Calefactores',  2]
    ]);

    var options = {
      title: 'Consumo por dispositivo',
      pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'ampolleta1', 'ampolleta2'],
          ['Enero',  1000,      400],
          ['Febrero',  1170,      460],
          ['Marzo',  660,       1120],
          ['Abril',  1030,      540]
        ]);

        var options = {
          title: 'Consumo ampolletas',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

@section ('contenido')
<h3>Temperaturas Prueba </h3>
<div class="row">
    <div class="col-lg-12 col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
      <div class="table-responsive">
          <table class="table table-stiped table-bordered table-condensed table-hover">
          <thead>
          <th>id</th>
          <th>Chip id</th>
          <th>Temperatura</th>
          <th>prueba n random recargar</th>
          </thead>
          @foreach ($temperaturas as $temperatura)
          <tr>
            <td>{{$temperatura->id}}</td>
            <td>{{$temperatura->chipId}}</td>
            <td>{{$temperatura->temperatura}}º C</td>
            <td><?php echo rand(1,800);
            ?>
            </td>
          </tr>
          @endforeach
          </table>
      </div>
    </div>
</div>
@endsection

@section ('contenidoInfoElectrica')
<div class="row">
    <div class="col-lg-12 col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
      <div class="table-responsive">
          <table class="table table-stiped table-bordered table-condensed table-hover">
          <thead>
          <th>id</th>
          <th>Chip id</th>
          <th>Corriente</th>
          <th>Voltaje</th>
          <th>Potencia</th>
          </thead>
          @foreach ($temperaturas as $temperatura)
          <tr>
            <td>{{$temperatura->id}}</td>
            <td>{{$temperatura->chipId}}</td>
            <td>{{$temperatura->corriente}} A</td>
            <td>{{$temperatura->voltaje}} V </td>
            <td>{{$temperatura->potencia}} W</td>
          </tr>
          @endforeach
          </table>
      </div>
    </div>
</div>
@endsection

@section ('contenido0')
<div id="Medidores"></div>
<div>Temperatura Actual</div>

@endsection

@section ('contenidoPieChart')
<div id="donutchart" style="width: 460px; height: 250px;"></div>
@endsection

@section ('contenidoT')
<div>
  <p align="left">Luz 1</p>
    <p class="field switch">
      <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
    </p>
</div>
@endsection

@section ('contenidoHora')
<div style="text-align:center;padding:1em 0;">
  <h3><a style="text-decoration:none;">
     <span style="color:gray;">Hora actual en  <br/>Chile</span>
    </a></h3>
     <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=medium&timezone=America%2FSantiago" width="100%" height="115" frameborder="0" seamless>
     </iframe>
</div>
@endsection

@section ('nuevosGraficos')
 <div id="curve_chart" style="width: 900px; height: 500px"></div>
@endsection

@section('contenidoTemp')
@foreach ($temperaturas as $temperatura)
<div class="datosSG">
{{$temperatura->temperatura}}
<img src="{{ asset('css/celsius.png')}}" alt="Smiley face" height="42" width="42">
</div>
@endforeach
@endsection

@section('contenidoCorr')
@foreach ($temperaturas as $temperatura)
<div class="datosSG">
{{$temperatura->corriente}} A
<img src="{{ asset('css/alto-voltaje.png')}}" alt="Smiley face" height="42" width="42">
</div>
@endforeach
@endsection

@section('contenidoVolt')
@foreach ($temperaturas as $temperatura)
<div class="datosSG">
{{$temperatura->voltaje}} V
<img src="{{ asset('css/alto-voltaje.png')}}" alt="Smiley face" height="42" width="42">
</div>
@endforeach
@endsection

@section('contenidoPot')
@foreach ($temperaturas as $temperatura)
<div class="datosSG">
{{$temperatura->potencia}} W
<img src="{{ asset('css/alto-voltaje.png')}}" alt="Smiley face" height="42" width="42">
</div>
@endforeach
@endsection

@section ('contenidoRedesSociales')
<div>
<img src="{{ asset('css/instagram.png')}}" alt="Smiley face" height="32" width="32">
<img src="{{ asset('css/facebook.png')}}" alt="Smiley face" height="32" width="32">
<img src="{{ asset('css/twitter.png')}}" alt="Smiley face" height="32" width="32">
</div>
@endsection
