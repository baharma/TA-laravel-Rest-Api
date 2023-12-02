@extends('layouts.apps')

@section('content')
<h1>List Event Kampus</h1>

<div class="container mt-4">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="search event in instiki" aria-label="Recipient's username"
            aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary text-center " type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>
    </div>
</div>

<div class="row p-5">
    @forelse ($event as $item)
    <div class="col-12 col-md-12">
        <div class="card d-flex flex-row bd-highlight mb-3">
            <img src="{{url('public/Image/'.$item->id.'/'. $item->image)}}"
                style="width: 300px; height: 300px;object-fit: contain" class="card-img-top" alt="Event 3">
            <div class="card-body">
                <h5 class="card-title">Event 3</h5>
                <p class="card-text">Deskripsi singkat tentang Event 3.</p>
                <a href="#" class="btn btn-primary">Detail Event</a>
            </div>
        </div>
    </div>
    @empty
    <h1>No Event</h1>
    @endforelse

</div>

@endsection

@push('script')
<script src="{{asset('js/main/get-all-event.js')}}"></script>
@endpush

@push('style')
<link rel="stylesheet" href="{{asset('css/card.css')}}">
@endpush
