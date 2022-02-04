
 
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
                        <i class="ni ni-circle-08 " style="color:#00008B;"></i>
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
