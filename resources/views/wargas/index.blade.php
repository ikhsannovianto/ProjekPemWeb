@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Manajemen Warga</h1>
    <a href="{{ route('wargas.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Tambah Warga</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">No Telp</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">RT</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wargas as $warga)
                <tr>
                    <td>{{ $warga->nama }}</td>
                    <td>{{ $warga->alamat }}</td>
                    <td>{{ $warga->no_telp }}</td>
                    <td>{{ $warga->email }}</td>
                    <td>{{ $warga->rt->nama }}</td>
                    <td class="text-center">
                        <a href="{{ route('wargas.edit', $warga->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <form action="{{ route('wargas.destroy', $warga->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
