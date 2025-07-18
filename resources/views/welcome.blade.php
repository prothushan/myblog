
@extends('layouts.frontend')


@section('content')

    <div class="col-lg-6 px-0">
        <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
    </div>

    <div class="row mb-2">
        @foreach($posts as $post)
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static"> <strong
                            class="d-inline-block mb-2 text-primary-emphasis">{{$post-> id}}</strong>
                        <h3 class="mb-0">{{$post-> title}}</h3>
                        <div class="mb-1 text-body-secondary">{{date('m-d', strtotime($post-> created_at))}}</div>
                        <p class="card-text mb-auto">{{$post-> description}}</p> <a href="{{ route('posts.show',$post->id) }}"
                            class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#chevron-right"></use>
                            </svg> </a>
                    </div>
                    <div class="col-auto d-none d-lg-block"> <svg aria-label="Placeholder: Thumbnail"
                            class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img"
                            width="200" xmlns="http://www.w3.org/2000/svg">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg> </div>
                </div>
            </div>
        @endforeach
    </div>


    
    


@endsection