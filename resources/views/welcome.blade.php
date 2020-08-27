@extends('layouts.app')

@section('content')
    

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/pizza-house1.png" alt="pizzahouse">
                <div class="title m-b-md">
                    The East's Best Pizza
                </div>
            </div>
        </div>
@endsection
