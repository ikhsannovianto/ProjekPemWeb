@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8">
            <div class="card border-0 rounded-lg p-5 shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="fw-bold my-4">Dashboard Iuran Warga</h3>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
                        <div class="col">
                            <div class="card h-100 border-0 rounded-3 shadow">
                                <div class="card-body text-center">
                                    <i class="bi bi-people fs-1 text-primary mb-3"></i>
                                    <h5 class="card-title">Manajemen RT dan Lingkungan</h5>
                                    <a href="{{ route('rts.index') }}" class="btn btn-primary">Kelola</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 rounded-3 shadow">
                                <div class="card-body text-center">
                                    <i class="bi bi-person fs-1 text-primary mb-3"></i>
                                    <h5 class="card-title">Manajemen Warga</h5>
                                    <a href="{{ route('wargas.index') }}" class="btn btn-primary">Kelola</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 rounded-3 shadow">
                                <div class="card-body text-center">
                                    <i class="bi bi-cash-coin fs-1 text-primary mb-3"></i>
                                    <h5 class="card-title">Riwayat Tagihan Warga per Bulan</h5>
                                    <a href="{{ route('tagihans.index') }}" class="btn btn-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 rounded-3 shadow">
                                <div class="card-body text-center">
                                    <i class="bi bi-currency-exchange fs-1 text-primary mb-3"></i>
                                    <h5 class="card-title">Riwayat Pembayaran per Warga per Bulan</h5>
                                    <a href="{{ route('pembayarans.index') }}" class="btn btn-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
