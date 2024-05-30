<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Models\Warga;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihans = Tagihan::with('warga')->get();
        return view('tagihans.index', compact('tagihans'));
    }

    public function create()
    {
        $wargas = Warga::all();
        return view('tagihans.create', compact('wargas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_warga' => 'required|exists:wargas,id',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer',
            'jumlah' => 'required|numeric',
        ]);

        Tagihan::create($request->all());
        return redirect()->route('tagihans.index');
    }

    public function edit(Tagihan $tagihan)
    {
        $wargas = Warga::all();
        return view('tagihans.edit', compact('tagihan', 'wargas'));
    }

    public function update(Request $request, Tagihan $tagihan)
    {
        $request->validate([
            'id_warga' => 'required|exists:wargas,id',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer',
            'jumlah' => 'required|numeric',
        ]);

        $tagihan->update($request->all());
        return redirect()->route('tagihans.index');
    }

    public function destroy(Tagihan $tagihan)
    {
        $tagihan->delete();
        return redirect()->route('tagihans.index');
    }
}
