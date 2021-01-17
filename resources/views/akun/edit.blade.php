@extends('adminlte::page')

@section('content')
 <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Edit Akun</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">edit akun </li>
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
                <h3 class="card-title">Data Akun </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('akun.update',$akun->id_akun) }}" method="POST">
                   @csrf
                   @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="akun">User Name</label>
                    <input type="text" class="form-control" id="akun" name="username" placeholder="masukan user name" value="{{$akun->username}}">
                    <label for="akun">Password</label>
                    <input type="text" class="form-control" id="akun" name="password" placeholder="masukan password" value="{{$akun->password}}">

                    <label for="akun">Role</label>
                    <select class="form-control" id="role" name="role" value="{{$akun->role}}">
                      <option>Admin</option>
                      <option>Pimpinan</option>
                      <option>Mahasiswa</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
              
      
@endsection