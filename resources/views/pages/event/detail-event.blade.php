@extends('layouts.apps')
@section('content')


<div class="container shadow-sm">
    <div class="card p-2">

        <h1 class="p-1">
            {{$event->title_name}}
        </h1>


        <img src="{{url('public/Image/'.$event->id.'/'. $event->image)}}" alt="" class="container-fluid" height="400">

        <p class="p-1">
            {{$event->description}}
        </p>
        <br>
        <p>Lokasi di laksanakan dan jadwal {{$event->title_name}} </p>
        <p>Lokasi       : {{$event->address_event}}</p>

        <p>Jadwal Acara Awal : {{$event->start_register}}</p>
        <p>Jadwal Acara Akhir : {{$event->end_register}}</p>
        <p>Telp yang bisa di hubungi : {{$event->tlp}}</p>

        <br>

    </div>
</div>

@endsection
