@extends('layout.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @auth
        <h4 class="card-title"><a href="/barang/create" class="btn btn-primary my-3">Tambah Barang</a> </h4>
        @endauth
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> id </th>
                <th> Nama Barang</th>
                <th> Kode Barang</th>
                <th> Kategori</th>
                <th> Supplier</th>
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
                <td>
                  @auth
                  <form action="/barang/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                <a href="/barang/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                <a href="/barang/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <input type="submit" class="btn btn-danger btn-sm" value="delete">  
                </form>
                  @endauth
                  @guest
                  <a href="/barang/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                  @endguest 
                </td>   
              </tr>
              @empty
                  <h4>Data Kosong</h4>  
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