<!-- Button to Open the Modal -->
    <button type="button" {{ $attributes->merge(['class'=>"btn btn-$color  mt-5"])}} data-bs-toggle="modal" data-bs-target="#{{$myModal ?? 'myModal'}}">
        {{$nameBoton ?? "Abrir modal"}}
    </button>
  
  {{-- <!-- The Modal {{$myModal ?? 'myModal'}} --> --}}
  <div class="modal" id="{{$myModal ?? 'myModal'}}" >
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{$title ?? 'My Modal'}}</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            {{$slot}}
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
  
      </div>
    </div>
  </div>