@extends('layouts.app-master')

@section('content')
    
    <div class="bg-light p-4 rounded">
        <h2>Posts</h2>
        <div class="lead">
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right" style="margin-bottom:10px;">Add post</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Nom</th>
             <th>Image</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($posts as $key => $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td><img src="{{ $post->imageurl }}" alt="" style="width:100px;height:auto;"></td>
                <td style="vertical-align:middle;">
                    <div class="d-flex justify-content-around align-items-center">
                        <a class="btn btn-info btn-sm mr-2" href="{{ route('posts.show', $post->id) }}">Voir</a>
                        <a class="btn btn-primary btn-sm mr-2" href="{{ route('posts.edit', $post->id) }}">Editer</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Surprimer', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $posts->links() !!}
        </div>

    </div>
@endsection