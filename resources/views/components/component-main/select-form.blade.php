@props(['class'=>null,'idname'=>null,'name'=>null,'nameList'=>null,'label'=>null])

<div class="form-groub">
    <label for="{{$idname}}">{{$label}}</label>
    <select class=" form-select-lg mb-3 select-js"  id="{{$idname}}" name="{{$name}}" aria-label=".form-select-lg example {{$class}}" >
        <option selected>Open this select {{$nameList}}</option>
            {{$content}}
    </select>
</div>
