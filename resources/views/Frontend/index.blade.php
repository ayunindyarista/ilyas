<html style="height: auto;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div style="background-image: url('{{ asset('Login_v4/images/foto2.jpg') }}');"></div>
        <link rel="shortcut icon" href="https://unair.ac.id/assets/img/icon/favicon.png">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="AdminLTE-3.0.5/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
        <section class="content">
        <!-- Default box -->
            <div class="card" style="margin: 30px; margin-top: 100px;">
                <div class="card-header">
                    <h3 class="card-title">FORM KONTRAK PENELITIAN</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse" style="padding-top: 15px">
                            <i class="fas fa-minus"></i>
                        </button>
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIDN/NAMA PENELITI</label><br>
                        <select name="Nama_Peneliti" id="Nama_Peneliti" class="js-example-basic-single" style="padding:105px; width:100%;" required="required">
                            <option>Pilih Nama Peneliti</option>
                            <option>Pilih Judul</option>
                            <option>Pilih Judul</option>
                            <option>Pilih Judul</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">JUDUL PENELITIAN</label><br>
                        <select name="Judul_Peneliti" id="Judul_Peneliti" class="js-example-basic-single" style="padding:133px; width:100%;" required="required">
                            <option>Pilih Judul</option>
                            <option>Pilih Judul</option>
                            <option>Pilih Judul</option>
                            <option>Coba saja</option>
                        </select><br><br><br><br>
                    </div>
                    <ol class="float-sm-right" style="margin-top:10px;">
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-3">
                            <th>    <a href="print"><button type="button" class="btn btn-primary">Print PDF</button> </a></th>
                            <th>    <button type="submit" class="btn btn-danger"><a>Reset</a></button> </th>
                            <th>    <button id="submit" value="SimpanData" type="submit" class="btn btn-info">Cari..</button> </th>
                            </div>
                        </div>
                    </ol>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    LEMBAGA PENELITIAN DAN PENGABDIAN MASYARAKAT
                </div>
                <!-- /.card-footer-->
            </div>
        <!-- /.card -->
        </section>
    </body>
    <!-- <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>Copyright © 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer> -->
<!-- jQuery -->
<script src="AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.0.5/dist/js/demo.js"></script>
<!-- DROPDOWN SEARCH -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".js-example-basic-single").select2();
    });
</script>
