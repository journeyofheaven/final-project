@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Kategori</h4>
          <h6 class="card-title"><a href="/kategori">Kembali</a>
            <br>
            <br>
          <form class="forms-sample" action="/kategori" method="POST">
            @csrf
            <div class="form-group">
              <label for="namaKategori">Nama</label>
              <input type="text" class="form-control" name="namaKategori" id="namaKategori" placeholder="Nama Kategori">
            </div>
            @error('namaKategori')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
@endsection