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
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{url('www.energeiachile.com')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SM</b>G</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SmartGrid</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <small class="bg-red">Online</small> -->
                  <span class="hidden-xs">Energeia Energeia </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <p>
                      www.energeiachile.com
                      <small>..</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
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

            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-md-12">

              <!-- inicio box0 -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Temperatura Actual SmartGrid</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>

                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
                              @yield('contenido0')
                       </div>
                     </div>

                  </div>
                </div>
                <!-- fin box0 -->

                <!-- inicio boxPieChart -->
                <div class="box">
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
                  <!-- fin boxPieChart-->

              <!-- inicio box1 -->
              <div class="box">
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
                <!-- fin box1 -->

                <!-- inicio box2 -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Control de luz</h3>
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
                <!-- fin box2-->

                <!-- inicio box3 -->
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Información Temperatura SmartGrid</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                  </div>

                  <div class="box-body">
                      <div class="row">
                         <div class="col-md-12">
                           @yield('contenido2')
                         </div>
                      </div>
                  </div>
                </div>
                <!-- fin box3 -->

              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.col -->

    </div><!-- /.row -->


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
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>

  </body>
</html>
