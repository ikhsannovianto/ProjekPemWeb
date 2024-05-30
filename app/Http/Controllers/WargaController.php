<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\RT;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $wargas = Warga::with('rt')->get();
        return view('wargas.index', compact('wargas'));
    }

    public function create()
    {
        $rts = RT::all();
        return view('wargas.create', compact('rts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'id_rt' => 'required|exists:rts,id',
        ]);

        Warga::create($request->all());
        return redirect()->route('wargas.index');
    }

    public function edit(Warga $warga)
    {
        $rts = RT::all();
        return view('wargas.edit', compact('warga', 'rts'));
    }

    public function update(Request $request, Warga $warga)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'id_rt' => 'required|exists:rts,id',
        ]);

        $warga->update($request->all());
        return redirect()->route('wargas.index');
    }

    public function destroy(Warga $warga)
    {
        $warga->delete();
        return redirect()->route('wargas.index');
    }
}
