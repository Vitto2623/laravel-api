@extends('layouts.app')

@section('title', 'Guest-Home')

@section('head-css')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center my-container">
        <div class="card-body text-center" style="color:blue">
            @if (!Auth::check())

                <h4 class="fs-1">Benvenuto!</h4>
                
            @else
                    <h4 class="fs-1">Benvenuto/a {{Auth::user()['name']}}!</h4>
            @endif
        </div>
    </div>

    <div id="root"></div>
@endsection


@section('js')
    <script src="{{ asset('js/front.js') }}"></script>
@endsection

