    
    <div {{ $attributes->merge(["class"=>"alert alert-$color"]) }}>
        <strong>{{$title}}</strong> {{$slot}}
    </div>

    

  