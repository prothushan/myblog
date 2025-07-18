@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-4">
        <table class="table">
            <thead class="table-dark">      
                <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->description, 75) }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                            @auth
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{route('posts.delete', $post->id)}}" class="btn btn-danger">Delete</a>
                            @endauth
                        </td>
                    </tr> 
                @endforeach
                
                
            </tbody>
        </table>
    </div>
</div>

@endsection