@extends ('layouts.admin')
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
    ?></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>



@endsection
