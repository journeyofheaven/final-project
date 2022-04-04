@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Kategori ~ {{$kategori->namaKategori}}</h4>
          <h4 class="card-title"><a href="/kategori" class="btn btn-primary my-3">Lihat Kategori Lain</a> </h4>
          </p>
          <table id="tabel" class="table table-bordered table-striped">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Barang</th>
                  <th>Kode Barang</th>
                  <th>Stock</th>
                  <th>Satuan</th>
                  <th>Supplier</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($kategori->barang as $key => $item)
            <tr> 
                <td>{{$key + 1}}</td>  
                <td>{{$item->namaBarang}}</td>
                <td>{{$item->kodeBarang}}</td>
                <td>{{$item->stockBarang}}</td>
                <td>{{$item->satuanBarang}}</td>
                <td>{{$item->supplier->namaSupplier}}</td>
            </tr>
        @empty
            <h2>Data Kosong</h2>
        @endforelse
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