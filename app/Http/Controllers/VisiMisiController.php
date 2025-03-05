<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visiMisi = VisiMisi::first();
        return view('profil.visi-misi.index', compact('visiMisi'));
    }

    public function create()
    {
        return view('profil.visi-misi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        VisiMisi::create($request->all());
        return redirect()->route('visi-misi.index')->with('success', 'Konten berhasil ditambahkan');
    }

    public function edit(VisiMisi $visiMisi)
    {
        return view('profil.visi-misi.edit', compact('visiMisi'));
    }

    public function update(Request $request, VisiMisi $visiMisi)
    {
        $request->validate([
            'content' => 'required'
        ]);

        $visiMisi->update($request->all());
        return redirect()->route('visi-misi.index')->with('success', 'Konten berhasil diperbarui');
    }
} 