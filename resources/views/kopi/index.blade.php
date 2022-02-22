@extends('layout/main')

@section('title', 'Daftar Kopi')
    

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Kopi</h1>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Kopi</th>
                            <th scope="col">Asal</th>
                            <th scope="col">Proses</th>
                            <th scope="col">Roasting</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kopi as $value ) 
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $value->kopi }}</td>
                            <td>{{ $value->asal }}</td>
                            <td>{{ $value->proses }}</td>
                            <td>{{ $value->roasting }}</td>
                            <td>Rp. {{ $value->harga }}</td>
                            
                            <td>
                                <a href="" class="btn btn-outline-success">edit</a>
                                <a href="" class="btn btn-outline-danger">hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection