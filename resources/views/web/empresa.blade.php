<x-web>
       
        <x-navuno />
        <x-nav />
      
        
        <div class="container-fluid ">
            <div class="row ">

                

                @foreach ($empresa as $info)
                        <div class="col-12 col-sm-12 fondo-body mt-5" id="{{$info->slug}}">
                            <div class="container">

                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <h1 class="text-center text-primary text-warning bg-white  rounded shadows-sm">{{$info->title}}</h1>
                                    </div>
                                    
                                    
                                    <div class="col-12">
                                        @php
                                        $body =  explode('/',$info->body);
                                        @endphp
                                        
                                        
                                        <p class=" mt-2  text-primary fs-4"> 
                                            <img src="{{env('APP_URL')}}/img/{{$info->img}}" width="50%" height="250" class="image-text rounded shadows-sm" alt="">
                                        @foreach ($body as $parrafo)
                                                {{$parrafo}}
                                        </p>
                                        @endforeach
                                    </div>
                                </div>    
                            </div>

                        </div>
                @endforeach

                <x-historia/>



                <x-footer />


            </div>
        </div>

     
        
</x-web>
