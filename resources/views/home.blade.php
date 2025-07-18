@extends('layouts.frontend')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <form method="post" action="{{ route('posts.store') }}" class="col-8">
            @csrf
            <div class="mb-3 col-8 mx-auto">
                <label for="exampleFormControlInput1" class="form-label">Post Title</label>
                <input type="text"  name="title" class="form-control" value="{{ $post->title ?? '' }}" placeholder="Post Title here" required>
            </div>
            
            <div class="mb-3 col-8 mx-auto">
                <label for="exampleFormControlTextarea1" class="form-label">Post text</label>
                <textarea class="form-control" name="description" rows="5" placeholder="Add a Description here." required>{{ $post->description ?? '' }}</textarea>
                <button type="submit" class="btn btn-primary custom-vertical-padding">Post</button>
            </div>
        </form>
    </div>
</div>
@endsection
