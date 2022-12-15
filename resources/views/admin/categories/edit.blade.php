@extends('admin.layouts.main')
@section('adminContent')
<div class="content-wrapper" style="min-height: 866px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Category: {{ $category->title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
          <div class="col-12">
            <div class="card col-6">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                    </tr>
                  <tbody>  
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->title }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="row">
          <form action="{{ route('admin.category.update', $category->id) }}" method="POST" class="w-25 ml-1">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <input type="category-name" class="form-control" name="title" placeholder="New category name">
                @error('title')
                <div class="text-danger">Empty field!</div>
                @enderror
            </div>
            <div><input type="submit" class="btn btn-danger" value="Submit"></div>
        </form>
        </div>
          </div>
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

<!--<div class="col-1 mb-3">
            <a href="{{ route('category.create') }}" class="btn btn-block btn-warning">Add</a>
          </div>-->