<?php

namespace App\Http\Controllers;

use App\Models\RT;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function index()
    {
        $rts = RT::all();
        return view('rts.index', compact('rts'));
    }

    public function create()
    {
        return view('rts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        RT::create($request->all());
        return redirect()->route('rts.index');
    }

    public function edit(RT $rt)
    {
        return view('rts.edit', compact('rt'));
    }

    public function update(Request $request, RT $rt)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $rt->update($request->all());
        return redirect()->route('rts.index');
    }

    public function destroy(RT $rt)
    {
        $rt->delete();
        return redirect()->route('rts.index');
    }
}
