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
                <h3 class="card-title">Rekap</h3>
              </div>
               
              <!-- /.card-header -->
               <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Rekap Keluahn </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('complaint.store') }}" method="POST">
                   @csrf
            
                 <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif


                <table class="table table-bordered">
                    <tr>
                        <th width="20px" class="text-center">User Name</th>
                        <th width="20px" class="text-center">Unit Kerja</th>
                        <th width="20px" class="text-center">Subjek</th>
                        <th width="20px" class="text-center">Uraian</th>
                        <th width="50px"class="text-center">Saran/Solusi</th>
                        <th width="50px"class="text-center">Status</th>
                    </tr>
                    @foreach ($rekap as $item)
                    <tr>
                        <td width="20px" class="text">{{ $item->username}}</td>
                        <td width="20px" class="text">{{ $item->unitkerja}}</td>
                        <td width="20px" class="text">{{ $item->subjek}}</td>
                        <td width="20px" class="text">{{ $item->uraian}}</td>
                        <td width="20px" class="text">{{ $item->saransolusi}}</td>
                        <td width="20px" class="text">{{ $item->status}}</td>
    

                        
              </form>
            </div>

                          @endforeach
             

                                

                               
                            </form>
                        </td>
                    </tr>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
@endsection