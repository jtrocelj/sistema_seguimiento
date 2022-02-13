<style>
   /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";





/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
  display: flex;
  align-items: stretch;
}

#sidebar {
  min-width: 250px;
  max-width: 250px;
 

  transition: all 0.3s;
}

#sidebar a,
#sidebar a:hover,
#sidebar a:focus {
  color: inherit;
}

#sidebar.active {
  margin-left: -250px;
}



#sidebar ul.components {
  padding: 20px 0;
  border-bottom: 1px solid #47748b;
}

#sidebar ul p {
  color: #fff;
  padding: 10px;
}

#sidebar ul li a {
  padding: 10px;
  font-size: 1.1em;
  display: block;
}

#sidebar ul li a:hover {
  color: #7386d5;
  background: #fff;
}

#sidebar ul li.active > a,
a[aria-expanded="true"] {
  color: #fff;

}

a[data-toggle="collapse"] {
  position: relative;
}

a[aria-expanded="false"]::before,
a[aria-expanded="true"]::before {
  content: "\e259";
  display: block;
  position: absolute;
  right: 20px;
  font-family: "Glyphicons Halflings";
  font-size: 0.6em;
}

a[aria-expanded="true"]::before {
  content: "\e260";
}

ul ul a {
  font-size: 0.9em !important;
  padding-left: 30px !important;
  
}



</style>

 
<link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="compactSidebar">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class=" text-center" href="{{ route('home') }}">
        <img src="{{ asset('img/brand/blue.png') }}" class="img"style="width:200px; height:200px; margin-top:-35px; ">
            
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('img/theme/usuario.png') }}">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main"  >
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                <div class="col-6 collapse-brand">
                        <a class="text-center" href="{{ route('home') }}">

                        <img src="{{ asset('img/brand/blue.png') }}" class="img text-center"style="width:200px; height:200px;  ">
                      
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <br>
          <div style="margin-top:-75px;">
                <!-- Navigation -->
            <ul class="navbar-nav"><br>
          
            <li class="nav-item">
                
                        <ul class=" list-unstyled components">
                            <li class="active">
                                <a class="nav-link active" href="#homeSubmenu" data-toggle="collapse"  role="button" aria-expanded="false">
                                <i class="fa fa-address-card" aria-hidden="true" style="color:#00008B;"></i>
                                <span class="nav-link-text" >{{ __('Listado') }}</span>
                                </a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li nav-item><a  class="nav-link" href="{{route('docente.index')}}">{{ __('Docentes') }}</a></li>
                                <li nav-item><a  class="nav-link" href="#">{{ __('Tutores') }}</a></li>
                                <li nav-item><a  class="nav-link" href="#">{{ __('Revisores') }}</a></li>
                                <li nav-item><a  class="nav-link" href="#">{{ __('Estudiantes') }}</a></li>
                                </ul>
                            </li>
                          
                        </ul>
                </li>
            <li class="nav-item">
                
                        <ul class=" list-unstyled components">
                            <li class="active">
                                <a class="nav-link active" href="#homeSubmenu11" data-toggle="collapse"  role="button" aria-expanded="false">
                                <i class="fa fa-university" style="color:#00008B;"></i>
                                <span class="nav-link-text" >{{ __('Docentes') }}</span>
                                </a>
                                <ul class="collapse list-unstyled" id="homeSubmenu11">
                                <li nav-item><a  class="nav-link" href="#">{{ __('Seguimiento') }}</a></li>
                                <li nav-item><a  class="nav-link" href="#">{{ __('Datos Personales') }}</a></li>
                               
                                </ul>
                            </li>
                          
                        </ul>
                </li>

                <li class="nav-item">
                
                <ul class=" list-unstyled components">
                    <li class="active">
                        <a class="nav-link active" href="#homeSubmenu22" data-toggle="collapse"  role="button" aria-expanded="false">
                        <i class="fa fa-graduation-cap" style="color:#00008B;"></i>
                        <span class="nav-link-text" >{{ __('Tutor') }}</span>
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu22">
                        <li nav-item><a  class="nav-link" href="#">{{ __('Seguimiento') }}</a></li>
                        <li nav-item><a  class="nav-link" href="#">{{ __('Datos Personales') }}</a></li>
                       
                        </ul>
                    </li>
                  
                </ul>
             </li>
              

             <li class="nav-item">
                
                <ul class=" list-unstyled components">
                    <li class="active">
                        <a class="nav-link active" href="#homeSubmenu33" data-toggle="collapse"  role="button" aria-expanded="false">
                        <i class="fa fa-address-book" aria-hidden="true" style="color:#00008B;"></i>{{ __('Revisor') }}
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu33">
                        <li nav-item><a  class="nav-link" href="#">{{ __('Seguimiento') }}</a></li>
                        <li nav-item><a  class="nav-link" href="#">{{ __('Datos Personales') }}</a></li>
                       
                        </ul>
                    </li>
                  
                </ul>
             </li>

             <li class="nav-item">
                
                <ul class=" list-unstyled components">
                    <li class="active">
                        <a class="nav-link active" href="#homeSubmenu44" data-toggle="collapse"  role="button" aria-expanded="false">
                        <i class="fa fa-user-plus" aria-hidden="true" style="color:#00008B;"></i>{{ __('Estudiantes') }}
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu44">
                        <li nav-item><a  class="nav-link" href="#">{{ __('Seguimiento') }}</a></li>
                        <li nav-item><a  class="nav-link" href="#">{{ __('Datos Personales') }}</a></li>
                       
                        </ul>
                    </li>
                  
                </ul>
             </li>
               
               
                @can('Categorias')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categoria.index')}}">
                        <i class="ni ni-archive-2 " style="color:#00008B;"></i> {{ __('Categorias') }}
                    </a>
                </li>
                @endcan

                @can('Productos')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('producto.index')}}">
                        <i class="ni ni-tag " style="color:#00008B;"></i> {{ __('Productos') }}  
                    </a>
                </li>
                @endcan

                @can('Clientes')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('clientes.index')}}">
                        <i class="ni ni-single-02  " style="color:#00008B;"></i> {{ __('Clientes') }}
                    </a>
                </li>
                @endcan

                @can('Vender')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pos.index')}}">
                        <i class="ni ni-shop  " style="color:#00008B;"></i> {{ __('Vender') }}
                    </a>
                </li>
                @endcan

                @can('Ventas')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ventas.index')}}">
                        <i class="ni ni-cart  " style="color:#00008B;"></i> {{ __('Ventas') }}
                    </a>
                </li>
                @endcan

                @can('Rol')
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('roles.index')}}">
                        <i class="ni ni-key-25 " style="color:#00008B;"></i> {{ __('Rol') }}
                    </a>
                </li>
                @endcan
                
                @can('Permisos')
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('permisos.index')}}">
                        <i class="ni ni-lock-circle-open " style="color:#00008B;"></i> {{ __('Permisos') }}
                    </a>
                </li>
                @endcan
               
                @can('Usuarios')
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fa fa-users " style="color:#00008B;"></i>
                        <span class="nav-link-text" >{{ __('Usuarios') }}</span>
                    </a>
               
                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('users') }}">
                                    {{ __('Listado') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.create')}}" >
                                    {{ __('Registrar') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endcan
                
            
             
                @can('Reportes')
                

                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button"  aria-controls="navbar-examples">
                        <i class="ni ni-chart-pie-35 " style="color:#00008B;"></i>
                        <span class="nav-link-text" >{{ __('Reportes') }}</span>
                    </a>
               
                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('reports.day') }}">
                                    {{ __('Reporte diario') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('reports.date')}}" >
                                    {{ __('Reportes por fecha') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endcan
               
            </ul>
            <!-- Divider -->
            <hr class="my-3">
           
          </div>
            
          
        </div>
    </div>
</nav>
