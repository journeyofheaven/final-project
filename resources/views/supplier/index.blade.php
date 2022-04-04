@extends('layout.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><a href="/supplier/create" class="btn btn-primary my-3">Tambah Supplier</a> </h4>
        </p>
        <div class="table-responsive">
          <table id="tabel" class="table table-bordered table-striped" style="width:100%">
            <thead>
              <tr>
                <th> # </th>
                <th> Nama Supplier </th>
                <th> Kode Supplier </th>
                <th> Catatan Supplier </th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
              @forelse ($supplier as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->namaSupplier}}</td>
                <td>{{$item->kodeSupplier}}</td>
                <td>{!! $item->catatanSupplier !!}</td>
                <td>
                    <form action="/supplier/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                    <a href="/supplier/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/supplier/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="delete">  
                    </form>
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