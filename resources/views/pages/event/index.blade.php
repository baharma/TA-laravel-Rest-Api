@extends('layouts.apps')

@section('content')
<form action="{{route('event.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card p-4 rounded card-border-bottom">
        <h1 class="text-danger">Create Event</h1>

        <div class="row">
            <div class="col-lg-4">
                <x-component-main.image-upload inputId="image-event" labels="Image Event" name="image" />
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-5">
                <x-component-main.input-form idname="name-event" labels="Name Event" nameInput="title_name" type="text"
                    pleceholder="Input Your Name Event " />
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

                        @endforeach
                    </x-slot>
                </x-component-main.select-form>
                @error('ukm_id')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <x-component-main.input-form labels="Implementation Of Activities Address" idname="address-event"
                    nameInput="address_event" type="text" pleceholder="Input Your Name Event " />
                @error('address_event')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div>
            <h5>Start Open register and close</h5>
            <div class="row">
                <div class="col">
                    <x-component-main.input-form labels="Start Event Open Register" nameInput="start_register"
                        type="date" pleceholder="" idname="start_register" />
                    @error('title_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <x-component-main.input-form labels="End Evenat Register" nameInput="end_register" type="date"
                        pleceholder="" idname="end_register" idname="end_register" />
                    @error('title_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-5">
                <x-component-main.input-form idname="tlp" labels="Telp" nameInput="tlp" type="number"
                    pleceholder="Input Telp " />
                @error('title_name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <x-component-main.text-area idname="description-event" idname="description" rows="9" name="description"
                    label="Description Event" />
                @error('description')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>



    </div>
    <div class="card bg-light d-flex flex-row-reverse bd-highlight p-3 card-border-top">
        <button type="submit" class="btn btn-info">Save</button>
    </div>
</form>


@endsection
