@extends ('layouts.admin')
@section ('contenido')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
          <td>  <div id="Medidores"></div></td>
        </tr>
        @endforeach
      </table>

    </div>
  </div>
</div>
@endsection
