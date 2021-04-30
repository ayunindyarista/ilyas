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

@foreach ($luaran_tambahan as $ltambahan)
<div class="modal fade show" id="myModaltambah{{ $ltambahan->ID_LUARAN_TAMBAHAN }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Luaran Tambahan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <form class="form-horizontal form-label-left" action="LuarantambahanStore" method="POST">

                {{ csrf_field() }}

              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="luaran_tambahan"> Luaran Tambahan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="luaran_tambahan" class="form-control col-md-10 col-xs-24" data-validate-length-range="6" 
                  data-validate-words="2" name="luaran_tambahan" placeholder="Masukan Luaran Tambahan" required="required" 
                  type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="tahun_luaran_tambahan"> Tahun Luaran Tambahan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="tahun_luaran_tambahan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="tahun_luaran_tambahan" placeholder="Masukan Tahun Luaran Tambahan" required="required" 
                  type="number">
                </div>
              </div>
              <div class="item form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="tanggal_luaran_tambahan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="tanggal_luaran_tambahan" placeholder="Masukan Tanggal Luaran Tambahan" required="required" 
                  type="hidden" value="{{ $ltambahan->TANGGAL_LUARAN_TAMBAHAN }}">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <ol class="float-sm-right">
                <div class="col-md-offset-3">
                  <button type="submit" class="btn btn-secondary"><a href="Luarantambahan">Cancel</a></button>
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


@foreach ($luaran_tambahan as $ltambahan)
<div class="modal fade show" id="myModaledit{{ $ltambahan->ID_LUARAN_TAMBAHAN }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Luaran Tambahan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <form class="form-horizontal form-label-left" action="LuarantambahanUpdate" method="POST">

                {{ csrf_field() }}

              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="id_luaran_tambahan"> ID Luaran Tambahan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="id_luaran_tambahan" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                    data-validate-words="2" name="id_luaran_tambahan" placeholder="" required="required" 
                    type="text" value="{{ $ltambahan->ID_LUARAN_TAMBAHAN }}" readonly>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="luaran_tambahan"> Luaran Wajib <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="luaran_tambahan" class="form-control col-md-10 col-xs-24" data-validate-length-range="6" 
                  data-validate-words="2" name="luaran_tambahan" placeholder="Masukan Luaran Tambahan" required="required" 
                  type="text" value="{{ $ltambahan->LUARAN_TAMBAHAN }}">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12" for="tahun_luaran_tambahan"> Tahun Luaran Tambahan <span class="required">*</span></label>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="tahun_luaran_tambahan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="tahun_luaran_tambahan" placeholder="Masukan Tahun Luaran Tambahan" required="required" 
                  type="number" value="{{ $ltambahan->TAHUN_LUARAN_TAMBAHAN }}">
                </div>
              </div>
              <div class="item form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input id="tanggal_luaran_tambahan" class="form-control col-md-10 col-xs-12" data-validate-length-range="6" 
                  data-validate-words="2" name="tanggal_luaran_tambahan" placeholder="Masukan Tanggal Luaran Tambahan" required="required" 
                  type="hidden" value="{{ $ltambahan->TANGGAL_LUARAN_TAMBAHAN }}">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <ol class="float-sm-right">
                <div class="col-md-offset-3">
                  <button type="submit" class="btn btn-secondary"><a href="Luarantambahan">Cancel</a></button>
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
          <h1>LUARAN TAMBAHAN</h1>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaltambah{{ $ltambahan->ID_LUARAN_TAMBAHAN }}">
              <i class="fas fa-plus-circle"></i> Tambah Data
            </button>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Luaran Tambahan</li>
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
              <h3 class="card-title">Data Luaran Tambahan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr role="row" align="center">
                          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 150.000px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">
                            ID Luaran Tambahan
                          </th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 150.000px;" aria-label="luarantambahan: activate to sort column ascending">
                            Luaran Tambahan
                          </th>
                          <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.000px;">
                            Tahun Luaran Tambahan
                          </th>
                          <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 150.000px;">
                            Action
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($luaran_tambahan as $ltambahan)
                        <tr role="row">
                          <td class="sorting_1">{{ $ltambahan->ID_LUARAN_TAMBAHAN }}</td>
                          <td class="sorting_1">{{ $ltambahan->LUARAN_TAMBAHAN }}</td>
                          <td>{{ $ltambahan->TAHUN_LUARAN_TAMBAHAN }}</td>
                          <td align="center">
                            <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModaledit{{ $ltambahan->ID_LUARAN_TAMBAHAN }}"><i class="nav-icon fas fa-edit"></i>Edit</a>
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
		document.getElementById('tanggal_luaran_tambahan').value = now;

</script>

@endsection