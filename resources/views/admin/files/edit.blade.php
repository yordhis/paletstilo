<x-app-layout>  

    <x-jet-welcome class="mt-5" >

        <x-progreso>
            <x-slot name="color">
                bg-success
            </x-slot>
            <x-slot name="porcentaje">
                75%
            </x-slot>
        </x-progreso>

        <div>
            <h1 class="block h-12 w-auto">
                <i class="bi bi-box-seam"></i>
                Actualizar imagenes del producto: 
                {{$producto->name ?? ''}}
            </h1>
        </div>


        
        @section('css')
            <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
        @endsection
       
            {{-- imagenes actuales y accion de ELIMINAR --}}
            <x-jet-label class="fs-4">
                Imagenes Actuales del producto
            </x-jet-label >
            <div class="d-inline-flex p-3 ">
                    
                @foreach ($files as $file)  
                    <div class="p-2 position-relative">

                        <form action="{{route("admin.files.destroy", $file)}}" method="post">
                            @csrf
                            @method('delete')
                            <img src="{{env('APP_URL').$file->url}}" class="image rounded " height="100" width="100" alt="img">
                            <button> <i class="bi bi-x fs-3 text-danger position-absolute top-0 end-0"></i> </button>
                        </form>   
                     
                    </div>
                @endforeach

            </div>

            {{-- Seccion de agregar imagenes --}}

            <x-jet-label class="fs-4 mb-2">
                Agregar nuevas imagenes
            </x-jet-label >

            <form action="{{route("admin.files.store")}}"
                method="POST"
                enctype="multipart/form-data"
                class="dropzone"
                id="my-awesome-dropzone">
                <input type="hidden" name="idProducto" value="{{$producto->id}}">
            </form>

    

        <x-nav-acciones>
            <a href="{{route("admin.productos.edit", $producto)}}" class="btn btn-primary mt-5">
                Regresar a editar producto
            </a>
        
            <a href="{{route("admin.productos.index")}}" class="btn btn-primary  mt-5">
                Ver todos los productos
            </a>
        
            <a href="{{route("admin.medidasproducto.crear", $producto->id)}}" class="btn btn-success mt-5">
                Siguiente paso actualizar medidas
            </a>
        </x-nav-acciones>
        
        @section('js')
            <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
            
                <script>
                   
                    Dropzone.options.myAwesomeDropzone = {
                        // Configuration options go here
                        paramName: "file",
                        headers: {
                            "X-CSRF-TOKEN":"{{csrf_token()}}"
                            
                        },
                        dictDefaultMessage: "Arrastra y deja tu imagen",
                        acceptedFiles: 'image/*'
                        
                    };
                </script>
           
        @endsection
        {{-- <x-form>
            
            <x-slot name="route">
                {{route("admin.files.store")}}
            </x-slot>  

            <x-slot name="method">
                POST
            </x-slot>   

            <x-slot name="inputs">
                @csrf
                @method('PUT')
                <div class="row">
                   
                   
                    <div class="col">
                        <label for="file">Imagen</label>
                        <input type="file" class="form-control" name="file">
                        @error('file')
                        <small> {{ $message}} </small>
                        <br>        
                        @enderror
                    </div>
                    <input type="text" class="form-control" value="{{$producto->id ?? ''}}" name="idProducto">
                </div>

                
                <div class="row">
                    <div class="col mt-2">
                        <button class="btn btn-primary">Agregar imagen</button>
                    </div>
                </div>

            </x-slot>   

        </x-form> --}}

    </x-jet-welcome>
    
    

    
</x-app-layout>  




