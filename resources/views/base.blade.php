<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistea de control de casos">
    <meta name="author" content="pepeordonez.com">
    <meta name="keyword" content="despacho, abogados, casos, leyes, chihuahua">

    <title>Sistema de control de Casos</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lineicons/style.css')}}">    
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{ asset('assets/js/chart-master/Chart.js')}}"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


<body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
         	<div class="sidebar-toggle-box">
              	<div class="fa fa-bars tooltips" data-placement="right" ></div>
          	</div>
            <!--logo start-->
            <a  class="logo hidden-xs"><b>Dávila & Ortega asociados</b></a>
            <a  class="logo hidden-sm hidden-md hidden-lg"><b>D&O asociados</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
          
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout hidden-xs" href="{{route('logout')}}">Cerrar Sesion</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"></p>
              	  <h5 class="centered">{{Auth::user()->name}}</h5>
              	  	
                  <li class="mt">
                      <a class="{{Request::is('admin/casos') ? 'active' : ''}}" href="{{URL::to('admin/casos')}}">
                          <i class="fa fa-folder-open"></i>
                          <span>Casos Activos</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="{{Request::is('admin/casosinactivos') ? 'active' : ''}}" href="{{URL::to('admin/casosinactivos')}}">
                          <i class="fa fa-folder"></i>
                          <span>Casos Inactivos</span>
                      </a>
                  </li> 
                   <li class="mt">
                      <a class="{{Request::is('admin/todos') ? 'active' : ''}}" href="{{URL::to('admin/todos')}}">
                          <i class="fa fa-gavel"></i>
                          <span>Todos los Casos</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="{{Request::is('admin/casos/create') ? 'active' : ''}}" href="{{URL::to('admin/casos/create') }}">
                          <i class="fa fa-file-text "></i>
                          <span>Agregar Caso</span>
                      </a>
                  </li>   
                  <li class="mt hidden-sm hidden-md hidden-lg">
                      <a  href="{{route('logout') }}">
                          <i class="fa fa-power-off "></i>
                          <span>Cerrar Sesion</span>
                      </a>
                  </li>  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

          	@yield('contenido')
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - <a href="http://pepeordonez.com/" target="_blank">pepeordonez.com</a>
     
          </div>
      </footer>
      <!--footer end-->
  </section>
	
	<!-- start: JavaScript-->

		<script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{ asset('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.sparkline.js')}}"></script>


    <!--common script for all pages-->
    <script src="{{ asset('assets/js/common-scripts.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('assets/js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/gritter-conf.js')}}"></script>

    <!--script for this page-->
    <script src="{{ asset('assets/js/sparkline-chart.js')}}"></script>    
	<script src="{{ asset('assets/js/zabuto_calendar.js')}}"></script>	
	<script src="{{ asset('assets/js/custom.js')}}"></script>

	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
	<!-- end: JavaScript-->
	
</body>	       
</html>
