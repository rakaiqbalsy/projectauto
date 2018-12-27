@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'AUTOMOTIF SITE')
@section('sub-head', 'Ride For Future')

@section('content')

    <div class="container">
        
        <div class="jumbotron">
        <h1>Formulir Pengajuan Test Drive</h1> <br>
        @include('message.message');
            <form action="{{route('nilai.store')}}" method="post">
                
                {{csrf_field()}}

                <div class="form-group">
                    <strong>Nilai:</strong>
                    <input type="number" name="nilai" class="form-control" placeholder="1-100">
                </div>
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Anda">
                </div>
                <div class="form-group">
                    <strong>Mobil yang direview: </strong>
                    <input type="text" name="car_name" class="form-control" placeholder="Mobil yang akan direview">
                </div>
                <div class="form-group">
                    <strong>Ulasan</strong>
                    <textarea name="ulasan" class="form-control" placeholder="Ulasan Anda" rows="8" cols="80"></textarea>
                </div>

                
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Kirim Review</button>
            </form>
        </div>
    </div>
@endsection