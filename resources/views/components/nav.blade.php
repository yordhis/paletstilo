 <!-- MENU DE NAVEGACION MOVIL -->
    <div class="container-fluid  ocultar bg-light-nav border-bottom border-info border-4">
        
        <ul class="nav nav-pills nav-justified">
            <!-- CARRITO DE COMPRA -->
            <li class="nav-item d-flex d-flex justify-content-start">
                <button class="btn p-4 m-0 ">
                    <div class="position-relative ">
                        <i class="fs-1 bi bi-cart3 "></i>
                        
                        <span class="position-absolute top-0 start-100  translate-middle badge rounded-pill bg-primary">
                            1
                        </span>
                    </div>
                </button>
            </li>
        
            <!-- LOGO DE PALETSTILO -->
            <li class="nav-item">
                
                <a class="nav-link" href="{{env('APP_URL')}}">
                    <img src="{{env('APP_URL')}}/img/pls-ico.png" width="75" height="75" alt="Logo de Paletstilo" class="img-zise">
                </a>
            
            
            </li>

        
            <!-- CATEGORIAS DESPLEGABLE-->
            <li class="nav-item dropdown position-relative d-flex align-items-center justify-content-end">
            
                <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuMovil">
                    <span class="zise-emoji-50 bi bi-list"></span>
                </a>
            </li> 
        
        
        </ul>
        <div class="d-flex d-flex justify-content-center">

        
                <strong class="p-0 m-0" style="font-size: 14px;">Muebles Paletstilo</strong>
            
        </div>

        <div class="d-flex d-flex justify-content-center">

            <div class="col-10 p-2">
                <form action="index.html" method="post" class="position-relative">
                    <input type="text" class="form-control border-1 rounded-pill" placeholder="¿Que estas buscando?">
                    <button class="btn fs-2 bi bi-search position-absolute top-0 end-0 p-1 m-0">
                    </button>
                </form>
            </div>
        </div>
        
    </div>


    <div class="collapse navbar-collapse fondo-footer" id="menuMovil">
        <ul class="navbar-nav">
            <li><a class="dropdown-item text-white" href="#">TERRAZAS</a></li>
            <li><hr class="dropdown-divider text-white"></li>
            <li><a class="dropdown-item text-white" href="#">MESAS DECO</a></li>
            <li><hr class="dropdown-divider text-white"></li>
            <li><a class="dropdown-item text-white" href="#">COMPLEMENTOS HOGAR</a></li>
            <li><hr class="dropdown-divider text-white"></li>
            <li><a class="dropdown-item text-white" href="#">PROTECTOR DE MUEBLES</a></li>                     
               
            <li><hr class="dropdown-divider text-white"></li>
            <li><a class="dropdown-item text-white" href="./recursos/catalogo_enero_2022.pdf">Ver Catalogo</a></li>
        
        </ul>
    </div>
<!-- END MENU DE NAVEGACION MOVIL -->

<!-- MENU DE NAVEGACION PC -->
    <div class="mostrar">
        <nav class="d-flex justify-content-center navbar navbar-expand-lg  navbar-light bg-light-nav border-bottom border-info border-4">
            
            <div class="d-flex  p-1 text-white  bg-light-nav ">
                <!-- LOGO -->
                <div class="">
                    <a class="nav-link" href="{{env('APP_URL')}}">
                        <img src="{{env('APP_URL')}}/img/pls-ico.png" width="75" height="75" alt="Logo de Paletstilo" >
                    </a>
                </div>

                <!-- CATEGORIAS -->
                <div class="p-2 ">
                    <ul class="nav me-auto  ">
                        <!-- CATEGORIAS -->
                        <li class="nav-item dropdown ">
                    
                                <a class="text-primary nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-flex flex-row">
                                        <div class="p-0  ">
                                            <i class="zise-emoji-50 bi bi-list d-flex d-flex align-items-center">
                                                <p class="fs-6 p-0 m-2">
                                                    CATEGORIAS
                                                </p>    
                                            </i>
                                        </div>
                                    </div>
                                </a>

                            <!-- SILLON | MESA DE CENTRO | BANQUETA | MESA TABUTARE | PUF -->
                            <ul class="dropdown-menu bg-primary " aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item text-white" href="#">TERRAZAS</a></li>
                                <li><hr class="dropdown-divider text-white"></li>
                                <li><a class="dropdown-item text-white" href="#">MESAS DECO</a></li>
                                <li><hr class="dropdown-divider text-white"></li>
                                <li><a class="dropdown-item text-white" href="#">COMPLEMENTOS HOGAR</a></li>
                                <li><hr class="dropdown-divider text-white"></li>
                                <li><a class="dropdown-item text-white" href="#">PROTECTOR DE MUEBLES</a></li>
                                
                                
                            </ul>
                        </li> 
                        
                    </ul>
                </div>

                <!-- BUSCADOR -->
                <div class="p-2 ">
                    <ul class="nav me-auto zise-input-shear"  >
                            <div class="p-2 w-100">
                                <form action="index.html" method="get" class="position-relative ">
                                    <input type="text" class="form-control form-control-lg rounded-pill "  placeholder="¿Que estás buscando?">
                                    <button class="btn fs-5 bi bi-search position-absolute top-0 end-0 p-2 m-0">
                                    </button>
                                </form>
                            </div>
                    </ul>
                </div>

                <!-- LOGIN, REGISTRO, CARRITO Y FAVORITO -->
                <div class="">
                    <ul class="nav ">
                        <!-- REGISTRO Y LOGIN -->
                        <li class="nav-item text-primary h-100" >
                                
                            @auth
                           
                            <a  class="d-flex nav-brand nav-link" href="{{route('profile.show')}}">

                                <i class="bi bi-person-fill fs-1 p-0 m-0 text-secondary border rounded-pill"></i>
                                
                                    <p class="p-0 m-2 font-lato-black">
                                        <strong> Bienvenid@</strong>
                                        <br><span style=" font-family:Lato-Regular;"> {{auth()->user()->name}} </span> 
                                    </p>
                                
                                    <div class="vr"></div>
                            </a>
                            @else

                                <a  class="d-flex nav-brand nav-link" href="{{route('register')}}">

                                    <i class="bi bi-person-fill fs-1 p-0 m-0 text-secondary border rounded-pill"></i>
                                    
                                        <p class="p-0 m-2 font-lato-black">
                                            <strong> Bienvenid@</strong>
                                            <br><span style=" font-family:Lato-Regular;">Inicia sesión o Regístrate </span> 
                                        </p>
                                    
                                        <div class="vr"></div>
                                </a>
                            @endauth
                        </li>

                            
                        <!-- FAVORITOS -->
                        <li class="nav-item m-2 bg-secondary rounded border">
                            <a href="#favorito">
                                <button type="button" class="btn  position-relative">
                                <i class="bi bi-suit-heart fs-2"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    1
                                    <span class="visually-hidden">FAVORITOS</span>
                                    </span>
                                </button>              
                            </a>
                        </li>

                        <!-- CARRITOS -->
                        <li class="nav-item m-2 bg-secondary rounded-2 border">
                            <a href="#favorito">
                                <button type="button" class="btn  position-relative">
                                <i class="bi bi bi-cart3 fs-2"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    1
                                    <span class="visually-hidden">CARRITO</span>
                                    </span>
                                </button>              
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>    
    </div>
<!-- END MENU DE NAVEGACION PC -->