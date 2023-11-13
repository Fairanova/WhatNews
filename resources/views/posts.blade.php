@extends('layout.main')

@section('content')
    
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-lg-2 mb-3">
            <div class="card">
                <img src="{{ asset('storage/' . $post->img) }}" width="200px" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <a href="/posts/{{ $post->slug }}" class="btn btn-info text-light">Read Post</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection