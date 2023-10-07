@props(['idname'=>null,'label'=>null,'rows'=>null,'value'=>null,'name'=>null])

<div class="form-group">
    <label for="{{$idname}}">{{$label}}</label>
    <textarea class="form-control" id="{{$idname}}" name="{{$name}}" rows="{{$rows}}">{{$value}}</textarea>
</div>
