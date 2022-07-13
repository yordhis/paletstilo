<x-app-layout>  

    @php
        $mensaje = $_GET['mensaje'] ?? null != null ? $_GET['mensaje'] : null;
        $color = $_GET['color'] ?? null != null ? $_GET['color'] : null;
    @endphp

    <x-jet-welcome  class="mt-5"> 
        @isset($mensaje)
            <x-alert :color="$color">
                <x-slot name="title">
                    {{$mensaje ?? $_GET['mensaje']}}
                </x-slot>
            </x-alert>
        @endisset

        <div>
            <h1 class="block h-12 w-auto">
                <i class="bi bi-signpost-2"></i>
                Configurando tipos de pagos
            </h1>
        </div>

        
        <x-form>
            
            <x-slot name="route">
                {{route("admin.tiposdepagos.store")}}

            </x-slot>  

            <x-slot name="method">
                {{'POST'}}
            </x-slot>   

            <x-slot name="inputs">
                @csrf
                <div class="row">
                   
                    <div class="col-12 col-sm-6">
                        <label for="name">Nombre del tipo de pago</label>
                        <input type="text" class="form-control" leng="50" placeholder="Ejemplo: PayPal" name="name" value="{{ old('name', $tiposdepago->name ?? '') }}">
                        @error('name')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="titular">Titular</label>
                        <input type="text" class="form-control" leng="50" placeholder="Ejemplo: Juan Peréz " name="titular" value="{{ old('titular', $tiposdepago->titular ?? '') }}">
                        @error('titular')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="accountNumber">Número de Cuenta</label>
                        <input type="number" class="form-control" leng="50" placeholder="Ejemplo: 010212345687 " name="accountNumber" value="{{ old('accountNumber', $tiposdepago->accountNumber ?? '') }}">
                        @error('accountNumber')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                    <div class="col-12 col-sm-6">
                        <label for="idCard">Identificación o ID Card</label>
                        <input type="number" class="form-control" leng="25" placeholder="Ejemplo: 12345678 " name="idCard" value="{{ old('idCard', $tiposdepago->idCard ?? '') }}">
                        @error('idCard')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" leng="255" placeholder="Ejemplo: juanperez@gmail.com " name="email" value="{{ old('email', $tiposdepago->email ?? '') }}">
                        @error('email')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                </div>

                
                
                <div class="row">
                    <div class="col mt-2">
                        <button class="btn btn-primary">Guardar Configuración de tipo de pago</button>
                    </div>
                </div>
            </x-slot>   

        </x-form>
      

        {{-- navegacion de las acciones --}}

        <x-nav-acciones>
            <a href="{{route("admin.tiposdepagos.index")}}" class="btn btn-secondary  mt-5">
                Volver
            </a>
        </x-nav-acciones>
        
    </x-jet-welcome>

</x-app-layout>  

