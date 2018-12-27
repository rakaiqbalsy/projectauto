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

                        @foreach($beritas as $berita)
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('images/'.$berita->image)}}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="{{route('detail',$berita->slug)}}" class="headline">
                                    <h5>{{$berita->title}}</h5>
                                </a>
                                <p>{{$berita->subtitle}}</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date">{{$berita->created_at->diffForHumans()}}</a></p>
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