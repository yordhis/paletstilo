@props(['ziseShadow' =>'lg', 'title'])

<div class="col-12" >
    <br>
    <div {{ $attributes->merge(["class"=>"d-flex d-flex justify-content-center  mt-5 mb-5 text-center   shadow-$ziseShadow "]) }} >
        <h2 class="fs-3 text-primary ">{{$title}} </h2>
    </div>
</div>
