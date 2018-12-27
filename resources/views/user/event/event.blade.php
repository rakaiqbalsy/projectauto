@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'AUTOMOTIF SITE')
@section('sub-head', 'Ride For Future')

@section('content')

   <!-- Event -->
<section id="event" class="event">
   <div class="container">
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <h3>Berita Terbaru</h3>
                        </div>

                        <!-- Single Blog Post -->

                        @foreach($events as $event)
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('images/'.$event->image)}}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="{{route('detail-event',$event->slug)}}" class="headline">
                                    <h3>{{$event->title}}</h3>
                                </a>
                                <h6>Mulai Tanggal ( {{$event->start}} ) Hingga Tanggal ( {{$event->end}} )</h6>
                                <p>{{$event->subtitle}}</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date">{{$event->created_at->diffForHumans()}}</a></p>
                                </div>
                            </div>
                        </div>

                        @endforeach

                   

                    </div>

                    <!-- Akhir Berita -->
                    <!--Event Terbaru -->

                  
                    </div>
                </div>
            </div>
          </section>
    <!-- Akhir Event -->
@endsection