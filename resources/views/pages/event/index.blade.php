@extends('layouts.apps')

@section('content')

<div class="card p-4">
    <div class="row">
        <div class="col-lg-4">
            <input type="file" class="dropify" data-default-file="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <x-component-main.input-form labels="Name Event" nameInput="title_name" type="text" pleceholder="Input Your Name Event " />
            @error('title_name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>



</div>




@endsection



