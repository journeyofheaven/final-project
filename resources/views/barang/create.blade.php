@extends('layout.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Barang</h4>
      <h6 class="card-title justify-content-end"><a href="/barang">Kembali</a></h6>
      <form class="forms-sample" action="/barang" method="post">
        @csrf
        <div class="form-group">
          <label for="namaBarang">Nama Barang</label>
          <input type="text" class="form-control" name="namaBarang" id="namaBarang" placeholder="Nama Barang">
        </div>
        @error('namaBarang')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
        <div class="form-group">
          <label for="kodeBarang">Kode Barang</label>
          <input type="number" class="form-control" id="kodeBarang" name="kodeBarang" placeholder="Kode Barang">
        </div>
        @error('kodeBarang')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
        <div class="form-group">
            <label for="satuan">satuan</label>
            <select name="satuanBarang" id="" class="form-control">
              <option value="">--Pilih satuan--</option>
                    <option value="pcs">pcs</option>
                    <option value="box">box</option>
              </select>
          </div>
                @error('satuanBarang')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
        @enderror
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <input type="hidden" name="stockBarang" value="0">
          <select name="kategori_id" id="" class="form-control">
            <option value="">--Pilih Kategori--</option>
              @foreach ($kategori as $item)
                  <option value="{{$item->id}}">{{$item->namaKategori}}</option>
              @endforeach
            </select>
        </div>
        @error('kategori_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
            @enderror
        <div class="form-group">
          <label for="supplier">Supplier</label>
          <select name="supplier_id" id="" class="form-control">
            <option value="">--Pilih Supplier--</option>
              @foreach ($supplier as $item)
                  <option value="{{$item->id}}">{{$item->namaSupplier}}</option>
              @endforeach
            </select>
        </div>
        @error('supplier_id')
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