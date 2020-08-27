@extends('layouts.app')

@section('content')

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-d-md">
                Pizzas List
            </div>

            <p>{{$name}}</p>
            {{-- @for ($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
            @endfor--}}

            @foreach($pizzas as $pizza)
                <div>
                    {{ $loop->index }} - {{ $pizza['type'] }} -
                    {{ $pizza['base'] }}
                </div>
            @endforeach
        </div>
    </div>
@endsection

