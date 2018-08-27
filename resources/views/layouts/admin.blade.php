<!DOCTYPE html>
<html>
  <head>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Smart Grid</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/SMGcss.css')}}">
  </head>

  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('www.energeiachile.com')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SM</b>G</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SmartGrid</b></span>
        </a>
         <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span >Energeia</span>
                    <img src="{{ asset('css/usuario.png')}}"  class="user-image" alt="User Image">
                </a>

                  <ul class="dropdown-menu">
                    <li class="user-header">
                      <img src="{{ asset('css/usuario.png')}}"  class="img-circle" alt="User Image">
                      <p>
                      Smart Grid Energeria
                      <small>2018</small>
                      </p>
                    </li>

                    <li class="user-footer">
                       <div class="pull-left">
                         <a href="#" class="btn btn-default btn-flat">Perfil</a>
                       </div>
                       <div class="pull-right">
                         <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Salir</a>
                       </div>
                    </li>
                  </ul>
              </li>
            </ul>
          </div>
        </nav>
        </header>
        <aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="header">Menú Principal</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <span>Inicio</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="temperatura"><i class="fa fa-circle-o"></i>Dashboard</a></li>
          <li><a href="temperatura"><i class="fa fa-circle-o"></i>Mis dispositivos</a></li>
          <li><a href="temperatura"><i class="fa fa-circle-o"></i>Temperatura</a></li>
          <li><a href="temperatura"><i class="fa fa-circle-o"></i>Control de Luz</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-plug"></i>
          <span>Consumo Histórico</span>
           <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Por mes</a></li>
          <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Por dispositivo</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-plug"></i>
          <span>Tips de Ahorro</span>
           <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
        </a>
      </li>
    </ul>
  </section>
</aside>

<div class="content-wrapper">
  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <!-- inicio box hora -->
        <div class="box">
          <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  @yield('contenidoHora')
                  @yield('contenidoRedesSociales')
                </div>
               </div>
            </div>
        </div>
        <!-- fin box hora -->
      </div>
    </div>

    <!-- inicio row datos: temperatura, corriente, voltaje, potencia -->
<div id="seccionRecargar3">
    <div class="row" >
      <div class="col-md-3">
          <!-- inicio box info temp -->
          <div class="box box-solid box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Temperatura</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>

            <div class="box-body" align="center">
                <div class="row">
                  <div class="col-md-12">
                    @yield('contenidoTemp')
                  </div>
                 </div>
            </div>
         </div>
         <!-- fin box info temp -->
      </div>

      <div class="col-md-3">
          <!-- inicio box info temp -->
          <div class="box box-solid box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Corriente</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>

            <div class="box-body" align="center">
                <div class="row">
                  <div class="col-md-12">
                    @yield('contenidoCorr')
                  </div>
                 </div>
            </div>
         </div>
         <!-- fin box info temp -->
      </div>

      <div class="col-md-3">
          <!-- inicio box info temp -->
          <div class="box box-solid box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Voltaje</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>

            <div class="box-body" align="center">
                <div class="row">
                  <div class="col-md-12">
                    @yield('contenidoVolt')
                  </div>
                 </div>
            </div>
         </div>
         <!-- fin box info temp -->
      </div>

      <div class="col-md-3">
          <!-- inicio box info temp -->
          <div class="box box-solid box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Potencia</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>

            <div class="box-body" align="center">
                <div class="row">
                  <div class="col-md-12">
                    @yield('contenidoPot')
                  </div>
                 </div>
            </div>
         </div>
         <!-- fin box info temp -->
      </div>
    </div>
    <!-- fin row datos: temperatura, corriente, voltaje, potencia -->
</div>
    <div class="row">
        <div class="col-md-6">
          <!-- inicio box on-off -->
          <div class="box box-solid box-primary" style="width:100%">
            <div class="box-header with-border">
              <h3 class="box-title">Control de luz 1</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>

            <div class="box-body">
                <div class="row">
                   <div class="col-md-12">
                     @yield('contenidoT')
                   </div>
                </div>
            </div>
          </div>
          <!-- fin on-off-->

          <!-- inicio box on-off -->
          <div class="box box-solid box-primary" style="width:100%">
            <div class="box-header with-border">
              <h3 class="box-title">Control de luz 2</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>

            <div class="box-body">
                <div class="row">
                   <div class="col-md-12">
                     @yield('contenidoT')
                   </div>
                </div>
            </div>
          </div>
          <!-- fin on-off-->

        </div>

        <div class="col-md-6">
          <!-- inicio box PieChart -->
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Gráfico Consumo</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>

            <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    @yield('contenidoPieChart')
                   </div>
                 </div>

              </div>
            </div>
            <!-- fin box PieChart-->
        </div>
      </div><!-- /row-->

      <div class="row">
        <div class="col-md-12">
          <!-- inicio box info temp -->
          <div class="box box-solid box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Información Consumo SmartGrid</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>

            <div class="box-body">
                <div class="row">
                  <div class="col-md-12" id="seccionRecargar2">
                    @yield('contenidoInfoElectrica')
                  </div>
                 </div>
              </div>
            </div>
            <!-- fin box info temp -->
        </div>
      </div>
        <div class="row">
        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- inicio box info temp -->
            <div class="box box-solid box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Información Temperatura SmartGrid</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
              </div>

              <div class="box-body">
                  <div class="row">
                    <div class="col-md-12" id="seccionRecargar">
                      @yield('contenido')
                    </div>
                   </div>

                </div>
              </div>
              <!-- fin box info temp -->
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- inicio box info temp -->
            <div class="box box-solid box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Otro</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
              </div>

              <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      @yield('nuevosGraficos')
                    </div>
                   </div>

                </div>
              </div>
              <!-- fin box info temp -->
          </div>
        </div>
    </section>
  </div>
  </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; <a href="www.energeiachile.com">Energeia</a>.</strong> All rights reserved.
    </footer>

    <!-- Función para recargar cierta parte de la pagina automaticamente-->
    <script type="text/javascript">
      	$(document).ready(function(){
      		setInterval(
      				function(){
      					$('#seccionRecargar').load(' #seccionRecargar');
      				},6000
      			);
      	});
    </script>

    <!-- Función para recargar cierta parte de la pagina automaticamente-->
    <script type="text/javascript">
        $(document).ready(function(){
          setInterval(
              function(){
                $('#seccionRecargar2').load(' #seccionRecargar2');
              },6000
            );
        });
    </script>

    <!-- Función para recargar cierta parte de la pagina automaticamente-->
    <script type="text/javascript">
        $(document).ready(function(){
          setInterval(
              function(){
                $('#seccionRecargar3').load(' #seccionRecargar3');
              },6000
            );
        });
    </script>

    <script>
    window.onload = function(){
          var contenedor = document.getElementById('
          contenedor_carga');

          contenedor.style.visibility = 'hidden';
          contenedor.style.opacity = '0';
    }
    </script>
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>



  </body>
</html>
