<?php

namespace App\Http\Controllers;

use App\Models\TriKrama;
use Illuminate\Http\Request;

class TriKramaController extends Controller
{
    public function index()
    {
        $triKrama = TriKrama::first();
        return view('profil.tri-krama.index', compact('triKrama'));
    }

    public function create()
    {
        return view('profil.tri-krama.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        TriKrama::create($request->all());
        return redirect()->route('tri-krama.index')->with('success', 'Konten berhasil ditambahkan');
    }

    public function edit(TriKrama $triKrama)
    {
        return view('profil.tri-krama.edit', compact('triKrama'));
    }

    public function update(Request $request, TriKrama $triKrama)
    {
        $request->validate([
            'content' => 'required'
        ]);

        $triKrama->update($request->all());
        return redirect()->route('tri-krama.index')->with('success', 'Konten berhasil diperbarui');
    }
} 