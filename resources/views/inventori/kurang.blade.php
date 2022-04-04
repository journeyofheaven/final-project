@extends('layout.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Kurangi Stock Barang ~ {{$barang->namaBarang}}</h4>
        <h6 class="card-title"><a href="/inventori">Kembali</a>
        <form class="forms-sample" action="/inventori/kurang/{{$barang->id}}" method="post">
          @csrf
          @method('put')
          <br>
          <br>
          <div class="form-group">
            <label for="stockBarang">Jumlah</label>
            <input type="number" class="form-control" name="stockBarang" id="namaBarang" value="{{$barang->stockBarang}}">
          </div>
          @error('stockBarang')
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