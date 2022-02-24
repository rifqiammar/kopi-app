@extends('layout/main')

@section('title', 'Detail Kopi')
    

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Kopi</h1>

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$product->kopi}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$product->Asal}}</h6>
                      <p class="card-text">{{$product->proses}}</p>
                      <p class="card-text">{{$product->roasting}}</p>
                      <p class="card-text">{{$product->harga}}</p>
                      <a href="{{ $product->id}}/edit" class="btn btn-primary ">Edit</a>
                      <form action="/products/{{ $product->id}}" method="POST" class="d-inline"> 
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ">Delete</button>
                      </form>
                      <a href="{{'/products'}}" class="card-link float-end pe-4" style="text-decoration: none;">Kembali</a>
                    </div>
                  </div>

            </div>
        </div>
    </div>
@endsection