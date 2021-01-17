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
                <h3 class="card-title">E-Complaint</h3>
              </div>
               
              <!-- /.card-header -->
               <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Complaint Mahasiswa </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('complaint.store') }}" method="POST">
                   @csrf
            
                <div class="card-body">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> sing baleg atuh euyyyyyy.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <div class="form-group">
                    <label for="complaint">User Name</label>
                    <input type="text" class="form-control" id="complaint" name="username" placeholder="">
                    <label for="complaint">Unit Kerja</label>
                     <select class="form-control" id="complaint" name="unitkerja">
                      <option>Akademik</option>
                      <option>Tata Usaha/Umum</option>
                      <option>SDM/Kepegawaian</option>
                      <option>Perlengkapan/Fasilitas</option>
                      <option>Kemahasiswaan</option>
                      <option>Keuangan</option>
                      <option>Sistem Informasi</option>
                    </select>
                    <label for="complaint">Subjek</label>
                    <input type="text" class="form-control" id="complaint" name="subjek" placeholder="">
                    <label for="complaint">Uraian</label>
                    <input type="text" class="form-control" id="complaint" name="uraian" placeholder="">
                    <label for="complaint">Saran/Solusi</label>
                    <input type="text" class="form-control" id="complaint" name="saransolusi" placeholder="">
                   
                   

                   
                  </div>


              
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


             

                                @csrf
                                @method('DELETE')

                               
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