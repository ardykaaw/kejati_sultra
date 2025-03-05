<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::first();
        return view('profil.struktur-organisasi.index', compact('strukturOrganisasi'));
    }

    public function create()
    {
        return view('profil.struktur-organisasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('struktur-organisasi', 'public');
            $data['image'] = $imagePath;
        }

        StrukturOrganisasi::create($data);
        return redirect()->route('struktur-organisasi.index')->with('success', 'Konten berhasil ditambahkan');
    }

    public function edit(StrukturOrganisasi $strukturOrganisasi)
    {
        return view('profil.struktur-organisasi.edit', compact('strukturOrganisasi'));
    }

    public function update(Request $request, StrukturOrganisasi $strukturOrganisasi)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($strukturOrganisasi->image) {
                Storage::disk('public')->delete($strukturOrganisasi->image);
            }
            $imagePath = $request->file('image')->store('struktur-organisasi', 'public');
            $data['image'] = $imagePath;
        }

        $strukturOrganisasi->update($data);
        return redirect()->route('struktur-organisasi.index')->with('success', 'Konten berhasil diperbarui');
    }
} 