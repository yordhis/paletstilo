<!-- INICIO VISTA DEL PRODUCTO VERSION PC -->
                <!-- MODELOS DE IMAGENES DEL PRODUCTO -->
                <div class="col-12 col-sm-4 col-lg-2 p-3">
                    <nav class="navbar justify-content-center">
                        
                        <ul class="navbar-nav ">
                            @foreach ($producto->image as $image)
                                @php
                                    switch($image->modelo){
                                        case(1):
                                            $numeroDeModelo = "uno";
                                            break;
                                        case(2):
                                            $numeroDeModelo = "dos";
                                            break;
                                        case(3):
                                            $numeroDeModelo = "tres";
                                            break;
                                        case(4):
                                            $numeroDeModelo = "cuatro";
                                            break;
                                        
                                    }
                                @endphp 
                              
                                <li class="nav-item ">
                                    
                                    <a class="nav-link activado" id="{{$numeroDeModelo}}">
                                        <img src="{{env('APP_URL').$image->url}}"  width="150" height="95" alt="{{env('APP_URL').$image->url}}" class="rounded" id="{{$numeroDeModelo}}hijo">
                                    </a>
                                </li>

                            @endforeach
                        
                        </ul>
                        
                    </nav>  
                </div>

                <!-- IMAGEN DEL PRODUCTO -->
                <div class="col-12  col-sm-4 col-lg-5 p-3">
                    <div class="text-center">
                        @foreach ($producto->image as $imagen)
                            @if ($imagen->modelo == 1)
                                <img src="{{env('APP_URL').$imagen->url}}" class="image-producto" alt="PRODUCTO" id="image-product">
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- INFORMACION DEL PRODUCTO -->
                <div class="col-12 col-md-12 text-sm-center col-lg-5 text-lg-start">
                    <div class="d-flex flex-column ">
                            <!-- navegacion del producto -->
                            <div class="p-3 fs-5">
                                <i>
                                    <a href="{{route('web.catalogos.filtra', $producto->idCategorie )}}">{{$producto->categoria}}</a> > <a href="#"><b>{{$producto->name}}</b></a>
                                </i>
                            </div>
                            <div class="p-3" >
                                <h2>{{$producto->name}}</h2>
                            </div>
                            <div class="p-3">
                                <ul class="nav flex-column ">
                                    <li class="nav-item ">
                                    <b>Descripción</b>
                                    </li>
                                    @foreach ($producto->medidasproductos as $medidasproducto)
                                        
                                        <li class="nav-item ">
                                            {{$medidasproducto->medida->name}}: {{$medidasproducto->medida->largo}}x{{$medidasproducto->medida->ancho}}x{{$medidasproducto->medida->alto}}
                                        </li>
                                    @endforeach
                                    
                                </ul>  
                            </div>
                        
                            <div class="p-3">
                                <p class="fs-3">Precio <br>{{$producto->price .' '. $producto->current}}</p>
                            </div>
                            <!-- AGREGAR AL CARRO-->
                            <div class="p-1 ">
                            <form action="{{route('web.carritos.store')}}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-12 col-sm-12">

                                        <div class="col-2 col-sm-12 col-lg-2 col-xl-2 p-2">
                                            <label for="cantidad">Cantidad</label>
                                            <input type="number" min="1" max="10" name="cantidad" placeholder="Cantidad" value="1"  class="form-control">
                                        </div>
                                            <!-- INPUTS OCULTOS-->
                                            
                                            <input type="hidden" value="{{$producto->id}}" name="idProduct">
                                            <input type="hidden" value="{{$producto->slug}}" name="slug">
                                        <div class="col-12  p-2">
                                        
                                            <button class="btn btn-warning btn-lg form-control"> Agregar al carro</button>
                                         
                                                {{-- <a  class="btn btn-warning btn-lg form-control" id="abrir-carro-compra">
                                                    <i class="bi bi-cart3"></i>
                                                    Agregar al carro
                                                </a> --}}
                                        </div>
                                    </div>

                                </div>
                            </form>
                            </div>

                            <div class="p-1">
                            <form action="#agregarFavorito" method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="col-12  p-2">
                                            <button type="submit" class="btn btn-lg border-primary activado-boton-favorito form-control">
                                                    <i class="bi bi-suit-heart"></i>
                                                    Agregar a Favorito
                                                </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            </div>

                            <div class="p-3">
                                <p class="fs-6">Disponibilidad: <b>{{$producto->disponible}}</b></p>
                                <p >Solicítalo con Código: <b>{{$producto->code}}</b></p>
                                <p class="fs-6"> <a  href="#" data-bs-toggle="modal" data-bs-target="#CondicionesDelServicio">
                                    Condiciones del Servicio
                                </a></p>
                            </div>
                            
                    </div>
                </div>
            <!-- FIN VISTA DEL PRODUCTO VERSION PC -->