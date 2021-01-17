@extends('adminlte::page')

@section('content')
 <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data bagian edit</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">edit data Unit Kerja </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Wadooo</strong> Ada masalah dalam inputan.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('bagian.update',$bagian->id) }}" method="POST">
                   @csrf
                   @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="bagian">Unit Kerja</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" placeholder="{{ $bagian->bagian }}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              
      
@endsection