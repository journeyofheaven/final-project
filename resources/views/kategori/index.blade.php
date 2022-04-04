@extends('layout.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @auth   
        <h4 class="card-title"><a href="/kategori/create" class="btn btn-primary my-3">Tambah Kategori</a> </h4>
        @endauth
        </p>
        <div class="table-responsive">
          <table id="tabel" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th> # </th>
                <th> Nama Kategori </th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
              @forelse ($kategori as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->namaKategori}}</td>
                <td>
                  @auth
                      
                  <form action="/kategori/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/kategori/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/kategori/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="delete">  
                  </form>
                  @endauth
                  @guest
                  <a href="/kategori/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                  @endguest
                </td>
            </tr>
        @empty
            <h2>Data Kosong</h2>
            <br>
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