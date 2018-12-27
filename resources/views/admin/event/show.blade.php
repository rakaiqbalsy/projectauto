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

        <a class="btn btn-success" href="{{route('event.create')}}">Add New</a>

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
                  <th>Title</th>
                  <th>Slug</th>
                  <th>Lokasi</th>
                  <th>Mulai Tanggal</th>
                  <th>Selesai Tanggal</th>
                  <th>Content</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($events as $event)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td> {{$event->title}} </td>
                  <td> {{$event->slug}} </td>
                  <td> {{$event->lokasi}} </td>
                  <td> {{$event->start}} </td>
                  <td> {{$event->end}} </td>
                  <td> {{$event->body}} </td>
                  <td> <a href="{{route('event.edit',$event->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                  </td>
                  <td>
                  <form id="delete-form-{{$event->id}}" method="post" action="{{route('event.destroy',$event->id)}}" style="display:none">

                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      
                    </form>
                    <a href="" onclick="if(confirm('Konten akan dihapus?')) {
                      event.preventDefault();
                      document.getElementById('delete-form-{{$event->id}}').submit();
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