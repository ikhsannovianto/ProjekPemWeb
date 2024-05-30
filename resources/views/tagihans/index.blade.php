@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Riwayat Tagihan Warga per Bulan</h1>
    <a href="{{ route('tagihans.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Tambah Tagihan</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Warga</th>
                    <th class="text-center">Bulan</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tagihans as $tagihan)
                <tr>
                    <td>{{ $tagihan->warga->nama }}</td>
                    <td>{{ $tagihan->bulan }}</td>
                    <td>{{ $tagihan->tahun }}</td>
                    <td>{{ $tagihan->jumlah }}</td>
                    <td class="text-center">
                        <a href="{{ route('tagihans.edit', $tagihan->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <form action="{{ route('tagihans.destroy', $tagihan->id) }}" method="POST" class="d-inline">
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
