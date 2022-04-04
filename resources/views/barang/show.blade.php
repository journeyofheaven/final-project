@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Barang ~ {{$barang->namaBarang}}</h4>
          <h4 class="card-title"><a href="/barang" class="btn btn-primary my-3">Lihat Barang Lain</a> </h4>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Kategori</th>
                  <th>Supplier</th>
                  <th>Stock</th>
                  <th>Satuan</th>
                </tr>
              </thead>
              <tbody>
            <tr> 
                <td>{{$barang->kategori->namaKategori}}</td>
                <td>{{$barang->supplier->namaSupplier}}</td>
                <td>{{$barang->stockBarang}}</td>
                <td>{{$barang->satuanBarang}}</td>
            </tr>
              </tbody>
            </table>
            <script>
              $(document).ready(function() {
              $('#tabel').DataTable();
            } );
          </script>
          </div>
        </div>
      </div>
    </div>
@endsection