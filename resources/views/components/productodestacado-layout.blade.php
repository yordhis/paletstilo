    
    

          @php $vueltaP=0; @endphp
          @foreach ($productosDestacados as $productosDestacado)
              @if ($vueltaP < 6) 
                  @php $vueltaP++; @endphp
                  <!-- CARD-PRODUCTO -->
                  <div  {{ $attributes->merge(["class"=>"col-6 col-md-4 col-lg-2 mostrar"]) }} >
                      <article class="card fondo-body " style="border:none;">
    
                          
                                                  
                            @foreach ($productosDestacado->image as $imagen)
                                @if ($imagen->modelo == 1)
                                  
                                      <img src="{{env('APP_URL').$imagen->url}}" class="card-img-top" height="200" width="100" alt="...">
                                @endif
                            @endforeach
                      
    
                          
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
              @endif
          @endforeach





    {{-- <!-- card del producto -->
    
        {{$slot}} --}}

