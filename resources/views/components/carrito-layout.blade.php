<!-- MODAL DEL CARRITO DE COMPRA -->
<div class="col-4 bg-secondary modal-carrito" id="carro-de-compra" style="display:{{$_GET['active'] ?? 'none'}}; width: 450px;">
    
    <div class="row">
            <div class="col-6">
                <!-- TITULO -->
                <p class="fs-5">Tu Carro de Compra</p>
            </div>
            <div class="col-5 text-end">
                <!-- CERRAR -->
                    <a href="#" id="cerrar-carro-compra">
                        <i class="bi bi-x fs-4"></i>
                    </a>
            </div>

            {{-- carrito --}}
            <div class="col-12">
                <div class="lista-carro-compra">
                    <div class="row">
                        
                            <!-- PRODUCTO EN CARRO -->
                            @if (!empty($carritos))
                                @foreach ($carritos as $carrito)
                                    
                                    <div class="col-11 p-2" >
                                        <article class="card p-2">
                                            
                                            <div class="row">
                                                <div class="col-10">
                                                    <p class="fs-5">{{$carrito->name}}</p>
                                                </div>

                                                <div class="col-2 fs-4">
                                                    <form action="{{route('web.carritos.destroy', $carrito->idCarrito)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button>

                                                            <i class="bi bi-trash"></i>                                                            
                                                        </button>
                                                    
                                                    </form>
                                                
                                                
                                                </div>

                                                <div class="col-4">

                                                    @foreach ($carrito->image as $imagen)
                                                    @if ($imagen->modelo == 1)
                                                        <img src="{{env('APP_URL').$imagen->url}}" class="" alt="img" height="100" width="120">
                                                    @endif
                                                @endforeach
                                                    
                                                </div>

                                                <div class="col-6">
                                                {{$carrito->disponible}}
                                                </div>
                                                <!-- bara gris -->
                                                <div class="col-12 p-2 ">
                                                    <div class="border-bottom"></div>
                                                </div>

                                                <div class="col-4">
                                                    <p>
                                                        Unidad<br>
                                                        <strong>{{$carrito->price. " " . $carrito->current}}</strong>
                                                    </p>
                                                    
                                                </div>
                                                <div class="col-4">
                                                    <label for="cantidad">Cantidad</label>
                                                    <input type="number" min="1" max="25" value="{{$carrito->cantidad}}" name="cantidad" id="cantidad" class="form-control">
                                                    <input type="hidden" id="precio" value="{{$carrito->price}}" >
                                                </div>
                                                <div class="col-4">
                                                    <p>
                                                        Total<br>
                                                        <strong id="total"></strong>
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                                
                                        </article> 
                                    </div>
                                @endforeach
                            @else
                                <div class="col-11 p-2" >
                                    <p class="p-5 mt-5 fs-4">
                                        {{'No hay productos en el carrito'}}
                                    </p>
                                </div>
                            @endif
                            
                    </div>       
                </div>
            </div>

            <div class="col-4 pie-lista-carro-compra">
                <div class="row">
                    <div class="col-11">
                        <div class="border-bottom"></div>
                    </div>
                    <div class="col-6">
                        <p>Total Estimado</p>
                    </div>

                    <div class="col-5 text-end">
                        <b id="totalEstimado"></b>
                    </div>
                    <div class="col-1"></div>

                    <div class="col-11">
                        <a href="carroDeCompra.html" class="btn btn-warning btn-lg form-control">
                            Ir al carro
                        </a>
                    </div>
                    <div class="col-1"></div>

                    <div class="col-11">
                        <a  href="finalizarCompra.html" class="btn btn-lg form-control activado">
                        Finalizar Compra
                        </a>
                    </div>
                    
                </div>
            </div>



    </div>
</div>
<!-- CIERRE MODAL DEL CARRITO DE COMPRA -->

<script>
       document.getElementById("cantidad").addEventListener("click", function displayImg() {
        precio = parseInt(document.getElementById('precio').value)
        cantidad = parseInt(document.getElementById('cantidad').value)
        total = precio * cantidad
        document.getElementById("total").innerHtml = total;
    });
</script>