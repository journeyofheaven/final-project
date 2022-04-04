@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">{{$supplier->namaSupplier}} ~ {{$supplier->kodeSupplier}}</h4>
          <h4 class="card-title"><a href="/supplier" class="btn btn-primary my-3">Lihat Supplier Lain</a> </h4>
          </p>
          <div class="table-responsive">
            <table id="tabel" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Barang</th>
                  <th>Kode Barang</th>
                  <th>Kategori</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($supplier->barang as $key => $item)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$item->namaBarang}}</td>
                    <td>{{$item->kodeBarang}}</td>
                    <td>{{$item->kategori->namaKategori}}</td>      
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