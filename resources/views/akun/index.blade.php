@extends('adminlte::page')

@section('styles')

<!-- DataTables -->
<link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
     <!-- /.row -->
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Akun</h3>
              </div>
                <div class="card-header">
                        <a class="btn btn-info btn-sm" href="{{ route('akun.create') }}">Tambah Akun</a>
             
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif


                <table class="table table-bordered">
                    <tr>
                        <th width="10px" class="text-center">No.</th>
                        <th width="30px" class="text-center">User Name</th>
                        <th width="30px" class="text-center">Password</th>
                        <th width="30px" class="text-center">Role</th>
                        <th width="80px" class="text-center">Aksi</th>
                    </tr>
                    @foreach ($akun as $item)
                    <tr>
                        <td width="10px" class="text-center">{{ ++$i }}</td>
                        <td width="30px" class="text-center">{{ $item->username }}</td>
                        <td width="30px" class="text-center">{{ $item->password }}</td>
                        <td width="30px" class="text-center">{{ $item->role }}</td>

    

                        <td class="text-center">
                            <form action="{{ route('akun.destroy',$item->id_akun) }}" method="POST">

                               

             <a class="btn btn-primary btn-sm" href="{{ route('akun.edit',$item->id_akun) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
@endsection