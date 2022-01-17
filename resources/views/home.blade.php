@extends('layouts.app')

@section('content')

<div class="text-center mt-5">
    <a href="{{route('flights')}}">
        <h1 class="py-4">Go to Flights</h1>
    </a>
    <a href="{{route('posts')}}">
        <h1 class="py-4">Go to Blog</h1>
    </a>
</div>

@endsection