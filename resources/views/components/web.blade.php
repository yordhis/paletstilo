<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

        <!-- Styles -->

               <!-- Styles -->
               {{-- <link rel="stylesheet" href="{{env('APP_URL')}}/css/catalogo.css"> --}}
               <link rel="stylesheet" href="{{env('APP_URL')}}/css/styles.css">
               <link rel="stylesheet" href="{{env('APP_URL')}}/css/custom.css">
               <link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap-icons/font/bootstrap-icons.css">
                @yield('cssweb')
             
    
        
    </head>
    <body >


        {{$slot}}

        <!-- Scripts -->
          
            <script src="{{env('APP_URL')}}/js/carrito.js"></script> 
            <script src="{{env('APP_URL')}}/js/bootstrap.min.js" ></script>
         
            @yield('jsweb')
    </body>
</html>