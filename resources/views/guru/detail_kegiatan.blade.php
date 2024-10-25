@extends('admin.layouts.app')

@section('title', 'Detail Kegiatan')

@section('content')

<div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Detail Kegiatan</h6>
                            <form action="{{ route('guru.pembimbing.siswa.kegiatan.detail', $kegiatan->id_siswa) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ old('nama_siswa', $kegiatan->nama_siswa) }}">
                                    <div class="text-danger">
                                        @error('nama_siswa')
                                        {{ $message }}
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_kegiatan" class="form-label">Tanggal Kegiatan</label>
                                    <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" value="{{ old('tanggal_kegiatan', $kegiatan->tanggal_kegiatan) }}">
                                    <div class="text-danger">
                                        @error('tanggal_kegiatan')
                                        {{ $message }}
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}">
                                    <div class="text-danger">
                                        @error('nama_kegiatan')
                                        {{ $message }}
                                        @enderror
                                </div>
                                 <div class="mb-3">
                                    <label for="ringkasan_kegiatan" class="form-label">Ringkasan Kegiatan</label>
                                    <input type="text" class="form-control" id="ringkasan_kegiatan" name="ringkasan_kegiatan" value="{{ old('ringkasan_kegiatan', $kegiatan->ringkasan_kegiatan) }}">
                                    <div class="text-danger">
                                        @error('ringkasan_kegiatan')
                                        {{ $message }}
                                        @enderror
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
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $kegiatan->foto) }}" alt="" height="80">
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

@endsection