@extends('user/app')

@section('bg-img',Storage::disk('local')->url($news->image))

@section('title', $news->title)
@section('sub-head', $news->subtitle)

@section('content')
 <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
            {!! htmlspecialchars_decode($news->body) !!}

            <small>created at: {{$news->created_at->diffForHumans()}}</small>
          </div>
        </div>
      </div>
    </article>

    <hr>
    @endsection