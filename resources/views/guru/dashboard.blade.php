@extends('guru.layouts.app')

@section('tittle', 'Dashboard')

@section('content')
<div class="row bg-light rounded align-items-center justify-content-center mx-0">
    <div class="col-md-6 text-center p-3">
        <h3>Hi, {{ Auth::guard('guru')->user()->nama_guru  }} Selamat datang di halaman dashboard</h3>
    </div>
</div>
@endsection