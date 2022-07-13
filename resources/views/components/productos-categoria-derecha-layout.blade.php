
    
    <!-- RESOLUCION >= 1000PX -->    
        <!-- BODY CON CARRUCEL DE PRODUCTOS Y SU CATEGORIA MESA DE CENTRO (DERECHA)-->
        <div class="col-12 m-0 p-2 mostrar ocultar-menor-mil">
                                                
            <div class="p-0 m-2 text-left">
                <div class="carousel-item active ">
                    <div class="position-relative">

                            <div class="d-flex justify-content-end">
                                <img src="{{env('APP_URL')}}/img/{{$nameImage}}"  height="380" width="600" >
                            </div>
                        
                            <div class="position-absolute top-50  end-0 p-3 text-white">

                                <div class="d-flex flex-column mb-3">

                                    <div class="d-flex justify-content-end">
                                        <h1 class="fs-2" style="font-family: Arial, Helvetica, sans-serif;">{{$eslogan}}</h1>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <h1 class="fs-1"><b>{{$titulo}}</b></h1>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('web.catalogos.filtra', $categoria) }}" class="btn btn-warning text-white fs-4">
                                            <b>Ver mas</b>
                                        </a>
                                    </div>
                                        
                                </div>
                                
                            </div>
                            
                    </div>
                </div>
                
                <div class="row" >
                    <div class="col-12" style="height: 10px;"></div>
                
                    <div class="col-8 ">

                        <div id="{{$categoria}}" class="carousel carousel-dark slide p-2 bg-white" data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="false">
                                            
                            <div class="carousel-inner">
                            
                                @php 
                                $vuelta=1;
                                $resultItem = count($productos) % 4;
                            @endphp

                            @foreach ($productos as $producto)
                                @php
                                    $vuelaItem = $vuelta % 4
                                @endphp
                                <!-- APERTURA DE ITEM -->
                                @if ($vuelta == 1)
                                    <div class="carousel-item active"> 
                                        <div class="container">
                                            <div class="row">
                                @elseif($vuelaItem == 1)
                                    <div class="carousel-item ">
                                        <div class="container">
                                            <div class="row">
                                @endif

                              
                                            <!-- card del producto -->
                                                <div class="col-3  p-1 " >
                                                    <article class="card fondo-body " style=" ">
                
                                                        <div class="card-head">
                                                         
                                                                                    
                                                            @foreach ($producto->image as $imagen)
                                                                @if ($imagen->modelo == 1)
                                                                  
                                                                        <img src="{{env('APP_URL').$imagen->url}}" class="card-img-top" height="135" width="100" alt="...">
                                                                @endif
                                                            @endforeach
                                                        </div>  
                                                        
                                                        <div class="card-body ">
                                                            <p class="card-title card-title-categoria text-card-producto  ">
                                                            {{$producto->name}}
                                                            
                                                            </p>
                                                        
                                                            <div class=" d-flex flex-column text-card-producto" >
                                                                
                                                                <div class="d-flex justify-content-end">Precio</div>
                                                                <div class="d-flex justify-content-end">
                                                                    {{$producto->price . " " . $producto->current}}
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                        
                                                        <div class="card-footer bg-warning text-center">
                                                            
                                                            <!-- boton -->
                                                            <a href="{{route('web.producto.show', $producto)}}" class="nav-link text-white fs-6"> 
                                                                Ver producto
                                                            </a>    
                                                        </div> 
                                                    </article>
                                                </div>
                                                   
                                                    
                                                                            
                                    <!-- CIERRE DE ITEM -->
                                @if ($vuelaItem == 0)
                                            </div> 
                                        </div> 
                                    </div> 
                                    
                                @endif



                                @php $vuelta++; @endphp
                            @endforeach

                                @if ($resultItem >= 1)
                                            </div> 
                                        </div> 
                                    </div> 
                                @endif
                                        
                                <button class="carousel-control-prev" type="button" data-bs-target="#{{$categoria}}" data-bs-slide="prev">      
                                    <span class="carousel-control-prev-icon" aria-hidden="true"> </span>                                                                     
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#{{$categoria}}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        
<!-- FIN RESOLUCION >= 1000PX -->

<!-- ##### RESOLUCION < 1000PX #####-->
        <!-- BODY CON CARRUCEL DE PRODUCTOS Y SU CATEGORIA MESA DE CENTRO (DERECHA)-->
        <div class="col-12 m-0 p-2 mostrar-menor-mil">
                                
            <div class="p-0 m-2 text-left">
                <div class="carousel-item active ">
                    <div class="position-relative">

                            <div class="d-flex justify-content-end">
                                <img src="{{env('APP_URL')}}/img/{{$nameImage}}"  height="380" width="600" >
                            </div>
                        
                            <div class="position-absolute top-50  end-0 p-3 text-white">

                                <div class="d-flex flex-column mb-3">

                                    <div class="d-flex justify-content-end">
                                        <h1 class="fs-2" style="font-family: Arial, Helvetica, sans-serif;">{{$eslogan}}</h1>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <h1 class="fs-1"><b>{{$titulo}}</b></h1>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('web.catalogos.filtra', $categoria) }}" class="btn btn-warning text-white fs-4">
                                            <b>Ver mas</b>
                                        </a>
                                    </div>
                                        
                                </div>
                                
                            </div>
                            
                    </div>
                </div>
                
                <div class="row" >
                    <div class="col-12" style="height: 25px;"></div>
                
                    <div class="col-6 ">

                        <div id="{{$categoria}}1000" class="carousel carousel-dark slide p-2 bg-white" data-bs-ride="carousel" data-bs-touch="false" data-bs-interval="false">
                                            
                            <div class="carousel-inner">
                                
                                @php 
                                $vuelta=1;
                                $resultItem = count($productos) % 2;
                            @endphp

                                @foreach ($productos as $producto)
                                    @php
                                        $vuelaItem = $vuelta % 2
                                    @endphp
                                    <!-- APERTURA DE ITEM -->
                                    @if ($vuelta == 1)
                                        <div class="carousel-item active"> 
                                            <div class="container">
                                                <div class="row">
                                    @elseif($vuelaItem == 1)
                                        <div class="carousel-item ">
                                            <div class="container">
                                                <div class="row">
                                    @endif

                          
                                        <!-- card del producto -->
                                            <div class="col-6  p-1 " >
                                                <article class="card fondo-body " style=" ">
            
                                                    <div class="card-head">
                  
                                                        @foreach ($producto->image as $imagen)
                                                            @if ($imagen->modelo == 1)
                                                                    <img src="{{env('APP_URL').$imagen->url}}" class="card-img-top" height="135" width="100" alt="...">
                                                            @endif
                                                        @endforeach
                                                    </div>  
                                                    
                                                    <div class="card-body ">
                                                        <p class="card-title card-title-categoria-dos text-card-producto  ">
                                                        {{$producto->name}}
                                                        
                                                        </p>
                                                    
                                                        <div class=" d-flex flex-column text-card-producto" >
                                                            
                                                            <div class="d-flex justify-content-end">Precio</div>
                                                            <div class="d-flex justify-content-end">
                                                                {{$producto->price . " " . $producto->current}}
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                    
                                                    <div class="card-footer bg-warning text-center">
                                                        
                                                        <!-- boton -->
                                                        <a href="{{route('web.producto.show', $producto)}}" class="nav-link text-white fs-6"> 
                                                            Ver producto
                                                        </a>    
                                                    </div> 
                                                </article>
                                            </div>
                                               
                                                
                                                                        
                                        <!-- CIERRE DE ITEM -->
                                    @if ($vuelaItem == 0)
                                                </div> 
                                            </div> 
                                        </div> 
                                        
                                    @endif



                                    @php $vuelta++; @endphp
                                @endforeach

                                @if ($resultItem == 1)
                                            </div> 
                                        </div> 
                                    </div> 
                                @endif     
                                        
                               
                                        
                                <button class="carousel-control-prev" type="button" data-bs-target="#{{$categoria}}1000" data-bs-slide="prev">      
                                    <span class="carousel-control-prev-icon" aria-hidden="true"> </span>                                                                     
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#{{$categoria}}1000" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>

<!-- ##### FIN RESOLUCION < 1000PX #####-->