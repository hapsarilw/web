<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pegawai  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="container">
    <h2>Tambah Pegawai</h2><br/>
    <form method="post" action="{{url('employees')}}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12"></div>
            <div class="form-group col-md-4">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" name="name">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="name">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="name">
                <label for="pegawai">Jenis Pegawai:</label>
                <div class="radio">
                    <label><input type="radio" name="jenispegawai" checked>Transaksi</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="jenispegawai">Keuangan</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="jenispegawai">Customer Service</label>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
            <div class="form-group col-md-4" style="margin-top:10px">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>