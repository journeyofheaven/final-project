@extends('layout.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      @auth
      <h4 class="card-title"><p class="btn btn-primary my-3">Daftar Barang</p> </h4>
      @endauth
        <table id="tabel" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th> id </th>
              <th> Nama Barang</th>
              <th> Kode Barang</th>
              <th> Kategori</th>
              <th> Supplier</th>
              <th> Stock</th>
              <th> Satuan</th>

              <th>  </th>
            </tr>
          </thead>

          <tbody>
            @forelse ($barang as $key => $item)
            <tr>
              <td> {{$key + 1}}</td>
              <td> {{$item->namaBarang}}</td>
              <td> {{$item->kodeBarang}}</td>
              <td> {{$item->kategori->namaKategori}}</td>
              <td> {{$item->supplier->namaSupplier}}</td>
              <td> {{$item->stockBarang}}</td>
              <td> {{$item->satuanBarang}}</td>
              <td>
                @auth
              <a href="/inventori/tambah/{{$item->id}}" class="btn btn-success btn-sm">Tambah Stock</a>
              <a href="/inventori/kurang/{{$item->id}}" class="btn btn-warning btn-sm">Kurangi Stock</a> 
                @endauth
              </td>   
            </tr>
            @empty
                <h4>Data Kosong</h4>  
              @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>   
@endsection