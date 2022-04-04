@extends('layout.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Barang ~ {{$barang->namaBarang}}</h4>
        <h6 class="card-title"><a href="/barang">Kembali</a>
        <form class="forms-sample" action="/barang/{{$barang->id}}" method="post">
          @csrf
          @method('put')
          <br>
          <br>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="namaBarang" value="{{$barang->namaBarang}}" id="nama" placeholder="Nama Barang">
          </div>
          @error('nama')
                      <div class="alert alert-danger">
                          {{ $message }}
                      </div>
              @enderror
          <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" id="kode" name="kodeBarang" value="{{$barang->kodeBarang}}" placeholder="Kode Barang">
          </div>
          @error('kode')
                      <div class="alert alert-danger">
                          {{ $message }}
                      </div>
              @enderror
              <div class="form-group">
                <label for="kategori">Kategori</label>
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