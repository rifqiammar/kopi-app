@extends('layout/main')

@section('title', 'Form Ubah Data Produk')
    

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Ubah Data</h1>

                <form  method="POST" action="/products/{{ $product->id }}">
                    @method('patch')
                    @csrf <!-- Token Untuk Mengamankan Form -->
                    <div class="form-group">
                      <label class="my-2" for="kopi">Nama Kopi</label>
                      <input type="text" class="form-control @error('kopi') is-invalid @enderror" id="kopi" placeholder="Masukan Nama Kopi" name="kopi" value="{{$product->kopi}}">
                       @error('kopi')<div id="kopi" class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label class="my-2" for="asal">Asal</label>
                        <input type="text" class="form-control @error('asal') is-invalid @enderror" id="asal" placeholder="Masukan asal asal" name="asal" value="{{$product->asal}}">
                        @error('asal')<div id="asal" class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                      <div class="form-group">
                        <label class="my-2" for="proses">Proses</label>
                        <input type="text" class="form-control @error('proses') is-invalid  @enderror" id="proses" placeholder="Masukan proses Kopi" name="proses" value="{{$product->proses}}">
                        @error('proses')<div id="proses" class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label class="my-2" for="roasting">Roasting</label>
                        <input type="text" class="form-control @error('roasting') is-invalid  @enderror" id="roasting" placeholder="Masukan roasting Kopi" name="roasting" value="{{$product->roasting}}">
                        @error('roasting')<div id="roasting" class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <div class="form-group">
                        <label class="my-2" for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid  @enderror" id="harga" placeholder="Masukan harga Kopi" name="harga" value="{{$product->harga}}">
                        @error('harga')<div id="harga" class="invalid-feedback">{{$message}}</div>@enderror
                      </div>
                      <button type="submit" class="btn btn-primary mt-3 float-end">Ubah Data</button>
                  </form>

            </div>
        </div>
    </div>
@endsection