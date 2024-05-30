@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Manajemen RT</h1>
    <a href="{{ route('rts.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Tambah RT</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Nama RT</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rts as $rt)
                <tr>
                    <td>{{ $rt->nama }}</td>
                    <td class="text-center">
                        <a href="{{ route('rts.edit', $rt->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <form action="{{ route('rts.destroy', $rt->id) }}" method="POST" class="d-inline">
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
