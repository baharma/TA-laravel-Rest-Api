@extends('layouts.apps')

@section('content')

    <div class="card" id="card">
        <div class="row">
            <div class="col-lg-5" id="event-card" >

            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="{{asset('js/main/get-all-event.js')}}"></script>
@endpush
