@extends('layouts.app')

@section('content')

<h1 class="text-center my-4">Our Flights</h1>

<!-- <section class="houses d-flex justify-content-center flex-wrap">

        @forelse($houses as $house)

        <div class="card text-center m-2" style="width: 18rem;">
            <img src="{{$house->image}}">
            <div class="card-body">
                <h5 class="card-title mb-3">{{$house->address}}</h5>
                <a href="{{route('house', ['house' => $house->id])}}" class="btn btn-primary">Visit this place</a>
            </div>
        </div>

        @empty

        <p>Nothiing to see here sorry</p>

        @endforelse

    </section> -->
<!-- /.houses -->

<div class="pagination justify-content-center my-4">
    {{$houses->links()}}
</div>

@endsection