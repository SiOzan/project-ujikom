@extends('layouts.admin')

@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Kontak Saran Masyarakat</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('admin.kontak.store') }}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="first-name-vertical">Nama</label>
                                    <input type="text" id="first-name-vertical"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ old('nama') }}" placeholder="masukan nama">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Email</label>
                                        <input type="email" id="email-id-vertical"
                                            class="form-control @error('nama') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="masukan email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first-name-vertical">Judul Kontak</label>
                                    <input type="text" id="first-name-vertical"
                                        class="form-control @error('judul') is-invalid @enderror" name="judul"
                                        value="{{ old('judul') }}" placeholder="masukan judul laporan">
                                    @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1"
                                        name="deskripsi" value="{{ old('deskripsi') }}" rows="4"></textarea>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <a href="{{ route('admin.kontak.index') }}"
                                        class="btn btn-light-secondary me-1 mb-1">Kembali</a>
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
