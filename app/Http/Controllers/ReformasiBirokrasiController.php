<?php

namespace App\Http\Controllers;

use App\Models\ReformasiBirokrasi;
use Illuminate\Http\Request;

class ReformasiBirokrasiController extends Controller
{
    public function index()
    {
        $reformasiBirokrasi = ReformasiBirokrasi::first();
        return view('layanan.reformasi-birokrasi.index', compact('reformasiBirokrasi'));
    }

    public function create()
    {
        return view('layanan.reformasi-birokrasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        ReformasiBirokrasi::create($request->all());
        return redirect()->route('reformasi-birokrasi.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(ReformasiBirokrasi $reformasiBirokrasi)
    {
        return view('layanan.reformasi-birokrasi.edit', compact('reformasiBirokrasi'));
    }

    public function update(Request $request, ReformasiBirokrasi $reformasiBirokrasi)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $reformasiBirokrasi->update($request->all());
        return redirect()->route('reformasi-birokrasi.index')->with('success', 'Data berhasil diperbarui');
    }
} 