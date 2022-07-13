<x-web>
       
        <x-navuno />
        <x-nav />
       
        
        <div class="container-fluid ">
            <div class="row ">

                @isset($mensaje)
                    <x-alert :color="$color">
                        <x-slot name="title">
                            {{$mensaje}}
                        </x-slot>
                    </x-alert>
                @endisset
    
               
                <x-producto-layout :value="$producto" />


                <x-title title="Productos Recomendados" ziseShadow="sm"/>
                <x-productosdestacadosmovil-layout :value="$productosDestacados" />

                <x-productodestacado-layout :value="$productosDestacados" class="mb-5"/>

                <x-carrito-layout :value="$carritos" />

                <x-footer />

               

            </div>
        </div>

        @section('jsweb')
            <script src="{{env('APP_URL')}}/js/producto.js"></script>
        @endsection
        
</x-web>
