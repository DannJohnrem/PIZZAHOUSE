@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type"> Type - {{ $pizza->type }}</p>
        <p class="type">Base - {{ $pizza->base }}</p>
    </div>
@endsection

