@extends('layouts.app')

@section('content')
<h1 class="text-center my-4">Our Flights</h1>

<section class="d-flex justify-content-center flex-wrap">

    @forelse($flights as $flight)

    <div class="card text-center m-2" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title mb-3">{{$flight->destination}}</h3>
            <h5>{{$flight->airline}}</h5>
            <p>Departure Airport: {{$flight->departure_airport}}</p>
            <p>Arrival Airport: {{$flight->arrival_airport}}</p>
            <p>Flight duration: {{$flight->flight_duration}} min</p>
            <p>Flight price: {{$flight->price}}$</p>
            <a href="{{route('flight', ['flight' => $flight->id])}}" class="btn btn-primary">Go to flight</a>
        </div>
    </div>

    @empty

    <p>Nothiing to see here sorry</p>

    @endforelse

</section>
<!-- /.flights -->

<div class="pagination justify-content-center my-4">
    {{$flights->links()}}
</div>

@endsection