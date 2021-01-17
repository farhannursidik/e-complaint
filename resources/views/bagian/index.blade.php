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
                <h3 class="card-title">Unit Kerja</h3>
              </div>
                <div class="card-header">
                        <a class="btn btn-info btn-sm" href="{{ route('bagian.create') }}">Tambah Unit Kerja</a>
             
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
                        <th width="20px" class="text-center">No</th>
                        <th width="20px" class="text-center">nama bagian</th>
                        <th width="280px"class="text-center">Action</th>
                    </tr>
                    @foreach ($bagian as $item)
                    <tr>
                        <td width="20px" class="text-center">{{ ++$i }}</td>
                        <td width="20px" class="text-center">{{ $item->bagian }}</td>
    

                        <td class="text-center">
                            <form action="{{ route('bagian.destroy',$item->id_bagian) }}" method="POST">

                              

             <a class="btn btn-primary btn-sm" href="{{ route('bagian.edit',$item->id_bagian) }}">Edit</a>

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