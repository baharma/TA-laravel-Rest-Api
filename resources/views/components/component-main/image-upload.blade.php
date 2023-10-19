@props([
    'inputId'=>null,
    'labels'=>null,
    'image'=>null,
    'name'=>null
    ])

<div class="form-groub">
    <label for="{{$inputId}}">{{$labels}}</label>
    <input type="file" class="dropify " data-default-file="{{$image}}" name="{{$name}}" id="{{$inputId}}">
</div>
