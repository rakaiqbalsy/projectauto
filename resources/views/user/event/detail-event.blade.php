@extends('user/app')

@section('bg-img', asset(''))

@section('title', $event->title)
@section('sub-head', $event->subtitle)

@section('content')
 <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

            <div class="post-item-image">
                <a href="#">
                    <img src="{{asset('images/'.$event->image)}}" alt="">
                </a>
            </div>
            
            <h1>Mulai  Tanggal: {{$event->start}}</h1>
            <h1>hingga Tanggal: {{$event->end}}</h1>

            {!! htmlspecialchars_decode($event->body) !!}

            <small>created at: {{$event->created_at->diffForHumans()}}</small>
          </div>
        </div>
      </div>
    </article>

    <hr>
    @endsection