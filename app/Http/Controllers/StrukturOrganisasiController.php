<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $strukturs = StrukturOrganisasi::orderBy('urutan')->get();
        return view('profil.struktur-organisasi.index', compact('strukturs'));
    }

    public function create()
    {
        return view('profil.struktur-organisasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'urutan' => 'required|numeric',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('struktur-organisasi', 'public');
            $data['foto'] = $fotoPath;
        }

        StrukturOrganisasi::create($data);
        return redirect()->route('struktur-organisasi.index')->with('success', 'Anggota berhasil ditambahkan');
    }

    public function edit(StrukturOrganisasi $strukturOrganisasi)
    {
        return view('profil.struktur-organisasi.edit', compact('strukturOrganisasi'));
    }

    public function update(Request $request, StrukturOrganisasi $strukturOrganisasi)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'urutan' => 'required|numeric',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($strukturOrganisasi->foto) {
                Storage::disk('public')->delete($strukturOrganisasi->foto);
            }
            $fotoPath = $request->file('foto')->store('struktur-organisasi', 'public');
            $data['foto'] = $fotoPath;
        }

        $strukturOrganisasi->update($data);
        return redirect()->route('struktur-organisasi.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(StrukturOrganisasi $strukturOrganisasi)
    {
        if ($strukturOrganisasi->foto) {
            Storage::disk('public')->delete($strukturOrganisasi->foto);
        }
        
        $strukturOrganisasi->delete();
        return redirect()->route('struktur-organisasi.index')
            ->with('success', 'Anggota berhasil dihapus');
    }

    public function detail()
    {
        $strukturs = StrukturOrganisasi::orderBy('urutan')->get();
        return view('profil.struktur-organisasi.detail', compact('strukturs'));
    }
} 