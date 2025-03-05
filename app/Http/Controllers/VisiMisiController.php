<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'content' => $request->content
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('visi-misi', 'public');
            $data['image'] = $imagePath;
            
            \Log::info('Image path: ' . $imagePath);
        }

        VisiMisi::create($data);
        return redirect()->route('visi-misi.index')->with('success', 'Konten berhasil ditambahkan');
    }

    public function edit(VisiMisi $visiMisi)
    {
        return view('profil.visi-misi.edit', compact('visiMisi'));
    }

    public function update(Request $request, VisiMisi $visiMisi)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'content' => $request->content
        ];

        if ($request->hasFile('image')) {
            if ($visiMisi->image && Storage::disk('public')->exists($visiMisi->image)) {
                Storage::disk('public')->delete($visiMisi->image);
            }
            
            $imagePath = $request->file('image')->store('visi-misi', 'public');
            $data['image'] = $imagePath;
        }

        $visiMisi->update($data);
        return redirect()->route('visi-misi.index')->with('success', 'Konten berhasil diperbarui');
    }
} 