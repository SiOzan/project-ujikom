@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/choices.js/choices.min.css') }}" />
@endsection

@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Membuat Akun Petugas</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label>Akun Petugas</label>
                                    <div class="form-group">
                                        <select class="choices form-select">
                                            @foreach ($akunPetugas as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="disabledInput">Nama Petugas</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                            value="Auto select name petugas sesuai akun :P">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="contact-info-vertical">No Telepon</label>
                                        <input type="number" id="contact-info-vertical" class="form-control"
                                            name="no_telepon" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="input-group mb-3">
                                        <label>Foto Petugas</label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                    </div>
                                    </fieldset>
                                </div>
                                <label for="helperText">Alamat</label>
                                <div class="col-md-6 col-12">
                                    <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                        value="KABUPATEN BANDUNG">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="text" id="helperText" class="form-control" placeholder="KECAMATAN"
                                        style="text-transform:uppercase;">
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <a href="{{ route('admin.user.index') }}"
                                    class="btn btn-light-secondary me-1 mb-1">Kembali</a>
                                <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('backend/assets/vendors/choices.js/choices.min.js') }}"></script>
@endpush
