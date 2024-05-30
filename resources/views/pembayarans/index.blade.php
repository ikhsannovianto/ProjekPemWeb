@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Riwayat Pembayaran per Warga per Bulan</h1>
    <a href="{{ route('pembayarans.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Tambah Pembayaran</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Warga</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembayarans as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->warga->nama }}</td>
                    <td>{{ $pembayaran->jumlah }}</td>
                    <td>{{ $pembayaran->tanggal }}</td>
                    <td class="text-center">
                        <a href="{{ route('pembayarans.edit', $pembayaran->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <form action="{{ route('pembayarans.destroy', $pembayaran->id) }}" method="POST" class="d-inline">
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
