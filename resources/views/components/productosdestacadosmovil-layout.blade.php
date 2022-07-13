<!-- VISTA MOVIL PRODUCTOS DESTACADOS -->
    <!-- Carousel -->
    <div id="destacado" class="carousel slide ocultar" data-bs-ride="carousel">

       
           <!-- The slideshow/carousel -->
           <div class="carousel-inner">
                                    
                @php 
                    $vuelta=1;
                    $resultItem = count($productosDestacados) % 2;
                @endphp
                @foreach ($productosDestacados as $productosDestacado)
                    @php
                        $vuelaItem = $vuelta % 2
                    @endphp
                    <!-- APERTURA DE ITEM -->
                    @if ($vuelta == 1 && $vuelaItem == 1)
                        <div class="carousel-item active"> 
                            <div class="container">
                                <div class="row">
                    @elseif($vuelaItem == 1)
                        <div class="carousel-item ">
                            <div class="container">
                                <div class="row">
                    @endif
                        
                        <!-- APERTURA DE CARD DEL PRODUCTO -->
                        <div class="col-6" >
                            <article class="card fondo-body " style="border:none;">
                            
                                <div class="card-head">
                                    @php $vueltaI=0; @endphp
                                                            
                                    @foreach ($productosDestacado->image as $imagen)
                                        @if ($vueltaI == 0)
                                            @php $vueltaI++; @endphp
                                                <img src="{{env('APP_URL').$imagen->url}}" class="card-img-top" height="175" width="100" alt="...">
                                                {{-- <img src="{{ env('APP_URL').$imagen->url}}" class="" alt="img" height="100" width="120" alt="imagen del producto"> --}}
                                            @endif
                                    @endforeach
                                </div>
                                
                                <div class="card-body ">
                                    <p class="card-title fs-6 card-title-catalogo ">
                                    {{$productosDestacado->name}}
                                    
                                    </p>
                                
                                    <div class=" d-flex flex-column fs-5 " >
                                        
                                        <div class="d-flex justify-content-end">Precio</div>
                                        <div class="d-flex justify-content-end">
                                            {{$productosDestacado->price . " " . $productosDestacado->current}}
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="card-footer bg-warning text-center">
                                    
                                    <!-- boton -->
                                    <a href="{{route('web.producto.show', $productosDestacado)}}" class="nav-link text-white fs-6"> 
                                        <i class="bi bi-eye "></i>
                                        Ver Producto
                                    </a>    
                                </div> 
                            </article> 
                        </div>
                        <!-- CIERRE DE CARD DEL PRODUCTO -->
                                                
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
        
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#destacado" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#destacado" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>


        <!-- up 10px -->
        <div class="col-12" style="height: 10px;"></div>
    </div>