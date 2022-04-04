@extends('layout.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Kategori ~ {{$kategori->namaKategori}}</h4>
        <h6 class="card-title"><a href="/kategori">Lihat Kategori Lain</a>
          <br>
          <br>
        <form class="forms-sample" action="/kategori/{{$kategori->id}}" method="POST">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="namaKategori">Nama</label>
            <input type="text" class="form-control" name="namaKategori" id="namaKategori" value="{{$kategori->namaKategori}}">
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