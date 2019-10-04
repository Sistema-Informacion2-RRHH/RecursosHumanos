

<div>

  <!-- Static navbar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">recursos HUMANOS </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Inicio</a></li>

          @if (!Auth::guest())


          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Administracion y Seguridad <span class="caret"></span></a>
            <ul class="dropdown-menu">
              @if($recursos['Usuario'])
              <li><a href="{{URL('/user')}}">Administrar Usuarios</a></li>
              @endif
              @if($recursos['Privilegio'])
              <li><a href="{{URL('/privilegio')}}">Gestionar Privilegios</a></li>
              @endif
              @if($recursos['Bitacora'])
              <li><a href="{{URL('/bitacora')}}">Gestionar Bitacora</a></li>
              @endif
              <!--<li><a href="{{URL('/backup')}}">Administrar Backup</a></li> -->

            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Reclutamiento <span class="caret"></span></a>
            <ul class="dropdown-menu">
              @if($recursos['Reclutamiento'])
              <li><a href="{{URL('/reclutamiento')}}">Gestionar Reclutamiento</a></li>
              @endif
              @if($recursos['Postulante'])
              <li><a href="{{URL('/postulante')}}">Gestionar Postulante</a></li>
              @endif
              @if($recursos['Seleccion'])
              <li><a href="{{URL('/seleccion')}}">Gestionar Seleccion</a></li>
              @endif
              @if($recursos['Entrevista'])
              <li><a href="{{URL('/entrevista')}}">Programar Entrevista</a></li>
              @endif
              <li><a href="{{URL('/postreclut')}}">Gestionar Postulante Reclutado</a></li>
              @if($recursos['Empleado'])
              <li><a href="{{URL('/empleado')}}">Gestionar Empleado</a></li>
              @endif
              <li><a href="{{URL('/periodoprueba')}}">Gestionar PeriodoPrueba</a></li>
              
              <li><a href="{{URL('/evaluacion')}}">Gestionar Evaluacion</a></li>
              
              <li><a href="{{URL('/planillaevaluacion')}}">Planilla Evaluacion</a></li>

            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Empleado <span class="caret"></span></a>
            <ul class="dropdown-menu">
              @if($recursos['Cargo'])
              <li><a href="{{URL('/cargo')}}">Gestionar Cargo</a></li>
              @endif
              <!--  @if($recursos['Departamento'])-->
              <li><a href="{{URL('/departamento')}}">Gestionar Departamento</a></li>
              <!-- @endif-->
              <!-- @if($recursos['Informacion_Privada'])-->
              <li><a href="{{URL('/informacionprivada')}}">Gestionar Informacion Privada</a></li>
              <!--@endif-->

              <li><a href="{{URL('/jefedepartamento')}}">Gestionar Jefe Por Departamento</a></li>


            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Documentos y Permisos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              @if($recursos['Seguro'])
              <li><a href="{{URL('/seguro')}}">Gestionar Seguros</a></li>
              @endif
              @if($recursos['Vacacion'])
              <li><a href="{{URL('/vacacion')}}">Gestionar Vacaciones</a></li>
              @endif
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Pagos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <!-- <li><a href="{{URL('/empleado')}}">Gestionar Empleado</a></li>-->
              <!--<li><a href="{{URL('/cargo')}}">Gestionar Cargo</a></li>-->

              <!--<li><a href="{{URL('/')}}">Gestionar Reporte</a></li> -->

            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false">Notificacion <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <!-- <li><a href="{{URL('/empleado')}}">Gestionar Empleado</a></li>-->
              <!--<li><a href="{{URL('/cargo')}}">Gestionar Cargo</a></li>-->

              <!--<li><a href="{{URL('/')}}">Gestionar Reporte</a></li> -->

            </ul>
          </li>

          @endif

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Iniciar Session</a></li>
          <!-- <li><a href="{{ url('/register') }}">Registrar</a></li> -->
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }}<span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  Cerrar Session
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>

  <!-- Main component for a primary marketing message or call to action -->


</div> <!-- /container -->