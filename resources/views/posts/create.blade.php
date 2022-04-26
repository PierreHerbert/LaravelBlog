@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new post</h2>
        <div class="lead">
            Add new post.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ old('title') }}" 
                        type="text" 
                        class="form-control" 
                        name="title" 
                        placeholder="Title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ old('description') }}" 
                        type="text" 
                        class="form-control" 
                        name="description" 
                        placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="imageurl" class="form-label">imageurl</label>
                    <input value="{{ old('imageurl') }}" class="form-control"
                        type="file" 
                        name="imageurl" 
                        placeholder="Url de l'image" required>

                    @if ($errors->has('imageurl'))
                        <span class="text-danger text-left">{{ $errors->first('imageurl') }}</span>
                    @endif
                </div>


                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" 
                        name="body" 
                        placeholder="Body" required>{{ old('body') }}</textarea>

                    @if ($errors->has('body'))
                        <span class="text-danger text-left">{{ $errors->first('body') }}</span>
                    @endif
                </div>
                

                <button type="submit" class="btn btn-primary">Ajouter l'article</button>
                <a href="{{ route('posts.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>

@endsection