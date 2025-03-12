@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="alert alert-light-success color-success" role="alert">
            <i class="bi bi-check-circle"></i>
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-light-danger color-danger" role="alert">
            <i class="bi bi-exclamation-circle"></i>
            {{ session('error') }}
        </div>
    @endif
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4>Kontak Saran Masyarakat</h4>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('admin.kontak.create') }}" class="btn btn-success">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontak as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <p class="font-bold mb-0">{{ $item->nama }}</p>
                                    </td>
                                    <td>
                                        <p class="font-bold mb-0">{{ $item->email }}</p>
                                    </td>
                                    <td>
                                        <p class="font-bold mb-0">{{ $item->judul }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ $item->deskripsi }}</p>
                                    </td>
                                    <td class="col-2">
                                        {{-- <a href="{{ route('admin.kategori_pengaduan.edit', $item->slug) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="ubah"><span
                                                class="badge bg-light-warning"><i class="iconly-boldEdit"></i></span></a>
                                        <a href="{{ route('admin.kategori_pengaduan.destroy', $item->id) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="hapus"><span
                                                class="badge bg-light-danger"><i class="iconly-boldDelete"></i></span></a> --}}
                                        <form action="{{ route('admin.kontak.destroy', $item->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <div class="d-flex">
                                                <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="hapus"
                                                    class="btn btn-outline-danger rounded-pill d-flex justify-content-center align-items-center"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>

                                            {{-- <a class="btn btn-sm btn-outline-danger" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="hapus"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span
                                                    class="badge bg-light-danger"><i
                                                        class="iconly-boldDelete"></i></span></a> --}}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
