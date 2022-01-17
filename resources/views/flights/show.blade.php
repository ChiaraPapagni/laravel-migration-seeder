@extends('layouts.app')

@section('content')

<div class="card text-center m-2" style="width: 18rem;">
    <div class="card-body">
        <h3 class="card-title mb-3">{{$flight->destination}}</h3>
        <h5>{{$flight->airline}}</h5>
        <p>Departure Airport: {{$flight->departure_airport}}</p>
        <p>Arrival Airport: {{$flight->arrival_airport}}</p>
        <p>Flight duration: {{$flight->flight_duration}} min</p>
        <p>Flight price: {{$flight->price}}$</p>
    </div>
</div>

@endsection