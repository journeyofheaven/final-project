@extends('layout.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Supplier ~ {{$supplier->namaSupplier}}</h4>
        <h6 class="card-title"><a href="/supplier">Kembali</a>
          <br>
          <br>
          <form class="forms-sample" action="/supplier" method="POST">
            @csrf
            <div class="form-group">
              <label for="namaSupplier">Nama</label>
              <input type="text" class="form-control" name="namaSupplier" value="{{$supplier->namaSupplier}}" placeholder="Nama Supplier">
              @error('namaSupplier')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
            <br>
              <label for="kodeSupplier">Kode Supplier</label>
              <input type="number" class="form-control" name="kodeSupplier" id="kodeSupplier" value="{{$supplier->kodeSupplier}}" placeholder="Kode Supplier">
              @error('kodeSupplier')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
            <br>
              <label for="catatan">catatan Supplier</label>
              <textarea name="catatanSupplier" class="form-control my-editor">{!! old('catatan', $catatan ?? '') !!}{{$supplier->catatanSupplier}}</textarea>
              @error('catatanSupplier')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-5">Submit</button>
          </form>
          </div>
      </div>
    </div>
  </div>
@endsection