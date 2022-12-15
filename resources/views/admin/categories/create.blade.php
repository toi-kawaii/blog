@extends('admin.layouts.main')
@section('adminContent')
<div class="content-wrapper" style="min-height: 866px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1 class="m-0">Add Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <form action="{{ route('admin.category.store') }}" method="POST" class="w-25 ml-1">
            @csrf
            <div class="form-group">
                <input type="category-name" class="form-control" name="title" placeholder="Category Name">
                @error('title')
                <div class="text-danger">Empty field!</div>
                @enderror
            </div>
            <div><input type="submit" class="btn btn-primary" value="Add"></div>
        </form>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection


