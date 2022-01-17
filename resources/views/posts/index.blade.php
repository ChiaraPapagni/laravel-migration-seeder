@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Our Blog</h1>

    <section class="blog d-flex justify-content-center flex-wrap">

        @forelse($posts as $post)

        <div class="card" style=" width: 25rem;">
            <img src="{{$post->image}}" class="card-img-top post_image">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <p class="card-text d-flex justify-content-between">
                    <small>{{$post->author}}</small>
                    <small class="text-muted">{{$post->time}}</small>
                </p>
            </div>
        </div>

        @empty

        <p>Nothiing to see here sorry</p>

        @endforelse

    </section>
    <!-- /.posts -->

    <div class="pagination justify-content-center my-4">
        {{$posts->links()}}
    </div>
</div>
@endsection