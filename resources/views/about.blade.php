@extends('layout/main')

@section('tittle', 'About')


@section('container')    
<div class="container">
   <div class="row">
       <div class="col-10">
           <h1 class="mt-3">Hallo, {{$nama}}</h1>
       </div>
   </div>
</div>
@endsection