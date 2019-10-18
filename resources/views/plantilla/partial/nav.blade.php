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


            <li><a href="{{ URL('/login') }}">Iniciar Session</a></li>
            @if (Auth::guest())

            <!-- <li><a href="{{ URL('/register') }}">Registrar</a></li> -->

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
            <!-- Modulo Administracion y Seguridad -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracion y Seguridad<span
                        class="caret"></span></a>
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

            <!--Modulo Reclutamiento-->
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

                    <li><a href="{{URL('/postreclut')}}">Gestionar Postulante Reclutado</a></li>

                    @if($recursos['Seleccion'])
                    <li><a href="{{URL('/seleccion')}}">Gestionar Seleccion</a></li>
                    @endif
                    @if($recursos['Entrevista'])
                    <li><a href="{{URL('/entrevista')}}">Programar Entrevista</a></li>
                    @endif

                    <li><a href="{{URL('/periodoprueba')}}">Gestionar PeriodoPrueba</a></li>

                    <li><a href="{{URL('/evaluacion')}}">Gestionar Evaluacion</a></li>

                    <li><a href="{{URL('/planillaevaluacion')}}">Planilla Evaluacion</a></li>

                </ul>
            </li>

            <!--Modulo Empleado-->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empleado<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Administracion</li>

                    <li><a href="{{URL('/empleado')}}">Gestionar Empleado</a></li>

                    @if($recursos['Cargo'])
                    <li><a href="{{URL('/cargo')}}">Gestionar Cargo</a></li>
                    @endif

                    <!-- Gestionar Turno -->

                    <!-- Gestionar HOrarios -->

                    <li><a href="{{URL('/departamento')}}">Gestionar Departamento</a></li>

                    <li><a href="{{URL('/capacitacion')}}">Gestionar Capacitacion</a></li>

                    <li><a href="{{URL('/informacionprivada')}}">Gestionar Informacion Privada</a></li>

                    <!-- Gestionar Solicitud de auscencia-->

                    <li><a href="{{URL('/jefedepartamento')}}">Gestionar Jefe Por Departamento</a></li>
                </ul>
            </li>

            <!-- Modulo Documentos y Permisos -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentos <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Documentos y Permisos</li>

                    <li><a href="{{URL('/contrato')}}">Gestionar Contrato</a></li>

                    <!-- Gestionar Beneficios-->

                    @if($recursos['Seguro'])
                    <li><a href="{{URL('/seguro')}}">Gestionar Seguros</a></li>
                    @endif

                    <!-- Gestionar Permiso -->

                    @if($recursos['Vacacion'])
                    <li><a href="{{URL('/vacacion')}}">Gestionar Vacaciones</a></li>
                    @endif

                    <!-- Gestionar Asistencia-->

                    <!-- Gestionar Memorandum -->

                    <!-- Gestionar Tipo de Memorandum -->

                    <!-- Gestionar Reporte -->
                </ul>
            </li>

            <!-- Modulo Sueldos -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sueldos<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Sueldos y salarios</li>

                    <!-- Gestionar Salarios -->

                    <!-- Gestionar Descuentos -->

                    <!-- Gestionar Planilla de pagos-->

                    <!-- Gestionar Tipo de descuento -->

                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notificacion<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Notificaciones</li>

                    <!-- Registrar Usuario -->

                    <!-- Gestionar Notificacion -->

                    <!-- Visualizar Entrevista de trabajo -->

                    <!-- Visualizar historial de planilla -->

                    <!-- Visualizar oferta de trabajo -->

                </ul>
            </li>

            @endif

            <li>
                <a href="https://www.facebook.com/rrhhsi2/?modal=admin_todo_tour" target="blank">Facebook</a>
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
                <section>
                    @yield('contenido')
                </section>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->