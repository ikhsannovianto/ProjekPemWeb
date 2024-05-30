<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Warga;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with('warga')->get();
        return view('pembayarans.index', compact('pembayarans'));
    }

    public function create()
    {
        $wargas = Warga::all();
        return view('pembayarans.create', compact('wargas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_warga' => 'required|exists:wargas,id',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        Pembayaran::create($request->all());
        return redirect()->route('pembayarans.index');
    }

    public function edit(Pembayaran $pembayaran)
    {
        $wargas = Warga::all();
        return view('pembayarans.edit', compact('pembayaran', 'wargas'));
    }

    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'id_warga' => 'required|exists:wargas,id',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        $pembayaran->update($request->all());
        return redirect()->route('pembayarans.index');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return redirect()->route('pembayarans.index');
    }

    public function report()
    {
        $pembayarans = Pembayaran::with('warga')->get();
        return view('port', compact('pembayarans'));
    }
}
