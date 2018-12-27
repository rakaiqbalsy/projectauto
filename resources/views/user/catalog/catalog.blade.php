@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'AUTOMOTIF SITE')
@section('sub-head', 'Ride For Future')

@section('content')


    <!-- Main Content -->
    <section class="blog-area gray-bg padding-top">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="tampil">
                <h1 class="text-center">Catalog Mobil Terbaru</h1>
            </div>  
        </div>
        <br>
        <br>
      </div>
        <div class="row">

        @foreach($catalogs as $catalog)
          <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">

              <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">

                  <div class="blog-image">
                      <img src="{{asset('images/'.$catalog->image)}}" alt="image" >
                  </div>
                  <div class="blog-details text-center">
                      <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                      <h3><a href="#">{{$catalog->title}}</a></h3>
                      <p>{{$catalog->subtitle}}</p>
                      <a href="{{route('detail-catalog',$catalog->slug)}}" class="read-more">Read More</a>
                  </div>
              </div>
          </div>

          @endforeach
        </div>
      </div>
    </section>
@endsection