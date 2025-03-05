<?php

namespace App\Http\Controllers;

use App\Models\TriKrama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TriKramaController extends Controller
{
    public function detail()
    {
        $triKrama = TriKrama::first();
        return view('profil.tri-krama.detail', compact('triKrama'));
    }

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
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('tri-krama', 'public');
            $validated['image'] = $path;
        }

        TriKrama::create($validated);

        return redirect()->route('tri-krama.index')
            ->with('success', 'Tri Krama Adhyaksa berhasil ditambahkan');
    }

    public function edit(TriKrama $triKrama)
    {
        return view('profil.tri-krama.create', compact('triKrama'));
    }

    public function update(Request $request, TriKrama $triKrama)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($triKrama->image) {
                Storage::disk('public')->delete($triKrama->image);
            }
            $path = $request->file('image')->store('tri-krama', 'public');
            $validated['image'] = $path;
        }

        $triKrama->update($validated);

        return redirect()->route('tri-krama.index')
            ->with('success', 'Tri Krama Adhyaksa berhasil diperbarui');
    }

    public function destroy(TriKrama $triKrama)
    {
        if ($triKrama->image) {
            Storage::disk('public')->delete($triKrama->image);
        }
        
        $triKrama->delete();

        return redirect()->route('tri-krama.index')
            ->with('success', 'Tri Krama Adhyaksa berhasil dihapus');
    }
} 