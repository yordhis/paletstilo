        <!-- VISTA DE TELEFONO -->

            {{-- TERRAZA --}}
            <div class="col-12 p-2 ocultar">
                                            
                <div class="caja-relative ocultar">

                        <!-- imagen de fondo -->
                        <img src="{{env('APP_URL')}}/img/categoriaTerrazas.png"  height="300" class="w-100 rounded ">
                    
                        <!-- texto de la categoria -->

                        <div class="caja-absolute-texto text-white">

                            <div class="d-flex flex-column mb-3">

                                <div class="d-flex justify-content-start">
                                    <h1 class="fs-2" style="font-family: Arial, Helvetica, sans-serif;">Especial</h1>
                                </div>

                                <div class="d-flex justify-content-start">
                                    <h1 class="fs-1"><b>Terrazas</b></h1>
                                </div>

                            </div>
                        </div> 

                        <!-- boton ver mas -->
                        <div class="caja-absolute">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('web.catalogos.filtra', 'terrazas') }}" class="btn btn-warning text-white fs-4">
                                    <b>Ver mas</b>
                                </a>
                            </div>    
                        </div>
                </div>
            </div>

            {{--  Mesas Deco --}}
            <div class="col-12 p-2 ocultar">

                <div class="caja-relative ocultar">

                        <!-- imagen de fondo -->
                        <img src="{{env('APP_URL')}}/img/categoriaMesas.png"  height="300"  class="w-100 rounded ">
                    
                        <!-- texto de la categoria -->

                        <div class="caja-absolute-texto text-white">

                            <div class="d-flex flex-column mb-3">

                                <div class="d-flex justify-content-start">
                                    <h1 class="fs-2" style="font-family: Arial, Helvetica, sans-serif;">Especial</h1>
                                </div>

                                <div class="d-flex justify-content-start">
                                    <h1 class="fs-1"><b>Mesas Deco</b></h1>
                                </div>

                            </div>
                        </div> 

                        <!-- boton ver mas -->
                        <div class="caja-absolute">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('web.catalogos.filtra', 'mesas-deco') }}" class="btn btn-warning text-white fs-4">
                                    <b>Ver mas</b>
                                </a>
                            </div>    
                        </div>
                </div>
            </div>

            {{-- Complementos Hogar --}}
            <div class="col-12 p-2 ocultar">

                <div class="caja-relative ocultar">

                        <!-- imagen de fondo -->
                        <img src="{{env('APP_URL')}}/img/categoriaHogar.png"  height="300" class="w-100 rounded ">
                    
                        <!-- texto de la categoria -->

                        <div class="caja-absolute-texto text-white">

                            <div class="d-flex flex-column mb-3">

                                <div class="d-flex justify-content-start">
                                    <h1 class="fs-2" style="font-family: Arial, Helvetica, sans-serif;">Especial</h1>
                                </div>

                                <div class="d-flex justify-content-start">
                                    <h1 class="fs-1"><b>Complementos Hogar</b></h1>
                                </div>

                            </div>
                        </div> 

                        <!-- boton ver mas -->
                        <div class="caja-absolute">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('web.catalogos.filtra', 'complemento-hogar') }}" class="btn btn-warning text-white fs-4">
                                    <b>Ver mas</b>
                                </a>
                            </div>    
                        </div>
                </div>
            </div>

            {{-- Combos Premiums --}}
            <div class="col-12 p-2 ocultar">

                <div class="caja-relative ocultar">

                        <!-- imagen de fondo -->
                        <img src="{{env('APP_URL')}}/img/categoriaCombos.png"  height="300" class="w-100 rounded ">
                    
                        <!-- texto de la categoria -->

                        <div class="caja-absolute-texto-lg text-white">

                            <div class="d-flex flex-column mb-3">

                                <div class="d-flex justify-content-start">
                                    <h1 class="fs-2" style="font-family: Arial, Helvetica, sans-serif;">
                                        Las combinaciones 
                                        <br>perfectas para ti</h1>
                                </div>

                                <div class="d-flex justify-content-start">
                                    <h1 class="fs-1"><b>Combos Premiums</b></h1>
                                </div>

                            </div>
                        </div> 

                        <!-- boton ver mas -->
                        <div class="caja-absolute">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('web.catalogos.filtra', 'combos-premiums') }}" class="btn btn-warning text-white fs-4">
                                    <b>Ver mas</b>
                                </a>
                            </div>    
                        </div>
                </div>
            </div>

        <!-- FIN VISTA DE TELEFONO -->