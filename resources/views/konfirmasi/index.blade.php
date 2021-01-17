@extends('adminlte::page')

@section('content')
 <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Konfirmasi Complaint</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Complaint Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
 @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                          <p>{{ $message }}</p>
                         </div>
                      @endif

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> Gagal Menyimpan<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Konfirmasi Complaint</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
                 

        </div>                                            
        <div class="card-body">

         

            
            
        </div>


    <div class="card-body">

    <table class="table table-bordered">
        <tr>
                        <th width="20px" class="text-center">User Name</th>
                        <th width="20px" class="text-center">Unit Kerja</th>
                        <th width="20px" class="text-center">Subjek</th>
                        <th width="20px" class="text-center">Uraian</th>
                        <th width="50px"class="text-center">Saran/Solusi</th>
                        <th width="50px"class="text-center">Status</th>
                        <th width="50px"class="text-center">Aksi</th>

        </tr>
        @foreach ($complaint as $item)
        <tr>
                        <td width="20px" class="text">{{ $item->username}}</td>
                        <td width="20px" class="text">{{ $item->unitkerja}}</td>
                        <td width="20px" class="text">{{ $item->subjek}}</td>
                        <td width="20px" class="text">{{ $item->uraian}}</td>
                        <td width="20px" class="text">{{ $item->saransolusi}}</td>
                        <td width="20px" class="text">{{ $item->status}}</td>


            <td width="100px">

              <!--modal edit -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit{{ $item->id_complaint }}">Acc</button>
                <div class="modal fade" id="modalEdit{{ $item->id_complaint }}" tabindex="-1" aria-labelledby="modalEdit1" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                          <h5 class="modal-title">Acc Complaint</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                    </div>
                    <div class="modal-body">
                
            
                                <form action="{{ route('konfirmasi.update', $item->id_complaint) }}" method="POST">
                                  @csrf
                                  @method('PUT')
                                    <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="status" id="status" class="form-control">
                                              <option value="">Acc Complaint</option>
                                              <option value="Diterima">Diterima</option>
                                            </select>
                                        </div>
                                    <br>
                                  
                                  
                          <button type="submit" class="btn btn-primary">Simpan Data</button>
                          </form>

                    </div>
                    </div>
                  </div>
                </div>

                    

                    <form action="{{ route('konfirmasi.destroy',$item->id_complaint) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Tolak/Delete</button>
                </form>

          
            </td>
        </tr>
        @endforeach
         
    </table>
     </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
   @stop