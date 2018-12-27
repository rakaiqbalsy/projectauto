@extends('user/app')

@section('content')

   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="post-item post-detail">
                    <div class="post-item-image">
                        <a href="#">
                            <img src="{{asset('images/'.$car->image)}}" alt="">
                        </a>
                    </div>

                    <div class="post-item-body">
                            <h1>{{$car->title}}</h1>

                            <div class="post-meta no-border">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                </ul>
                            </div>
                            <p>{!! htmlspecialchars_decode($car->body) !!}</p>
                    </div>
                </article>
@endsection