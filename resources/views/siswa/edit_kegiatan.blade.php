@extends('siswa.layouts.app')

@section('title', 'Edit Siswa')

@section('content')

<div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Edit Siswa</h6>
                            <form action="{{ route('siswa.kegiatan.update', ['id_kegiatan'=>$kegiatan->id_kegiatan]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="tanggal_kegiatan" class="form-label">Tanggal_kegiatan</label>
                                    <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" value="{{ old('tanggal_kegiatan', $kegiatan->tanggal_kegiatan) }}">
                                    <div class="text-danger">
                                        @error('tanggal_kegiatan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_kegiatan" class="form-label">Nama_kegiatan</label>
                                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"  value="{{ old('tanggal_kegiatan', $kegiatan->nama_kegiatan) }}">
                                    <div class="text-danger">
                                        @error('nama_nama_kegiatan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="ringkasan_kegiatan" class="form-label">ringkasan_kegiatan</label>
                                    <textarea class="form-control" id="ringkasan_kegiatan"  rows="5"  name="ringkasan_kegiatan">{{ $kegiatan->ringkasan_kegiatan }}</textarea>
                                    <div class="text-danger">
                                        @error('ringkasan_kegiatan')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto">
                                    <div class="text-danger">
                                        @error('foto')
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