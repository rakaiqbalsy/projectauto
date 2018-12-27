@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
       <!-- general form elements -->
       <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
        </div>

        @include('message.message');
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('berita.update', $beritas->id)}}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          <div class="box-body">

           <div class="col-lg-6">
             
            <div class="form-group">
             <label for="title">Judul</label>
             <input type="title" class="form-control" name="title" id="title" placeholder="Judul" value="{{$beritas->title}}">
           </div>

           <div class="form-group">
             <label for="subtitle">Sub Judul</label>
             <input type="subtitle" class="form-control" name="subtitle" id="subtitle" placeholder="sub Judul" value="{{$beritas->subtitle}}">
           </div>

           <div class="form-group">
             <label for="slug">Slug</label>
             <input type="slug" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{$beritas->slug}}">
           </div>

         </div>

         <div class="col-lg-6">
          <div class="form-group">
           <label for="image">File input</label>
           <input type="file" name="image" id="image">

         </div>
         
         <div class="checkbox">
           <label>
             <input type="checkbox" name="status" value="1" @<?php if ($beritas->status == 1): ?>
              {{'checked'}}
               
             <?php endif ?>> Ya, Publish
              
           </label>
         </div>
       </div>
     </div>
     <!-- /.box-body -->
     <div class="box">
      <div class="box-header">
        <h3 class="box-title">Content
          <small>content berita</small>
        </h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
          <textarea id="editor1" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{route('berita.index')}}" class="btn btn-warning">Back</a>
        </div>
      </div>
    </form>
  </div>
  <!-- /.box -->
  <!-- /.box -->

</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<!-- CK EDITOR -->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<script>
  $(function(){
    CKEDITOR.replace('editor1');

    $(".textarea").wysihtml5();
  });

</script>
@endsection