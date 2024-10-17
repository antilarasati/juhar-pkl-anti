@extends('admin.layouts.app')

@section('title', 'Guru')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h6 class="mb-4">Data Guru</h6>
                <div class="table-responsive">
                    <a href="{{ route('admin.guru.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                    <table class="table" id="guru">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nip</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                               @foreach($gurus as $guru)
                               <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $guru->nip }}</td>
                                    <td>{{ $guru->email }}</td>
                                    <td>{{ $guru->nama_guru }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $guru->foto) }}" alt="" height="30">
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<script>
    $(document).ready(function() {
        $('#guru').DataTable();
    });
</script>

@endsection