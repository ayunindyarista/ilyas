@extends('layout/main')

@section('konten')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@if (session('status1'))
    <font size="1"> 
    <script>
      Swal.fire(
        'Status Berhasil Di Update!',
          '',
          'success'
        )
    </script>
    </font>
@endif
 
@foreach ($pendanaan as $pend)
<div class="modal fade show" id="myModaltambah{{ $pend->ID_PENDANAAN }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Pendanaan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <form class="form-horizontal form-label-left" action="PendanaanStore" method="POST">

                {{ csrf_field() }}

              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="tahun_pendanaan"> Tahun Pendanaan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="tahun_pendanaan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="tahun_pendanaan" placeholder="Masukan tahun pendanaan" required="required" 
                  type="number">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="jumlah_pendanaan"> Jumlah Pendanaan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="jumlah_pendanaan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="jumlah_pendanaan" placeholder="Masukan jumlah pendanaan" required="required" 
                  type="number">
                </div>
              </div>
              <div class="item form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="tanggal_pendanaan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="tanggal_pendanaan" placeholder="Masukan tanggal pendanaan" required="required" 
                  type="hidden" value="{{ $pend->TANGGAL_PENDANAAN }}">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <ol class="float-sm-right">
                <div class="col-md-offset-3">
                  <button type="submit" class="btn btn-secondary"><a href="Pendanaan">Cancel</a></button>
                  <button id="submit" value="SimpanData" type="submit" class="btn btn-success">Submit</button>
                </div>
                </ol>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach 


@foreach ($pendanaan as $pend)
<div class="modal fade show" id="myModaledit{{ $pend->ID_PENDANAAN }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Pendanaan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <form class="form-horizontal form-label-left" action="PendanaanUpdate" method="POST">

                {{ csrf_field() }}

              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="id_pendanaan"> ID Pendanaan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="id_pendanaan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                    data-validate-words="2" name="id_pendanaan" placeholder="" required="required" 
                    type="text" value="{{ $pend->ID_PENDANAAN }}" readonly>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="tahun_pendanaan"> Tahun Pendanaan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="tahun_pendanaan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="tahun_pendanaan" placeholder="Masukan tahun pendanaan" required="required" 
                  type="number" value="{{ $pend->TAHUN_PENDANAAN }}">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="jumlah_pendanaan"> Jumlah Pendanaan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="jumlah_pendanaan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="jumlah_pendanaan" placeholder="Masukan jumlah pendanaan" required="required" 
                  type="number" value="{{ $pend->JUMLAH_PENDANAAN }}">
                </div>
              </div>
              <div class="item form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="tanggal_pendanaan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="tanggal_pendanaan" placeholder="Masukan tanggal pendanaan" required="required" 
                  type="hidden" value="{{ $pend->TANGGAL_PENDANAAN }}">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <ol class="float-sm-right">
                <div class="col-md-offset-3">
                  <button type="submit" class="btn btn-secondary"><a href="Fakultas">Cancel</a></button>
                  <button id="submit" value="SimpanData" type="submit" class="btn btn-success">Submit</button>
                </div>
                </ol>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach

<div class="content-wrapper" style="min-height: 1203.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="col-sm-12" align='center' textsize='15px'>
          <h1>PENDANAAN</h1>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">  
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaltambah{{ $pend->ID_PENDANAAN }}">
              <i class="fas fa-plus-circle"></i> Tambah Data
            </button>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Pendanaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pendanaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr role="row" align="center">
                          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 75.000px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">
                            ID Pendanaan
                          </th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 150.000px;" aria-label="Nama: activate to sort column ascending">
                            Tahun Pendanaan
                          </th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 150.000px;" aria-label="Nama: activate to sort column ascending">
                            Jumlah Pendanaan
                          </th>
                          <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.000px;">
                            Action
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($pendanaan as $pend)
                        <tr role="row">
                          <td class="sorting_1">{{ $pend->ID_PENDANAAN }}</td>
                          <td class="sorting_1">{{ $pend->TAHUN_PENDANAAN }}</td>
                          <td class="sorting_1">Rp {{ $pend->JUMLAH_PENDANAAN }}</td>
                          <td align="center">
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModaledit{{ $pend->ID_PENDANAAN }}"><i class="nav-icon fas fa-edit"></i> Edit</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  
<script> 
    console.log('x : ')
    const x = document.getElementsByClassName('post0');
    for(let i=0;i<x.length;i++){
        x[i].addEventListener('click',function(){
            x[i].submit();
        });
    }

    var bulan = new Array('01','02','03','04','05','06','07','08','09','10','11','12');
	  var now;
	  var day = new Date();
	  now = day.getFullYear()+"-"+bulan[day.getMonth()]+"-"+day.getDate();
	  document.getElementById('tanggal_pendanaan').value = now;

</script>

@endsection