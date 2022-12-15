@extends('admin.layouts.main')
@section('adminContent')
<div class="content-wrapper" style="min-height: 866px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category: {{ $category->title }}</h1>
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
          <div class="col-1 mb-3">
            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-block btn-warning">Edit</a>
          </div>
          <div class="col-1 mb-3">
            <form action="{{ route('admin.category.delete', $category->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-block btn-danger">Delete</button>
                        </form>
          </div>
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


