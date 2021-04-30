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


<!-- Input Data Penelitian -->
  @foreach ($penelitian as $pen)
  <div class="modal fade show" id="myModaltambah{{ $pen->ID_PENELITIAN }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Penelitian</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="card-body">
          <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form class="form-horizontal form-label-left" action="penelitianStore" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">               
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Ketua Peneliti</label>  
                  <div class="col-md-12 col-sm-12 col-xs-12">      
                  <select name="ID_pen" id="ID_pen" required class="form-control">
                    <option value="">Pilih Peneliti</option>
                    @foreach($peneliti as $pen)
                      <option value="{{ $pen->ID_PENELITI }}">{{ $pen->NAMA_PENELITI }}</option>
                    @endforeach
                  </select>
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul_Penelitian</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                    data-validate-words="2" id="judul_penelitian" name="judul_penelitian" placeholder="Masukan Nama Peneliti" required="required" 
                    type="text">
                    <input type="text" hidden name="tgl" id="tgl" value="">
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Skema</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                    data-validate-words="2" id="skema" name="skema" placeholder="Masukan Nama Peneliti" required="required" 
                    type="text">
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Bidang Fokus</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                    data-validate-words="2" id="bidang_fokus" name="bidang_fokus" placeholder="Masukan Nama Peneliti" required="required" 
                    type="text">
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Program</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                    data-validate-words="2" id="program" name="program" placeholder="Masukan Nama Peneliti" required="required" 
                    type="text">
                  </div>
                  <label class="control-label">Tahun Kegiatan</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                    data-validate-words="2" id="th_kegiatan" name="th_kegiatan" placeholder="Masukan Nama Peneliti" required="required" 
                    type="text">
                  </div>
                  <label class="control-label">Lama penelitian</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                    data-validate-words="2" id="lama_penelitian" name="lama_penelitian" placeholder="Masukan Nama Peneliti" required="required" 
                    type="text">
                  </div>
                  <label class="control-label"> Luaran Tambahan</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <select name="ltambahan" id="ltambahan" required class="form-control">
                    <option value="">Pilih Luaran Tambahan</option>
                    @foreach($penelitian as $pen )
                      <option value="{{ $pen->ID_LUARAN_TAMBAHAN }}">{{ $pen->LUARAN_TAMBAHAN }}</option>
                    @endforeach
                  </select>
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"> Luaran Wajib</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <select name="lwajib" id="lwajib" required class="form-control">
                    <option value="">Pilih Peneliti</option>
                    @foreach($penelitian as $pen )
                      <option value="{{ $pen->ID_LUARAN_WAJIB }}">{{ $pen->LUARAN_WAJIB }}</option>
                    @endforeach
                  </select>
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"> Pendanaan </label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <select name="dana" id="dana" required class="form-control">
                    <option value="">Pilih Peneliti</option>
                    @foreach($penelitian as $pen )
                      <option value="{{ $pen->ID_PENDANAAN }}">{{ $pen->JUMLAH_PENDANAAN }}</option>
                    @endforeach
                  </select>
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
<!-- End Input Data Penelitian -->

<!-- Edit Data Penelitian -->
  @foreach ($penelitian as $pen)
    <div class="modal fade show" id="myModalEdit{{ $pen->ID_PENELITIAN }}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Data Penelitian</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <form class="form-horizontal form-label-left" action="penelitianEdit/{{$pen->ID_PENELITIAN}}" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group row">               
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ketua Peneliti</label>  
                    <div class="col-md-12 col-sm-12 col-xs-12">    
                    <input value="{{$pen->NAMA_PENELITI}}" readonly class="form-control">  
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul_Penelitian</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                      data-validate-words="2" value ="{{$pen->JUDUL_PENELITIAN}}" id="judul_penelitian" name="judul_penelitian" placeholder="Masukan Nama Peneliti" required="required" 
                      type="text">
                      <input type="text" hidden name="tgl" id="tgl" value="">
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Skema</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                      data-validate-words="2" value="{{$pen->SKEMA}}" id="skema" name="skema" placeholder="Masukan Nama Peneliti" required="required" 
                      type="text">
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Bidang Fokus</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                      data-validate-words="2" value="{{$pen->BIDANG_FOKUS}}" id="bidang_fokus" name="bidang_fokus" placeholder="Masukan Nama Peneliti" required="required" 
                      type="text">
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Program</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                      data-validate-words="2" value="{{$pen->PROGRAM}}" id="program" name="program" placeholder="Masukan Nama Peneliti" required="required" 
                      type="text">
                    </div>
                    <label class="control-label">Tahun Kegiatan</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                      data-validate-words="2" value="{{$pen->TAHUN_KEGIATAN}}" id="th_kegiatan" name="th_kegiatan" placeholder="Masukan Nama Peneliti" required="required" 
                      type="text">
                    </div>
                    <label class="control-label">Lama penelitian</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                      data-validate-words="2" value="{{$pen->LAMA_PENELITIAN}}" id="lama_penelitian" name="lama_penelitian" placeholder="Masukan Nama Peneliti" required="required" 
                      type="text">
                    </div>
                    <label class="control-label"> Luaran Tambahan</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <select name="ltambahan" id="ltambahan" class="form-control">
                      <option>Pilih Luaran Tambahan</option>
                      @foreach($penelitian as $pen2 )
                        <option value="{{ $pen2->ID_LUARAN_TAMBAHAN }}" @if($pen2->ID_LUARAN_TAMBAHAN === $pen->ID_LUARAN_TAMBAHAN) selected @endif>{{ $pen2->LUARAN_TAMBAHAN }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Luaran Wajib</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <select name="lwajib" id="lwajib"  class="form-control">
                      <option>Pilih Peneliti</option>
                      @foreach($penelitian as $pen2 )
                        <option value="{{ $pen2->ID_LUARAN_WAJIB }}" @if($pen2->ID_LUARAN_WAJIB === $pen->ID_LUARAN_WAJIB) selected @endif>{{ $pen2->LUARAN_WAJIB }}</option>
                      @endforeach
                    </select>
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Pendanaan </label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <select name="dana" id="dana"  class="form-control">
                      <option>Pilih Peneliti</option>
                      @foreach($penelitian as $pen2 )
                        <option value="{{ $pen2->ID_PENDANAAN }}" @if($pen2->ID_PENDANAAN === $pen->ID_PENDANAAN) selected @endif>{{ $pen2->JUMLAH_PENDANAAN }}</option>
                      @endforeach
                    </select>
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
<!-- End Edit Data Penelitian -->

<!-- DETAIL PENELITIAN -->
  @foreach ($penelitian as $pen)
    <div class="modal fade show" id="myModal{{ $pen->ID_PENELITIAN }}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Detail Penelitian</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            <div class="modal-body">
              <div class="info" style="">
                <div class="form-group row">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Penelitian</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    {{ $pen->ID_PENELITIAN }}
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Ketua Peneliti</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    {{ $pen->NAMA_PENELITI }}
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">NIDN/NIDK</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    {{ $pen->NIDN_PENELITI }}
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul_Penelitian</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    {{ $pen->JUDUL_PENELITIAN }}
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Fakultas</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    @foreach ($fakultas as $fak)
                      @if($pen->ID_FAKULTAS==$fak->ID_FAKULTAS)
                        <td class="sorting_1">{{ $fak->NAMA_FAKULTAS }}</td>  
                      @endif
                    @endforeach
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Skema</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    {{ $pen->SKEMA }}
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Bidang Fokus</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    {{ $pen->BIDANG_FOKUS }}
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">tahun Kegiatan</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    {{ $pen->TAHUN_KEGIATAN }}
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">tahun Kegiatan</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    {{ $pen->LAMA_PENELITIAN }}
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"> Luaran Tambahan</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    @foreach ($luaran_tambahan as $ltambahan)
                      @if($pen->ID_LUARAN_TAMBAHAN==$ltambahan->ID_LUARAN_TAMBAHAN)
                        <td class="sorting_1">{{ $ltambahan->LUARAN_TAMBAHAN }}</td>  
                      @endif
                    @endforeach
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"> Luaran Wajib</label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    @foreach ($luaran_wajib as $lwajib)
                      @if($pen->ID_LUARAN_WAJIB==$lwajib->ID_LUARAN_WAJIB)
                        <td class="sorting_1">{{ $lwajib->LUARAN_WAJIB }}</td>  
                      @endif
                    @endforeach
                  </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"> PENDANAAN </label>
                  <div class="col-md-9 col-sm-6 col-xs-12">
                    @foreach ($pendanaan as $pend)
                      @if($pen->ID_PENDANAAN==$pend->ID_PENDANAAN)
                        <td class="sorting_1">{{ $pend->JUMLAH_PENDANAAN }}</td>  
                      @endif
                    @endforeach
                  </div>
                </div>
              </div>
            </div>    
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  @endforeach
<!-- End Detail Penelitian -->

<!-- Input Data Anggota Penelitian -->
@foreach ($penelitian as $pen)
  <div class="modal fade show after-add-more" id="myModaltambahAnggota{{ $pen->ID_PENELITIAN }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Anggota Penelitian</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="card-body">
          <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form class="form-horizontal form-label-left" action="penelitianStore" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">               
                  
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Program</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
                    data-validate-words="2" id="program" name="program" placeholder="Masukan Nama Peneliti" required="required" 
                    type="text">
                    <button class="btn btn-success add-more" type="button">
                      <i class="glyphicon glyphicon-plus"></i> Add
                    </button>
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
<!-- End Input Data Penelitian -->

<div class="content-wrapper" style="min-height: 1203.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="col-sm-12" style="text-align:center;" textsize="15px">
          <h1>PENELITIAN</h1>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaltambah{{ $pen->ID_PENELITIAN }}">
              <i class="fas fa-plus-circle"></i> Tambah Data
            </button>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Penelitian</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- LAYOUT DATA PENELITIAN -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Peneliti</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr role="row" style="text-align:center;">
                          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.000px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">
                            ID Penelitian
                          </th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.000px;" aria-label="Ketua: activate to sort column ascending">
                            Ketua Peneliti
                          </th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 200.000px;" aria-label="NIDN: activate to sort column ascending">
                            NIDN/NIDK Ketua
                          </th>
                          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 10px;" aria-label="Judul Penelitian: activate to sort column ascending">
                            Judul Penelitian
                          </th>
                          <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.000px;">
                            Fakultas
                          </th>
                          <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.000px;">
                            Skema
                          </th>
                          <!-- <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.000px;">
                            Bidang Fokus -->
                          </th>
                          <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.000px;">
                            Program
                          </th>
                          <!-- <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.000px;">
                            Tahun Kegiatan
                          </th>
                          <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50.000px;">
                            Lama Penelitian
                          </th> -->
                          <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 200.000px;">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($penelitian as $pen)
                        <tr role="row">
                          <td class="sorting_1">{{ $pen->ID_PENELITIAN }}</td>
                          <td class="sorting_1">{{ $pen->NAMA_PENELITI }}</td>
                          <td class="sorting_1">{{ $pen->NIDN_PENELITI }}</td>
                          <td class="sorting_1">{{ $pen->JUDUL_PENELITIAN }}</td>   
                          @foreach ($fakultas as $fak)
                            @if($pen->ID_FAKULTAS==$fak->ID_FAKULTAS)
                            <td class="sorting_1">{{ $fak->NAMA_FAKULTAS }}</td>  
                            @endif
                          @endforeach  
                          <td>{{ $pen->SKEMA }}</td>
                          <!-- <td>{{ $pen->BIDANG_FOKUS }}</td> -->
                          <td>{{ $pen->PROGRAM }}</td>
                          <!-- <td>{{ $pen->TAHUN_KEGIATAN }}</td>
                          <td>{{ $pen->LAMA_PENELITIAN }}</td> -->
                          <td style="align:center;">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModaltambahAnggota{{$pen->ID_PENELITIAN}}">Tambah Anggota</a>
                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#myModal{{ $pen->ID_PENELITIAN }}">Detail Penelitian</a>
                            <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModalEdit{{ $pen->ID_PENELITIAN }}"><i class="nav-icon fas fa-edit"></i>Edit</a>
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

  <div class="form-group row copy" hidden>               
                  
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Program</label>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <input id="nama_peneliti" class="form-control" data-validate-length-range="6" 
      data-validate-words="2" id="program" name="program" placeholder="Masukan Nama Peneliti" required="required" 
      type="text">
    </div>
    
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script> 
    var bulan = new Array('01','02','03','04','05','06','07','08','09','10','11','12');
		var now;
		var day = new Date();
		now = day.getFullYear()+"-"+bulan[day.getMonth()]+"-"+day.getDate();
    console.log(now);
		document.getElementById('tgl').value = now;

    
    console.log('x : ')
    const x = document.getElementsByClassName('post0');
    for(let i=0;i<x.length;i++){
        x[i].addEventListener('click',function(){
            x[i].submit();
        });
    }

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".add-more").click(function(){ 
        var html = $(".copy").html();
        $(".after-add-more").after(html);
    });
  });
</script>

@endsection