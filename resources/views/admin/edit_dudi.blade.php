@extends('admin.layouts.app')

@section('title', 'Edit Dudi')

@section('content')

<div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Edit Dudi</h6>
                            <form action="{{ route('admin.dudi.update', $dudi->id_dudi) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="dudi" class="form-label">Dudi</label>
                                    <input type="text" class="form-control" id="nama_dudi" name="nama_dudi" value="{{ old('nama_dudi', $dudi->nama_dudi) }}">
                                    <div class="text-danger">
                                        @error('nama_dudi')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                 <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat_dudi" name="alamat_dudi" value="{{ old('alamat_dudi', $dudi->alamat_dudi) }}">
                                    <div class="text-danger">
                                        @error('alamat_dudi')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

@endsection