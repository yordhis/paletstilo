@props(['route', 'method', 'inputs'])

<form action="{{ $route ?? ''}}" method="{{$method ?? 'POST'}}" enctype="multipart/form-data">
    
        {{$inputs ?? "No hay inputs configurados"}}
  
</form>