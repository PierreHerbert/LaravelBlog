@extends('layouts.app-master')

@section('content')

<h1>BLOG</h1>
    <div class="d-flex justify-content-around">
        @foreach ($posts as $post)
            <div class="col-3"style="height:auto;">
                <div class="card" >
                <img src="{{  $post->imageurl }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{  $post->title }}</h5>
                    <p class="card-text">{{  $post->body }}</p>
                    <a href="/" class="btn btn-primary">Voir Plus</a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection