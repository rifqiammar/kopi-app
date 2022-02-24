@extends('layout/main')

@section('title', 'Daftar Kopi')
    

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Kopi</h1>
                
                <a href="/products/create" class="btn btn-primary my-3">Tambah Data Produk</a>
                
                    {{-- Flash Message jika data berhasil ditambahkan --}}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <ul class="list-group">
                    @foreach ($products as $value)    
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $value->kopi }}
                        <a  href="/products/{{$value->id}}" class="badge bg-info rounded-pill">detail</a>
                    </li>
                    @endforeach
                  </ul>

            </div>
        </div>
    </div>
@endsection