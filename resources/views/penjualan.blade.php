<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Penjualan</title>
  </head>
  <body>
    <h1>Aplikasi Konter Sederhana</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SIKONTER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Barang</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="/penjualan">Penjualan</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <br>
    <div class="container">
    <div class="card">
        <div class="card-header">
          <h3>DATA PENJUALAN</h3>
        </div>
        <div class="card-body">
        <a href="/tambah-penjualan" class="btn btn-primary">Tambah Penjualan</a>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Cetak Struk
        </button>
        <hr>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Waktu Pemesanan</th>
              <th scope="col">Kode Penjualan</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga Satuan</th>
              <th scope="col">Harga Total</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($penjualan as $data)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$data->tanggal_penjualan}}</td>
              <td>{{$data->kode_penjualan}}</td>
              <td>{{$data->nama_barang}}</td>
              <td>{{$data->jumlah_beli}}</td>
              <td>{{$data->harga}}</td>
              <td>{{$data->harga * $data->jumlah_beli}}</td>
              <td>
                <a href="" class="btn btn-sm btn-warning">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-5 col-form-label">Nama Pembeli</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="staticEmail">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-5 col-form-label">Kode Penjualan</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="staticEmail">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-5 col-form-label">Tanggal Penjualan</label>
              <div class="col-sm-7">
                <input type="date" value="{{date('Y-m-d')}}" class="form-control" id="staticEmail">
              </div>
            </div>
        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Cetak</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>