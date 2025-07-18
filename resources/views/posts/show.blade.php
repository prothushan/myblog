@extends('layouts.frontend')

@section('content')
<div class="card text-center mb-5 mt-5">
  <div class="card-header">
    #{{$post->title}}
  </div>
  <div class="card-body">
    
    <p class="card-text"> {{$post->description}} </p>
    
  </div>
  <div class="card-footer text-muted">
    {{date('m-d', strtotime($post-> created_at))}}
  </div>
</div>
 
@endsection