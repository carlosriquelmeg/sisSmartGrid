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

   $(document).ready( function(){
    $(".cb-enable").click(function(){
        var parent = $(this).parents('.switch');
        $('.cb-disable',parent).removeClass('selected');
        $(this).addClass('selected');
        $('.checkbox',parent).attr('checked', true);
    });
    $(".cb-disable").click(function(){
        var parent = $(this).parents('.switch');
        $('.cb-enable',parent).removeClass('selected');
        $(this).addClass('selected');
        $('.checkbox',parent).attr('checked', false);
    });
});
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

@section ('contenido0')
<div id="Medidores"></div>
@endsection

@section ('contenidoPieChart')
<div id="donutchart" style="width: 560px; height: 300px;"></div>
@endsection

@section ('contenidoT')
<div>
  <p align="left">Luz 1</p>
    <p class="field switch">
        <label class="cb-enable"><span>Encendido</span></label>
        <label class="cb-disable selected"><span>Apagado</span></label>
        <input type="checkbox" id="checkbox" class="checkbox" name="field1" />
    </p>
</div>
@endsection
