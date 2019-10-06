<link href="{{asset('plugin/bootstrap3.3.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{asset('plugin/bootstrap3.3.0/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugin/jquery-1.11.1.min.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugin/bootstrap3.3.0/dist/css/bootstrap.css')}}">
<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    R R H H
                </a>
            </li>


            @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Iniciar Session</a></li>

            <!-- <li><a href="{{ url('/register') }}">Registrar</a></li> -->

            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<span
                        class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
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


            <li>
                <a href="/">Inicio</a>
            </li>

            @if (!Auth::guest())
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Administracion y Seguridad</li>
                    @if($recursos['Usuario'])
                    <li><a href="{{URL('/user')}}">Administrar Usuarios</a></li>
                    @endif
                    @if($recursos['Privilegio'])
                    <li><a href="{{URL('/privilegio')}}">Gestionar Privilegios</a></li>
                    @endif
                    @if($recursos['Bitacora'])
                    <li><a href="{{URL('/bitacora')}}">Gestionar Bitacora</a></li>
                    @endif
                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reclutamiento<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Reclutamiento</li>
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

                    <li><a href="{{URL('/empleado')}}">Gestionar Empleado</a></li>

                    <li><a href="{{URL('/periodoprueba')}}">Gestionar PeriodoPrueba</a></li>

                    <li><a href="{{URL('/evaluacion')}}">Gestionar Evaluacion</a></li>

                    <li><a href="{{URL('/planillaevaluacion')}}">Planilla Evaluacion</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empleado<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Administracion y Seguridad</li>
                    @if($recursos['Cargo'])
                    <li><a href="{{URL('/cargo')}}">Gestionar Cargo</a></li>
                    @endif

                    <li><a href="{{URL('/capacitacion')}}">Gestionar Capacitacion</a></li>
                    
                    <li><a href="{{URL('/contrato')}}">Gestionar Contrato</a></li>

                    <li><a href="{{URL('/departamento')}}">Gestionar Departamento</a></li>

                    <li><a href="{{URL('/informacionprivada')}}">Gestionar Informacion Privada</a></li>

                    <li><a href="{{URL('/jefedepartamento')}}">Gestionar Jefe Por Departamento</a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentos <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Documentos y Permisos</li>
                    @if($recursos['Seguro'])
                    <li><a href="{{URL('/seguro')}}">Gestionar Seguros</a></li>
                    @endif
                    @if($recursos['Vacacion'])
                    <li><a href="{{URL('/vacacion')}}">Gestionar Vacaciones</a></li>
                    @endif
                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pagos<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Documentos y Permisos</li>

                    <li><a href="#">Empleado</a></li>

                    <li><a href="#">Cargo</a></li>

                </ul>
            </li>


            @endif
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>

            <li>
                <a href="https://twitter.com/maridlcrmn">Follow me</a>
            </li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <div class="container">
            <div class="row">
                <section>
                    @yield('contenido')

                </section>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->