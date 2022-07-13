@props(['caja1'=>true, 'caja2'=>null])

@isset($caja1)
    <div {{ $attributes->merge(["class"=> "p-6 sm:px-20 bg-white border-b border-gray-200"]) }} >
        {{$slot}}
    </div>
@endisset

@isset($caja2)
    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
        
        <div class="p-6">
            
        </div>

        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
            
        </div>

        <div class="p-6 border-t border-gray-200">
        
        </div>

        <div class="p-6 border-t border-gray-200 md:border-l">
            
        </div>
    </div>
@endisset

