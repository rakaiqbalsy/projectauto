@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'AUTOMOTIF SITE')
@section('sub-head', 'Ride For Future')

@section('content')
    <div class="container">
        
        <div class="jumbotron">
        <h1>Formulir Pengajuan Test Drive</h1> <br>
        @include('message.message');
            <form action="{{route('testdrive.store')}}" method="post" enctype="multipart/form-data">
                
                {{csrf_field()}}

                <div class="form-group">
                    <strong>Nama :</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="form-group">
                    <strong>No.KTP :</strong>
                    <input type="number" name="noktp" class="form-control" placeholder="Masukkan No KTP">
                </div>
                <div class="form-group">
                    <strong>email :</strong>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan E-mail">
                </div>
                <div class="form-group">
                    <strong>Alamat :</strong>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" rows="8" cols="80"></textarea>
                </div>

                <div class="form-group">
                    <label for="sim">File input</label>
                    <input type="file" name="sim" id="sim">
                </div>

                
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
            </form>
        </div>
    </div>
@endsection