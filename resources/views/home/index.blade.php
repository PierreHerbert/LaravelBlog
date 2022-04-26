@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1></h1>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead"></p>
        @endguest
    </div>
@endsection