@extends('layouts.apps')

@section('content')

<div class="card p-4 rounded">
        <h1 class="text-danger">Create Event</h1>
    <div class="row">
        <div class="col-lg-4">
            <x-component-main.image-upload inputId="image-event" labels="Image Event"  />
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-5">
            <x-component-main.input-form idname="name-event" labels="Name Event" nameInput="title_name" type="text" pleceholder="Input Your Name Event " />
            @error('title_name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <x-component-main.select-form idname="ukm-list" name="ukm_id" nameList="List UKM" label="Name Ukm List">
                <x-slot name="content">
                    @foreach ($ukmList as $item)
                        <option value="1">One</option>
                    @endforeach
                </x-slot>
            </x-component-main.select-form>
            @error('ukm_id')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <x-component-main.input-form labels="Implementation Of Activities Address" idname="address-event" nameInput="address_event" type="text" pleceholder="Input Your Name Event " />
            @error('address_event')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div>
        <h5>Start Open register and close</h5>
        <div class="row">
            <div class="col">
                <x-component-main.input-form labels="Start Event Open Register" nameInput="start_register" type="date" pleceholder="" idname="start_register" />
                @error('title_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <x-component-main.input-form labels="End Evenat Register" nameInput="end_register" type="date" pleceholder="" idname="end_register" idname="end_register" />
                @error('title_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-5">
            <x-component-main.input-form idname="tlp" labels="Telp" nameInput="Telp" type="number" pleceholder="Input Telp " />
            @error('title_name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <x-component-main.text-area idname="description-event" idname="description" rows="9"  name="description" label="Description Event"/>
            @error('description')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

    </div>
</div>




@endsection



