@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blank page
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Event</h3>

        <a class="btn btn-success" href="{{route('nilai.create')}}">Add New</a>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Mobil Yang Di Review</th>
                  <th>Nilai</th>
                  <th>Ulasan</th>
                  <th>Created At</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($penilaians as $penilaian)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td> {{$penilaian->nama}} </td>
                  <td> {{$penilaian->car_name}} </td>
                  <td> {{$penilaian->nilai}} </td>
                  <td> {{$penilaian->ulasan}} </td>
                  <td> {{$penilaian->created_at}} </td>
                  
                  </td>
                  <td>
                  <form id="delete-form-{{$penilaian->id}}" method="post" action="{{route('nilai.destroy',$penilaian->id)}}" style="display:none">

                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      
                    </form>
                    <a href="" onclick="if(confirm('Konten akan dihapus?')) {
                      event.preventDefault();
                      document.getElementById('delete-form-{{$penilaian->id}}').submit();
                    } 
                    else {
                      event.preventDefault(); }">

                      <span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>

                @endforeach
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('footerSection')
  <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

      <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
@endsection