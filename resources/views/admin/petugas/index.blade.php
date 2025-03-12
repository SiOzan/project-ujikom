@extends('layouts.admin')

@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4>Mengelola Data Petugas</h4>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('admin.petugas.create') }}" class="btn btn-success">Tambah</a>
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
                                <th>No Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($petugas as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <p class="font-bold mb-0">{{ $item->nama }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ $item->no_telepon }}</p>
                                    </td>
                                    <td class="col-2">
                                        <a href="{{ route('admin.user.edit', $item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="ubah"><span class="badge bg-light-warning"><i
                                                    class="iconly-boldEdit"></i></span></a>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="hapus"><span class="badge bg-light-danger"><i
                                                    class="iconly-boldDelete"></i></span></a>
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
