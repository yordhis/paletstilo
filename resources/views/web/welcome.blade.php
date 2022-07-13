<x-web>
       
        <x-navuno />
        <x-nav />
        <x-carrucelprincipal />
        
        <div class="container-fluid ">
            <div class="row ">

                <x-title title="Productos Destacados" ziseShadow="lg"/>

                <x-productodestacado-layout :value="$productosDestacados"/>

                <x-productosdestacadosmovil-layout :value="$productosDestacados"/>
                
                <x-game />

                <x-promocion />

                <x-categoriamovil />
               
                <x-productos-categoria-izquierda-layout :value="$productosPorCategoria['terrazas']" titulo="Terrazas" eslogan="Especial"  categoria="terrazas" nameImage="categoriaTerrazas.png"/>
                
                <x-productos-categoria-derecha-layout :value="$productosPorCategoria['mesasDeco']" titulo="Mesa Deco" eslogan="Para el Hogar"  categoria="mesa-deco" nameImage="categoriaMesas.png"/> 
                
                <x-productos-categoria-izquierda-layout :value="$productosPorCategoria['complementoHogar']" titulo="Complementos Hogar" eslogan="Especial"  categoria="complemento-hogar" nameImage="categoriaHogar.png"/>
                
                <x-productos-categoria-derecha-layout :value="$productosPorCategoria['combosPremiums']" titulo="Complementos Hogar new" eslogan="Especial"  categoria="combos-premiums" nameImage="categoriaCombos.png"/>

                @section('jsweb')
                    <script src="{{env('APP_URL')}}/js/paletgame.js" ></script>
                @endsection
                
                <x-footer />


            </div>
        </div>

     
        
</x-web>
