@props(['class' => null, 'inputId' => null, 'value' => null, 'labels' => null,'nameInput'=>null,'type'=>null,'pleceholder'=>null])

<div class="form-group">
    <label for="{{$inputId}}">{{$labels}}</label>
    <input type="{{$type}}" class="form-control {{$class}}" id="{{$inputId}}" placeholder="{{$pleceholder}}" name="{{$nameInput}}" value="{{$value}}">
</div>
